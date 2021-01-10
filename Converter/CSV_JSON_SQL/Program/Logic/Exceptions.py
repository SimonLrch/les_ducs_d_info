# Importations des classes et modules nécessaires
# Import autre
from PyQt5 import QtGui
from PyQt5.QtWidgets import QMessageBox


########################################################################################################################
class Error(Exception):
    def __init__(self):
        self.message = ""

    # Fonction permettant de faire afficher une MessageBox avec l'erreur correspondante
    def ErrorMessage(self, message="", Type=QMessageBox.Critical):
        msg = QMessageBox()
        msg.setIcon(Type)
        msg.setText("Une erreur est survenue")
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/Icônes/SQL.png"), QtGui.QIcon.Normal, QtGui.QIcon.On)
        msg.setWindowTitle("Erreur")
        msg.setWindowIcon(icon)
        if message == "":
            message = self.message
        msg.setInformativeText(message)
        msg.exec()


class DbIsMissing(Error):
    def __init__(self):
        self.message = "La base de données est manquante !"


class ListCSVEmpty(Error):
    def __init__(self):
        self.message = "Aucun CSV n'a été enregistré !"


class CSVIsNoMore(Error):
    def __init__(self, csv):
        self.message = "Le csv : " + csv + " n'existe plus !"


class CSVAlreadySaved(Error):
    def __init__(self):
        self.message = "Cet élément a déjà été choisis. Il n'a pas été rajouté."
