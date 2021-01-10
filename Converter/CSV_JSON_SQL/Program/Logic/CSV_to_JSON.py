import csv
import json
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
    # Méthode Convert_json(self, csv_file_path, json_file_path)
    # Description :
    # Méthode permettant de convertir un CSV en JSON
    # @param self
    # @param csv_file_path, le chemin correspondant au fichier CSV
    # @param json_file_path, le chemin correspondant au fichier JSON
    # @return true si la conversion se passe bien
    # ########################################################
    def Convert_json(self, csv_file_path, json_file_path):
        res = False
        try:
            # Ouvrir fichier CVS en lecture
            self.clean()
            csv_file = open(csv_file_path, encoding='utf-8-sig')
            csv_reader = csv.DictReader(csv_file, delimiter=';')

            # Pour chaque ligne
            for rows in csv_reader:
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
                if rows['Auteur'] == "":
                    rows['Auteur'] = "Aucune mention"
                if rows['Lieu'] == "":
                    rows['Lieu'] = "Aucune mention"
                if rows['Poids'] == "":
                    rows['Poids'] = "Aucune mention"
                if rows['Prix'] == "":
                    rows['Prix'] = "Aucune mention"
                if rows['Statut'] == "":
                    rows['Statut'] = "Statut Inconnu"
                self.data[key] = [rows]  # On remplit le dictionnaire des valeurs de la ligne

            # Ouvir fichier JSON en écriture
            jsonfile = open(json_file_path, 'w', encoding='utf-8')
            jsonfile.write(json.dumps(self.data, ensure_ascii=False, indent=4))
        # Si il y a une quelconque erreur, elle est levée
        except:
            Error.ErrorMessage(Error, str(sys.exc_info()[1]))
        else:
            res = True
        finally:
            csv_file.close()
            jsonfile.close()
            del csv_file
            del csv_reader
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

    @staticmethod
    def MonthFRtoEN(dateToChange):
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
    # Méthode check_and_convert(self, main_window):
    # Description :
    # Méthode permettant de convertir les CSV en JSON et de changer des informations dans la main_window
    # @param self
    # @param main_window, la fenêtre principale
    # @return la date contenu dans le champs
    # ########################################################
    def check_and_convert(self):
        try:
            if not self.Win.con:
                raise DbIsMissing()
            if len(self.Win.listCSV) == 0:
                raise ListCSVEmpty()
            # Vider le list_Widget de Validation afin de pas confondre les anciennes convertions avec les nouvelles
            self.Win.lw_Validation.clear()
            self.listJSON.clear()
            # Création des path pour les fichiers Json
            for fileCSV in self.Win.listCSV:
                my_file = Path(fileCSV)
                if my_file.is_file():
                    self.listJSON[fileCSV] = fileCSV.replace(".csv", ".json")
                else:
                    self.Win.listCSV.remove(fileCSV)
                    nameCSV = fileCSV.split("/")[-1]
                    for i in range(self.Win.lw_CSV_files.count()):
                        if nameCSV in self.Win.lw_CSV_files.item(i).text():
                            self.Win.lw_CSV_files.takeItem(i)
                    raise CSVIsNoMore(nameCSV)

        except (ListCSVEmpty, DbIsMissing, CSVIsNoMore) as e:
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
                self.Win.lw_CSV_files.clear()
                self.Win.listCSV.clear()
                
    def GetlistJSON(self):
        return self.listJSON
