import json

import pymysql


class Test:
    def __init__(self):
        self.con = pymysql.connect(host="localhost", user="root", password="root", database="PtutS3", charset='utf8mb4',
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
        for p in typeP:
            for don in self.json_file:
                for info in self.json_file[don]:
                    if info[p] != "":
                        query = 'SELECT COUNT(*) as Res FROM personne WHERE nom = "' + info[p]+'"'
                        if self.GetCount(query=query) == 0:
                            query = "INSERT IGNORE INTO Personne(nom,fonction) " \
                                    "VALUES (" + info[p] + ", " + info['Statut'] + ")"
                            req = cursor.execute(query)
        cursor.close()

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
                            info[row[2]])+'"'
                        if self.GetCount(query=query) == 0:
                            query = 'INSERT IGNORE INTO ' + row[0] + '(' + row[1] + ') VALUES (\"' + str(info[row[2]]) + '\")'
                            print(query)
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
        string = "\"Pour le bon rapport que lui en fist ledit monseigneur de Croy\""
        print(string.replace("\"",""))
test1 = Test()
file="D://1.Cours//2.Projets//S3_Ptut//CSV_JSON_Adapt//CSVJSON//Joyaux&Vaisselles.json"
test1.OpenFile(file)
test1.Test4()