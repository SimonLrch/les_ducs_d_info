import json
import sys

from PyQt5 import QtWidgets, QtGui

from Logic.Exceptions import Error


class JSON_to_SQL:
    def __init__(self, MainWindow,path):
        self.con = MainWindow.getCon()
        self.Win = MainWindow
        self.nameJson = path.split("/")[-1].replace(".json", "")
        self.json_file = self.OpenFile(path)

    # #######################################################
    # Méthode TypeDon(self)
    # Description :
    # Méthode permettant d'inserer dans la BDD les différents Types de
    # @param self
    # #######################################################
    def TypeDon(self):
        cursor = self.con.cursor()
        cursor.execute("INSERT IGNORE INTO Typedon (Typedon) VALUES (%s)", 'Pensions')
        cursor.execute("INSERT IGNORE INTO Typedon (Typedon) VALUES (%s)", 'Animaux')
        cursor.execute("INSERT IGNORE INTO Typedon (Typedon) VALUES (%s)", 'Vetements&draps')
        cursor.execute("INSERT IGNORE INTO Typedon (Typedon) VALUES (%s)", 'Joyaux&Vaisselles')
        self.con.commit()
        cursor.close()

    # #######################################################
    # Méthode OpenFile(self,file)
    # Description :
    # Méthode permettant l'ouverture d'un fichier JSON passer en paramètre
    # @param self
    # @param file, un fichier JSON
    # 0return le dictionnaire correspondant au fichier JSON
    # ########################################################
    def OpenFile(self, file):
        get = open(file, "r", encoding="utf-8")
        temp = json.load(get)
        get.close()
        return temp

    # #######################################################
    # Méthode GetCount(self,query)
    # Description :
    # Méthode permettant de faire la requête SELECT COUNT(*) donné et de retourné le résultat de la requête
    # @param self
    # @param query, une requête SQL
    # ########################################################
    def GetCount(self, query):
        if "COUNT(*) as Res" in query:
            cursor = self.con.cursor()
            cursor.execute(query)
            res = cursor.fetchone()
            count = res['Res']
            cursor.close()
        return count

    # #######################################################
    # Méthode Autres(self)
    # Description :
    # Méthode permettant d'inserer dans les tables auxiliaires les données correspondantes
    # (Calendrier, Lieu, SourceDon,Poids,Statut)
    # @param self
    # ########################################################
    def Autres(self):
        cursor = self.con.cursor()
        rows = [
            ['statut',"fonction", "Statut"],
            ['poids',"masse", "Poids"],
            ['sourceDon',"recherche", "Sources"],
            ['lieu',"emplacement", "Lieu"],
        ]

        for row in rows:
            for don in self.json_file:
                for info in self.json_file[don]:
                    if info[row[2]] != "":
                        query = 'SELECT COUNT(*) as Res FROM ' + row[0] + ' WHERE ' + row[1] + ' = "' + str(
                            info[row[2]]) + '"'
                        if self.GetCount(query=query) == 0:
                            query = 'INSERT IGNORE INTO ' + row[0] + '(' + row[1] + ') VALUES (\"' + str(
                                info[row[2]]) + '\")'
                            cursor.execute(query)

        for don in self.json_file:
            for info in self.json_file[don]:
                query = 'INSERT IGNORE INTO calendrier VALUES(STR_TO_DATE("' + str(
                    info['Informations']) + '", "%d %M %Y"))'
                cursor.execute(query=query)
        self.con.commit()
        cursor.close()

    def DonInter(self):
        cursor = self.con.cursor()
        for don in self.json_file:
            for item in self.json_file[don]:
                # récupérer l'id de l'auteur du don
                req_auteur = 'SELECT idPersonne FROM personne WHERE nom = "' + item['Auteur']+'"'
                cursor.execute(req_auteur)
                auteur = cursor.fetchone()['idPersonne']

                # récupérer l'id du bénéficiaire
                req_beneficiaire = 'SELECT idPersonne FROM personne WHERE nom = "' + item['Beneficiaire']+'"'
                cursor.execute(req_beneficiaire)
                beneficiaire = cursor.fetchone()['idPersonne']

                # récupérer le type de don
                typeD = self.nameJson

                # récupérer l'id de la masse du don
                req_masse = 'SELECT idPoids FROM Poids WHERE masse = "' + item['Poids'] + '"'
                cursor.execute(req_masse)
                masse = cursor.fetchone()['idPoids']

                # insertion dans la table don
                req_don = 'INSERT IGNORE INTO don(forme, nature, prix, typeDon, dateDon, idAuteur, idBeneficiaire,' \
                          'emplacement, sourceDon, idPoids) VALUES ("' + item['Formes'] + '", "' \
                          + item['Nature'] + '", "' + item['Prix'] + '", "' + typeD \
                          + '", STR_TO_DATE("' + item['Informations'] + '","%d %M %Y"), "' \
                          + str(auteur) + '", "' + str(beneficiaire) + '", "' + item['Lieu'] \
                          + '", "' + item['Sources'] + '", "' + str(masse) + '") '
                cursor.execute(req_don)
                self.con.commit()
                # récupérer l'id de l'intermédiaire si il y en a un
                if item['Intermediaire'] != "":
                    req_intermediaire = 'SELECT idPersonne FROM personne WHERE nom = "' + str(item['Intermediaire'])+'"'
                    cursor.execute(req_intermediaire)
                    intermediaire = cursor.fetchone()['idPersonne']

                    # récupérer l'id du don
                    req_id_don = 'SELECT idDon FROM don WHERE forme = "' + str(item['Formes']) \
                                 + '" AND nature = "' + str(item['Nature']) + '" AND prix = "' + str(item['Prix']) \
                                 + '" AND typeDon = "' + typeD + '" AND dateDon = STR_TO_DATE("' \
                                 + str(item['Informations']) + '","%d %M %Y") AND idAuteur = "' \
                                 + str(auteur) + '" AND idBeneficiaire = "' + str(beneficiaire) \
                                 + '" AND emplacement = "' + str(item['Lieu']) + '" AND sourceDon = "' \
                                 + str(item['Sources']) + '" AND idPoids = "' + str(masse) +'"'

                    cursor.execute(req_id_don)
                    id_don = cursor.fetchone()['idDon']

                    # insertion dans la table intermediaire
                    req_inter = 'INSERT IGNORE INTO intermediaire(idDon,idIntermediaire) VALUES ("' + str(id_don) + '", "' \
                                + str(intermediaire) + '")'
                    cursor.execute(req_inter)
                    self.con.commit()
    # #######################################################
    # Méthode Personnes(self)
    # Description :
    # Méthode permettant d'inserer dans la BDD les différentes personnes (Auteurs, Bénéficiaires et Intermédiaires)
    # @param self
    # ########################################################
    def Personnes(self):
        cursor = self.con.cursor()
        typeP = ["Auteur", "Beneficiaire", "Intermediaire"]
        # La boucle se répète pour chaque type de personne présente dans le JSON
        for p in typeP:
            # Dans chacun des dons
            for don in self.json_file:
                # Pour les informations d'un don
                for info in self.json_file[don]:
                    # Si le champs correspond à une personne n'est pas vide
                    if info[p] != "":
                        # Vérifier si elle n'existe pas déjà dans la base de données
                        query = 'SELECT COUNT(*) as Res FROM personne WHERE nom = "' + info[p]+'"'
                        if self.GetCount(query=query) == 0:
                            if p == "Beneficiaire":
                                query = 'INSERT IGNORE INTO Personne(nom,fonction) ' \
                                        'VALUES ("' + info[p] + '", "' + info['Statut'] + '")'
                            else:
                                query = 'INSERT IGNORE INTO Personne(nom,fonction) ' \
                                        'VALUES ("' + info[p] + '", "Statut Inconnu")'
                            
                        else:
                            if p == "Beneficiaire":
                                if (info['Statut']!= "" ):                                    
                                    query = 'SELECT fonction FROM personne WHERE nom ="' + info[p] +'"'
                                    cursor.execute(query)
                                    res = cursor.fetchone()['fonction']
                                    if (str(res)=="Statut Inconnu"):
                                        query = 'UPDATE personne SET fonction = "' + info['Statut'] + '" WHERE nom = "' + info[p] + '"'
                        cursor.execute(query)
        self.con.commit()
        cursor.close()

    def typedon(self):
        cursor = self.con.cursor()
        cursor.execute("INSERT IGNORE INTO typedon (typedon) VALUES (%s)", self.nameJson)
        self.con.commit()
        cursor.close()

    def CheckAndConvert(self):
        self.typedon()
        self.Autres()
        self.Personnes()
        self.DonInter()
        item = QtWidgets.QListWidgetItem()
        item.setText("JSON à SQL : " + self.nameJson)
        self.Win.lw_Validation.addItem(item)
        self.Win.lw_Validation.item(self.Win.lw_Validation.row(item)).setForeground(QtGui.QColor('green'))
