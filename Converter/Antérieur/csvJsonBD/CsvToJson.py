import csv
import json


# Définition de la fonction pour convertir
def convert_json(csvFilePath, jsonFilePath):
    # Création du dictionnaire

    data = {}

    # Ouvrir fichier CVS en lecture
    with open(csvFilePath, encoding='utf-8-sig') as csvfile:
        csvReader = csv.DictReader(csvfile,delimiter = ';')


        # Pour chaque ligne
        for rows in csvReader:
            key = rows['IdDon']  # O2n considère que la clef primaire s'appelle ID
            data[key] = [rows]  # On remplit le dictionnaire des valeurs de la ligne



    # Ouvir fichier JSON en écriture
    with open(jsonFilePath, 'w', encoding = 'utf-8') as jsonfile:
        jsonfile.write(json.dumps(data, ensure_ascii = False, indent = 4))


#Création de la liste contenant le nom des fichiers
ListFiles = ["Pensions", "Animaux", "Vetements&draps", "Joyaux&Vaisselles"]

# Définition du nom des variables utilisées pour convert_json()
# À changer en fonction de l'emplacement des fichiers
for i in ListFiles:
    csvFilePath = "C:\\xampp\\htdocs\\project\\" + i + ".csv"
    jsonFilePath = "C:\\xampp\\htdocs\\project\\" + i + ".json"


    # Lancement de la fonction de conversion
    try:
        convert_json(csvFilePath, jsonFilePath)
    except Exception as error:
        print("Type de l'erreur : \n    ", type(error))
        print("Arguments de l'erreur : \n   ", error.args)
        print("Erreur provenant de : \n     ", error.__str__())
    else:
        print("Conversion terminée ! ")
