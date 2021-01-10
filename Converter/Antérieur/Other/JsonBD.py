import json

import pymysql


class Test:
    def __init__(self):
        self.con = pymysql.connect(host="localhost", user="root", password="", database="ptutS3", charset='utf8mb4',
                                   cursorclass=pymysql.cursors.DictCursor)
        self.json_file = {}

    def GetCount(self, query):
        count = None
        cursor = self.con.cursor()
        if "COUNT(*) as Res" in query:
            cursor.execute(query)
            res = cursor.fetchone()
            count = res['Res']
        cursor.close()
        return count

    def OpenFile(self, file):
        get = open(file, "r", encoding="utf-8")
        self.json_file = json.load(get)
        get.close()

    def Add(self):
        cursor = self.con.cursor()
        for don in self.json_file:
            for info in self.json_file[don]:
                query = 'INSERT IGNORE INTO calendrier VALUES(STR_TO_DATE("'+str(info['Informations'])+'", "%d %M %Y"))'
                cursor.execute(query=query)

        self.con.commit()
        cursor.close()

    def Test1(self):
        rows = {
            'statut': ["fonction", "Statut"],
            'poids': ["masse", "Poids"],
            'sourceDon': ["recherche", "Sources"],
            'lieu': ["emplacement", "Lieu"],
        }

        rows1 = [
            ['statut',"fonction", "Statut"],
            ['poids',"masse", "Poids"],
            ['sourceDon',"recherche", "Sources"],
            ['lieu',"emplacement", "Lieu"],
        ]
        for row in rows1:
            print("table : "+row[0]+" | colonne : "+row[1]+" | JSONlike : "+row[2]+"\n")



    def Test2(self,file):
        return file.split("/")[-1].replace(".json","")

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

    def Autres(self):
        cursor = self.con.cursor()
        rows = [
            ['statut',"fonction", "Statut"],
        ]

        for row in rows:
            for don in self.json_file:
                for info in self.json_file[don]:
                    if info[row[2]] != "":
                        query = 'SELECT COUNT(*) as Res FROM ' + row[0] + ' WHERE ' + row[1] + ' = "' + str(
                            info[row[2]])+'"'
                        if self.GetCount(query=query) == 0:
                            query = 'INSERT IGNORE INTO ' + row[0] + '(' + row[1] + ') VALUES (\"' + str(info[row[2]]) + '\")'
                            cursor.execute(query)
        self.con.commit()
        cursor.close()

    def Test3(self):
        cursor = self.con.cursor()

        query = "SELECT typeDon as Res FROM typeDon"
        cursor.execute(query)
        res = cursor.fetchone()
        count = res['Res']
        cursor.close()
        print("type : ",type(count), " | ",count)

    def Test4(self):
        cursor = self.con.cursor()
        cursor.execute("INSERT INTO personne (nom, fonction) VALUES ('Bobby','chiant')")

    def NatureFormes(self):
        cursor = self.con.cursor()
        for don in self.json_file:
            for item in self.json_file[don]:
                req_don = 'INSERT IGNORE INTO Test(Nature, Formes) VALUES ("'+ item['Nature'] + '", "' + item['Formes']+ '")'
                cursor.execute(req_don)
                self.con.commit()

test1 = Test()
file="C:\\xampp\\htdocs\\project\\Converter\\CSV_JSON_SQL\\CSVJSON\\Animaux.json"
test1.OpenFile(file)
test1.Autres()
test1.Personnes()
file ="C:\\xampp\\htdocs\\project\\Converter\\CSV_JSON_SQL\\CSVJSON\\Joyaux&Vaisselles.json"
test1.OpenFile(file)
test1.Autres()
test1.Personnes()
