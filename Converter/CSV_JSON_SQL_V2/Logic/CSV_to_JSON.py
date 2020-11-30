import csv, json
import sys
from pathlib import Path

from PyQt5 import QtWidgets, QtGui

from Logic.Exceptions import ListCSVEmpty, CSVIsNoMore, DbIsMissing, Error


class CSV_to_JSON:

    def __init__(self, MainWindow):
        self.data = {}
        self.listJSON = {}
        self.Win = MainWindow

    # #######################################################
    # Méthode Convert_json(self, csvFilePath, jsonFilePath)
    # Description :
    # Méthode permettant de convertir un CSV en JSON
    # @param self
    # @param csvFilePath, le chemin correspondant au fichier CSV
    # @param jsonFilePath, le chemin correspondant au fichier JSON
    # @return true si la conversion se passe bien
    # ########################################################
    def Convert_json(self, csvFilePath, jsonFilePath):
        res = False
        try:
            # Ouvrir fichier CVS en lecture
            self.clean()
            csvfile = open(csvFilePath, encoding='utf-8-sig')
            csvReader = csv.DictReader(csvfile, delimiter=';')

            # Pour chaque ligne
            for rows in csvReader:
                key = rows['IdDon']  # O2n considère que la clef primaire s'appelle ID
                rows['Informations'] = self.Checkmydate(rows['Informations'])
                if rows['Nature'] == "":
                    rows['Nature'] = "Aucune mention Particulière"
                else:
                    rows['Nature'] = rows['Nature'].replace("\"", "\\\"")
                if rows['Lieu'] == "":
                    rows['Lieu'] == "Aucune mention"
                if rows['Formes'] == "":
                    rows['Formes'] = "Aucune mention"
                else:
                    rows['Formes'] = rows['Formes'].replace("\"", "\\\"")

                if rows['Poids'] == "":
                    rows['Poids'] = "Aucune mention"
                if rows['Prix'] == "":
                    rows['Prix'] = "Aucune mention"
                if rows['Statut'] == "":
                    rows['Statut'] = "Statut Inconnu"
                self.data[key] = [rows]  # On remplit le dictionnaire des valeurs de la ligne

            # Ouvir fichier JSON en écriture
            jsonfile = open(jsonFilePath, 'w', encoding='utf-8')
            jsonfile.write(json.dumps(self.data, ensure_ascii=False, indent=4))
        # Si il y a une quelconque erreur, elle est levée
        except:
            Error.ErrorMessage(Error, str(sys.exc_info()[1]))
        else:
            res = True
        finally:
            csvfile.close()
            jsonfile.close()
            del csvfile
            del csvReader
            del jsonfile
            return res

    def clean(self):
        self.data = {}
        # #######################################################
        # Méthode MonthFRtoEN(self, dateToChange):
        # Description :
        # Méthode permettant de vérifier et/ou non modifier la date d'un element du JSON
        # @param self
        # @param dateToChange, la date Initiale
        # @return la date dans le format nécessaire
        # ########################################################

    def MonthFRtoEN(self, dateToChange):
        arrSearch = [
            'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î',
            'ï', 'ð', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ú', 'û', 'ü', 'ý', 'ÿ']
        arrReplace = [
            'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i',
            'i', 'o', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'u', 'y', 'y']

        # Transformer la date en minuscule
        dateToChange = dateToChange.lower()
        # Supprimer les accents
        for i in range(len(arrSearch)):
            dateToChange = dateToChange.replace(arrSearch[i], arrReplace[i])

        monthsDict = {
            "janvier": "January", "fevrier": "February", "mars": "March", "avril": "April", "mai": "May",
            "juin": "June", "juillet": "July", "aout": "August", "september": "September", "octobre": "October",
            "novembre": "November", "decembre": "December"
        }
        # Si la date ne change pas, la renvoyer par défaut
        res = dateToChange[0].upper() + dateToChange[1:-1] + dateToChange[-1]
        # Récupérer le mois correspondant en Anglais
        for fr, en in monthsDict.items():
            if fr in dateToChange:
                res = en
        return res

    # #######################################################
    # Méthode Checkmydate(self, date):
    # Description :
    # Méthode permettant de récuperer seulement la date du champs informations du JSON
    # @param self
    # @param date, le champs informations du JSON
    # @return la date contenu dans le champs
    # ########################################################
    def Checkmydate(self, date):
        decompose = date.split()
        separator = ' '
        # Passage en deux étape afin de retirer les textes entre parenthèses
        for element in decompose:
            if '(' in element:
                decompose.remove(element)
        for element in decompose:
            if ')' in element:
                decompose.remove(element)
        # Cas ou seule l'année est donnée
        if len(decompose) == 1:
            if decompose[0].isnumeric() & (len(decompose[0]) == 4):
                return '1 January ' + decompose[0]
        # Cas ou seule le mois et l'année sont donnés
        elif len(decompose) == 2:
            decompose[0] = self.MonthFRtoEN(decompose[0])
            return '1 ' + separator.join(decompose)
        # Cas ou la date est complète
        elif len(decompose) == 3:
            decompose[1] = self.MonthFRtoEN(decompose[1])
            return separator.join(decompose)

    # #######################################################
    # Méthode CheckandConvert(self, MainWindow):
    # Description :
    # Méthode permettant de convertir les CSV en JSON et de changer des informations dans la MainWindow
    # @param self
    # @param MainWindow, la fenêtre principale
    # @return la date contenu dans le champs
    # ########################################################
    def CheckandConvert(self):
        try:
            self.listJSON.clear()
            # Création des path pour les fichiers Json
            for fileCSV in self.Win.listCSV:
                my_file = Path(fileCSV)
                if my_file.is_file():
                    self.listJSON[fileCSV] = fileCSV.replace(".csv", ".json")
                else:
                    self.Win.listCSV.remove(fileCSV)
                    nameCSV = fileCSV.split("/")[-1]
                    for i in range(self.Win.lw_CSVfiles.count()):
                        if nameCSV in self.Win.lw_CSVfiles.item(i).text():
                            self.Win.lw_CSVfiles.takeItem(i)
                    raise CSVIsNoMore(nameCSV)

        except CSVIsNoMore as e:
            e.ErrorMessage()
        else:
            for fileCSV in self.listJSON:
                item = QtWidgets.QListWidgetItem()
                item.setText("CSV à JSON : " + str(fileCSV.split("/")[-1]))
                self.Win.lw_Validation.addItem(item)
                if self.Convert_json(fileCSV, self.listJSON[fileCSV]):
                    self.Win.lw_Validation.item(self.Win.lw_Validation.row(item)).setForeground(
                        QtGui.QColor('green'))
                else:
                    self.Win.lw_Validation.item(self.Win.lw_Validation.row(item)).setForeground(QtGui.QColor('red'))
                self.Win.lw_CSVfiles.clear()
                self.Win.listCSV.clear()

    def GetlistJSON(self):
        return self.listJSON
