# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'MainWindow.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!

# Import pour IHM
import os
from pathlib import Path

from PyQt5 import QtCore, QtGui, QtWidgets
from PyQt5.QtWidgets import QMainWindow, QFileDialog, QMessageBox

from IHM import resources
from IHM import Dialog_Connection
from IHM.Dialog_Connection import Ui_ConnectionWindow
from Logic.CSV_to_JSON import CSV_to_JSON
from Logic.Exceptions import ListCSVEmpty, DbIsMissing, CSVIsNoMore, CSVAlreadySaved
from Logic.JSON_to_SQL import JSON_to_SQL


class Ui_MainWindow(object):
    def __init__(self):
        self.uiConnect = Ui_ConnectionWindow(self)
        self.connectWin = QtWidgets.QMainWindow()
        self.con = None
        self.listCSV = []
        self.ConverterToJson = CSV_to_JSON(self)
        self.ConverterToSQL = None

    def setupUi(self, MainWindow):
        MainWindow.setObjectName("MainWindow")
        MainWindow.setEnabled(True)
        MainWindow.resize(535, 390)
        sizePolicy = QtWidgets.QSizePolicy(QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Fixed)
        sizePolicy.setHorizontalStretch(0)
        sizePolicy.setVerticalStretch(0)
        sizePolicy.setHeightForWidth(MainWindow.sizePolicy().hasHeightForWidth())
        MainWindow.setSizePolicy(sizePolicy)
        MainWindow.setMinimumSize(QtCore.QSize(535, 390))
        MainWindow.setMaximumSize(QtCore.QSize(535, 390))
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/Icônes/SQL.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        MainWindow.setWindowIcon(icon)
        self.centralwidget = QtWidgets.QWidget(MainWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.widget = QtWidgets.QWidget(self.centralwidget)
        self.widget.setGeometry(QtCore.QRect(10, 10, 518, 350))
        self.widget.setObjectName("widget")
        self.TotalLayout = QtWidgets.QGridLayout(self.widget)
        self.TotalLayout.setContentsMargins(0, 0, 0, 0)
        self.TotalLayout.setObjectName("TotalLayout")
        self.LetfLayout = QtWidgets.QFormLayout()
        self.LetfLayout.setObjectName("LetfLayout")
        self.logo = QtWidgets.QLabel(self.widget)
        self.logo.setObjectName("logo")
        self.LetfLayout.setWidget(0, QtWidgets.QFormLayout.SpanningRole, self.logo)
        self.LayoutDB = QtWidgets.QGridLayout()
        self.LayoutDB.setObjectName("LayoutDB")
        self.l_Connectedto = QtWidgets.QLabel(self.widget)
        self.l_Connectedto.setObjectName("l_Connectedto")
        self.LayoutDB.addWidget(self.l_Connectedto, 0, 0, 1, 1)
        self.pb_EditConnection = QtWidgets.QPushButton(self.widget)
        self.pb_EditConnection.setMaximumSize(QtCore.QSize(70, 16777215))
        self.pb_EditConnection.setObjectName("pb_EditConnection")
        self.LayoutDB.addWidget(self.pb_EditConnection, 1, 0, 1, 1)
        self.LetfLayout.setLayout(2, QtWidgets.QFormLayout.LabelRole, self.LayoutDB)
        self.pb_Convert = QtWidgets.QPushButton(self.widget)
        self.pb_Convert.setObjectName("pb_Convert")
        self.LetfLayout.setWidget(4, QtWidgets.QFormLayout.FieldRole, self.pb_Convert)
        spacerItem = QtWidgets.QSpacerItem(20, 40, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.LetfLayout.setItem(3, QtWidgets.QFormLayout.FieldRole, spacerItem)
        spacerItem1 = QtWidgets.QSpacerItem(20, 40, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.LetfLayout.setItem(1, QtWidgets.QFormLayout.LabelRole, spacerItem1)
        self.TotalLayout.addLayout(self.LetfLayout, 0, 0, 1, 1)
        self.RightgridLayout = QtWidgets.QGridLayout()
        self.RightgridLayout.setObjectName("RightgridLayout")
        self.pb_Add = QtWidgets.QPushButton(self.widget)
        self.pb_Add.setObjectName("pb_Add")
        self.RightgridLayout.addWidget(self.pb_Add, 2, 0, 1, 1)
        self.l_List = QtWidgets.QLabel(self.widget)
        self.l_List.setObjectName("l_List")
        self.RightgridLayout.addWidget(self.l_List, 0, 0, 1, 2)
        self.pb_Remove = QtWidgets.QPushButton(self.widget)
        self.pb_Remove.setObjectName("pb_Remove")
        self.RightgridLayout.addWidget(self.pb_Remove, 2, 1, 1, 1)
        self.lw_CSVfiles = QtWidgets.QListWidget(self.widget)
        self.lw_CSVfiles.viewport().setProperty("cursor", QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.lw_CSVfiles.setObjectName("lw_CSVfiles")
        self.RightgridLayout.addWidget(self.lw_CSVfiles, 1, 0, 1, 2)
        self.TotalLayout.addLayout(self.RightgridLayout, 0, 1, 1, 1)
        self.lw_Validation = QtWidgets.QListWidget(self.widget)
        self.lw_Validation.setMaximumSize(QtCore.QSize(16777215, 100))
        self.lw_Validation.viewport().setProperty("cursor", QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.lw_Validation.setObjectName("lw_Validation")
        self.TotalLayout.addWidget(self.lw_Validation, 1, 0, 1, 2)
        MainWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(MainWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 535, 21))
        self.menubar.setObjectName("menubar")
        MainWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(MainWindow)
        self.statusbar.setObjectName("statusbar")
        MainWindow.setStatusBar(self.statusbar)

        self.retranslateUi(MainWindow)
        QtCore.QMetaObject.connectSlotsByName(MainWindow)
        MainWindow.setTabOrder(self.pb_EditConnection, self.pb_Add)
        MainWindow.setTabOrder(self.pb_Add, self.pb_Remove)
        MainWindow.setTabOrder(self.pb_Remove, self.lw_CSVfiles)
        MainWindow.setTabOrder(self.lw_CSVfiles, self.lw_Validation)

        # ###################################################################################
        # Lance la fenêtre de création de connexion
        self.pb_EditConnection.clicked.connect(lambda: self.Connect())
        # Lance la fenêtre de récupération de CSV à convertir
        self.pb_Add.clicked.connect(lambda: self.AddCSV())
        # Retire un élément de la liste des CSV à convertir
        self.pb_Remove.clicked.connect(lambda: self.RemoveCSV())
        # Lance la convertion des fichiers choisis
        self.pb_Convert.clicked.connect(lambda: self.Convert())

    # ###################################################################################

    def retranslateUi(self, MainWindow):
        _translate = QtCore.QCoreApplication.translate
        MainWindow.setWindowTitle(_translate("MainWindow", "Convertir de CSV à SQL"))
        self.logo.setText(_translate("MainWindow",
                                     "<html><head/><body><p><img src=\":/logo/CVS_to_JSON_to_SQL.png\"/></p></body></html>"))
        self.l_Connectedto.setText(_translate("MainWindow", "Connecté à : "))
        self.pb_EditConnection.setText(_translate("MainWindow", "Connexion"))
        self.pb_Convert.setText(_translate("MainWindow", "Convertir"))
        self.pb_Add.setText(_translate("MainWindow", "Ajouter"))
        self.l_List.setText(_translate("MainWindow", "Liste des fichiers CSV à convertir :"))
        self.pb_Remove.setText(_translate("MainWindow", "Retirer"))

    # #######################################################
    # Méthode Connect(self)
    # Description :
    # Méthode permettant d'ouvrir la fenêtre de connexion à la base de données
    # @param self
    # #######################################################
    def Connect(self):
        self.uiConnect.setupUi(self.connectWin)
        self.connectWin.show()

    # #######################################################
    # Méthode AddCSV(self)
    # Description :
    # Méthode permettant d'ajouter un CSV à la liste des CSV
    # @param self
    # ########################################################
    def AddCSV(self):
        try:
            # Ouvre un FileDialog afin d'aller chercher le CSV à convertir
            dialog = QtWidgets.QFileDialog()
            dialog.setWindowTitle('Cherchez un CSV à convertir')
            dialog.setNameFilter('csv(*.csv)')
            dialog.setDirectory(QtCore.QDir.currentPath())
            dialog.setFileMode(QtWidgets.QFileDialog.ExistingFile)
            directory = None
            # On vérifie si un fichier a été choisis
            if dialog.exec_() == QtWidgets.QDialog.Accepted:
                directory = dialog.selectedFiles()
            if directory:
                # Si le fichier n'était pas enregistré dans la liste des CSV
                if not directory[0] in self.listCSV:
                    # On l'enregistre
                    self.listCSV.append(directory[0])
                    # On l'affiche dans le listWidget
                    self.lw_CSVfiles.addItem(directory[0].split("/")[-1])
                else:
                    # S'il existait déjà on lève l'erreur
                    raise CSVAlreadySaved()
        except CSVAlreadySaved as ex:
            # Si l'erreur est levé, affichage du MessageBox
            ex.ErrorMessage(Type=QMessageBox.Information)

    # #######################################################
    # Méthode RemoveCSV(self)
    # Description :
    # Méthode permettant de Retirer un CSV de la liste des CSV
    # @param self
    # ########################################################
    def RemoveCSV(self):
        # Vérification si au moins un élément a été cliqué
        listItems = self.lw_CSVfiles.selectedItems()
        # Sinon termine la méthode
        if not listItems:
            return
        else:
            # Ou les supprime de la liste et du visuel
            for item in listItems:
                self.lw_CSVfiles.takeItem(self.lw_CSVfiles.row(item))
                for csv in self.listCSV:
                    if item.text() in csv:
                        self.listCSV.remove(csv)

    # #######################################################
    # Méthode Convert(self)
    # Description :
    # Méthode permettant la convertion de CSV à Json puis de Json à SQL
    # @param self
    # ########################################################
    def Convert(self):
        listConvertedCSV = []
        self.ConverterToJson.CheckandConvert()
        for newJson in self.ConverterToJson.GetlistJSON():
            listConvertedCSV.append(self.ConverterToJson.GetlistJSON()[newJson])
        for JSON in listConvertedCSV:
            self.ConverterToSQL = JSON_to_SQL(self,JSON)
            self.ConverterToSQL.CheckAndConvert()

# ############################################Getter & Setter###########################################################
    def setCon(self, connexion):
        self.con = connexion

    def getCon(self):
        return self.con
