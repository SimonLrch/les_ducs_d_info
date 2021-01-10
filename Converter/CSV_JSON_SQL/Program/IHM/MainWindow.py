# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'main_window.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!

# Import pour IHM


from PyQt5 import QtCore, QtGui, QtWidgets
from PyQt5.QtWidgets import QMessageBox
from IHM import resources
from IHM.Dialog_Connection import UiConnectionWindow
from Logic.CSV_to_JSON import CSV_to_JSON
from Logic.Exceptions import CSVAlreadySaved
from Logic.JSON_to_SQL import JSON_to_SQL
from os import startfile


class UiMainWindow(object):
    def __init__(self):
        self.uiConnect = UiConnectionWindow(self)
        self.connectWin = QtWidgets.QMainWindow()
        self.con = None
        self.listCSV = []
        self.ConverterToJson = CSV_to_JSON(self)
        self.ConverterToSQL = None

    def setupUi(self, main_window):
        main_window.setObjectName("main_window")
        main_window.setEnabled(True)
        main_window.resize(535, 390)
        sizePolicy = QtWidgets.QSizePolicy(QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Fixed)
        sizePolicy.setHorizontalStretch(0)
        sizePolicy.setVerticalStretch(0)
        sizePolicy.setHeightForWidth(main_window.sizePolicy().hasHeightForWidth())
        main_window.setSizePolicy(sizePolicy)
        main_window.setMinimumSize(QtCore.QSize(535, 415))
        main_window.setMaximumSize(QtCore.QSize(535, 415))
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/Icônes/SQL.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        main_window.setWindowIcon(icon)
        self.central_widget = QtWidgets.QWidget(main_window)
        self.central_widget.setObjectName("central_widget")
        self.layoutWidget = QtWidgets.QWidget(self.central_widget)
        self.layoutWidget.setGeometry(QtCore.QRect(10, 10, 518, 350))
        self.layoutWidget.setObjectName("layoutWidget")
        self.TotalLayout = QtWidgets.QGridLayout(self.layoutWidget)
        self.TotalLayout.setContentsMargins(0, 0, 0, 0)
        self.TotalLayout.setObjectName("TotalLayout")
        self.Left_Layout = QtWidgets.QFormLayout()
        self.Left_Layout.setObjectName("Left_Layout")
        self.logo = QtWidgets.QLabel(self.layoutWidget)
        self.logo.setObjectName("logo")
        self.Left_Layout.setWidget(0, QtWidgets.QFormLayout.SpanningRole, self.logo)
        self.LayoutDB = QtWidgets.QGridLayout()
        self.LayoutDB.setObjectName("LayoutDB")
        self.l_connected_to = QtWidgets.QLabel(self.layoutWidget)
        self.l_connected_to.setObjectName("l_connected_to")
        self.LayoutDB.addWidget(self.l_connected_to, 0, 0, 1, 1)
        self.pb_EditConnection = QtWidgets.QPushButton(self.layoutWidget)
        self.pb_EditConnection.setMaximumSize(QtCore.QSize(70, 16777215))
        self.pb_EditConnection.setObjectName("pb_EditConnection")
        self.LayoutDB.addWidget(self.pb_EditConnection, 1, 0, 1, 1)
        self.Left_Layout.setLayout(2, QtWidgets.QFormLayout.LabelRole, self.LayoutDB)
        self.pb_Convert = QtWidgets.QPushButton(self.layoutWidget)
        self.pb_Convert.setObjectName("pb_Convert")
        self.Left_Layout.setWidget(4, QtWidgets.QFormLayout.FieldRole, self.pb_Convert)
        spacerItem = QtWidgets.QSpacerItem(20, 40, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.Left_Layout.setItem(3, QtWidgets.QFormLayout.FieldRole, spacerItem)
        spacerItem1 = QtWidgets.QSpacerItem(20, 40, QtWidgets.QSizePolicy.Minimum, QtWidgets.QSizePolicy.Expanding)
        self.Left_Layout.setItem(1, QtWidgets.QFormLayout.LabelRole, spacerItem1)
        self.TotalLayout.addLayout(self.Left_Layout, 0, 0, 1, 1)
        self.right_grid_layout = QtWidgets.QGridLayout()
        self.right_grid_layout.setObjectName("right_grid_layout")
        self.pb_Add = QtWidgets.QPushButton(self.layoutWidget)
        self.pb_Add.setObjectName("pb_Add")
        self.right_grid_layout.addWidget(self.pb_Add, 2, 0, 1, 1)
        self.l_List = QtWidgets.QLabel(self.layoutWidget)
        self.l_List.setObjectName("l_List")
        self.right_grid_layout.addWidget(self.l_List, 0, 0, 1, 2)
        self.pb_Remove = QtWidgets.QPushButton(self.layoutWidget)
        self.pb_Remove.setObjectName("pb_Remove")
        self.right_grid_layout.addWidget(self.pb_Remove, 2, 1, 1, 1)
        self.lw_CSV_files = QtWidgets.QListWidget(self.layoutWidget)
        self.lw_CSV_files.viewport().setProperty("cursor", QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.lw_CSV_files.setObjectName("lw_CSV_files")
        self.right_grid_layout.addWidget(self.lw_CSV_files, 1, 0, 1, 2)
        self.TotalLayout.addLayout(self.right_grid_layout, 0, 1, 1, 1)
        self.lw_Validation = QtWidgets.QListWidget(self.layoutWidget)
        self.lw_Validation.setMaximumSize(QtCore.QSize(16777215, 100))
        self.lw_Validation.viewport().setProperty("cursor", QtGui.QCursor(QtCore.Qt.PointingHandCursor))
        self.lw_Validation.setObjectName("lw_Validation")
        self.TotalLayout.addWidget(self.lw_Validation, 1, 0, 1, 2)
        main_window.setCentralWidget(self.central_widget)
        self.menu_bar = QtWidgets.QMenuBar(main_window)
        self.menu_bar.setGeometry(QtCore.QRect(0, 0, 535, 21))
        self.menu_bar.setObjectName("menu_bar")
        self.menuMenu = QtWidgets.QMenu(self.menu_bar)
        self.menuMenu.setObjectName("menuMenu")
        main_window.setMenuBar(self.menu_bar)
        self.status_bar = QtWidgets.QStatusBar(main_window)
        self.status_bar.setObjectName("status_bar")
        main_window.setStatusBar(self.status_bar)
        self.actionHelp = QtWidgets.QAction(main_window)
        icon1 = QtGui.QIcon()
        icon1.addPixmap(QtGui.QPixmap(":/Icônes/help.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        self.actionHelp.setIcon(icon1)
        self.actionHelp.setObjectName("actionHelp")
        self.menuMenu.addAction(self.actionHelp)
        self.menu_bar.addAction(self.menuMenu.menuAction())

        self.retranslateUi(main_window)
        QtCore.QMetaObject.connectSlotsByName(main_window)
        main_window.setTabOrder(self.pb_EditConnection, self.pb_Add)
        main_window.setTabOrder(self.pb_Add, self.pb_Remove)
        main_window.setTabOrder(self.pb_Remove, self.lw_CSV_files)
        main_window.setTabOrder(self.lw_CSV_files, self.lw_Validation)

        # ###################################################################################
        # Lance la fenêtre de création de connexion
        self.pb_EditConnection.clicked.connect(lambda: self.Connect())
        # Lance la fenêtre de récupération de CSV à convertir
        self.pb_Add.clicked.connect(lambda: self.AddCSV())
        # Retire un élément de la liste des CSV à convertir
        self.pb_Remove.clicked.connect(lambda: self.RemoveCSV())
        # Lance la convertion des fichiers choisis
        self.pb_Convert.clicked.connect(lambda: self.Convert())

        self.actionHelp.triggered.connect(lambda: startfile("Aide.pdf"))

    # ###################################################################################

    def retranslateUi(self, main_window):
        _translate = QtCore.QCoreApplication.translate
        main_window.setWindowTitle(_translate("main_window", "Convert CSV to SQL"))
        self.logo.setText(_translate("main_window",
                                     "<html><head/><body><p><img src=\":/logo/CVS_to_JSON_to_SQL.png\"/></p></body"
                                     "></html>"))
        self.l_connected_to.setText(_translate("main_window", "Connecté à "))
        self.pb_EditConnection.setText(_translate("main_window", "Connexion"))
        self.pb_Convert.setText(_translate("main_window", "Convertir"))
        self.pb_Add.setText(_translate("main_window", "Ajouter"))
        self.l_List.setText(_translate("main_window", "Liste des fichiers CSV à convertir :"))
        self.pb_Remove.setText(_translate("main_window", "Retirer"))
        self.menuMenu.setTitle(_translate("main_window", "Menu"))
        self.actionHelp.setText(_translate("main_window", "Help"))
        self.actionHelp.setShortcut(_translate("main_window", "F1"))

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
                    self.lw_CSV_files.addItem(directory[0].split("/")[-1])
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
        listItems = self.lw_CSV_files.selectedItems()
        # Sinon termine la méthode
        if not listItems:
            return
        else:
            # Ou les supprime de la liste et du visuel
            for item in listItems:
                self.lw_CSV_files.takeItem(self.lw_CSV_files.row(item))
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
        self.ConverterToJson.check_and_convert()
        for newJson in self.ConverterToJson.GetlistJSON():
            listConvertedCSV.append(self.ConverterToJson.GetlistJSON()[newJson])
        for JSON in listConvertedCSV:
            self.ConverterToSQL = JSON_to_SQL(self, JSON)
            self.ConverterToSQL.CheckAndConvert()

    # ############################################Getter &
    # Setter###########################################################
    def setCon(self, connexion):
        self.con = connexion

    def getCon(self):
        return self.con
