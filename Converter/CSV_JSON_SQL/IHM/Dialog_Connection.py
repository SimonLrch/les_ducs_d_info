# -*- coding: utf-8 -*-

# Form implementation generated from reading ui file 'Dialog_Connection.ui'
#
# Created by: PyQt5 UI code generator 5.13.0
#
# WARNING! All changes made in this file will be lost!
import sys

import pymysql
from PyQt5 import QtCore, QtGui, QtWidgets
from PyQt5.QtWidgets import QMessageBox

from Logic.Exceptions import DbIsMissing, Error


class Ui_ConnectionWindow(object):
    def __init__(self, MainWindow):
        self.MW = MainWindow

    def setupUi(self, ConnectionWindow):
        ConnectionWindow.setObjectName("ConnectionWindow")
        ConnectionWindow.resize(250, 175)
        ConnectionWindow.setMinimumSize(QtCore.QSize(250, 175))
        ConnectionWindow.setMaximumSize(QtCore.QSize(250, 175))
        icon = QtGui.QIcon()
        icon.addPixmap(QtGui.QPixmap(":/Icônes/SQL.png"), QtGui.QIcon.Normal, QtGui.QIcon.Off)
        ConnectionWindow.setWindowIcon(icon)
        self.centralwidget = QtWidgets.QWidget(ConnectionWindow)
        self.centralwidget.setObjectName("centralwidget")
        self.widget = QtWidgets.QWidget(self.centralwidget)
        self.widget.setGeometry(QtCore.QRect(9, 9, 244, 156))
        self.widget.setObjectName("widget")
        self.formLayout = QtWidgets.QFormLayout(self.widget)
        self.formLayout.setContentsMargins(0, 0, 0, 0)
        self.formLayout.setObjectName("formLayout")
        self.l_Title = QtWidgets.QLabel(self.widget)
        self.l_Title.setMaximumSize(QtCore.QSize(16777215, 15))
        self.l_Title.setObjectName("l_Title")
        self.formLayout.setWidget(0, QtWidgets.QFormLayout.LabelRole, self.l_Title)
        self.verticalLayout_4 = QtWidgets.QVBoxLayout()
        self.verticalLayout_4.setObjectName("verticalLayout_4")
        self.horizontalLayout = QtWidgets.QHBoxLayout()
        self.horizontalLayout.setObjectName("horizontalLayout")
        self.verticalLayout_3 = QtWidgets.QVBoxLayout()
        self.verticalLayout_3.setObjectName("verticalLayout_3")
        self.l_host = QtWidgets.QLabel(self.widget)
        self.l_host.setObjectName("l_host")
        self.verticalLayout_3.addWidget(self.l_host)
        self.l_user = QtWidgets.QLabel(self.widget)
        self.l_user.setObjectName("l_user")
        self.verticalLayout_3.addWidget(self.l_user)
        self.l_password = QtWidgets.QLabel(self.widget)
        self.l_password.setObjectName("l_password")
        self.verticalLayout_3.addWidget(self.l_password)
        self.l_db = QtWidgets.QLabel(self.widget)
        self.l_db.setObjectName("l_db")
        self.verticalLayout_3.addWidget(self.l_db)
        self.horizontalLayout.addLayout(self.verticalLayout_3)
        self.verticalLayout_2 = QtWidgets.QVBoxLayout()
        self.verticalLayout_2.setObjectName("verticalLayout_2")
        self.le_Host = QtWidgets.QLineEdit(self.widget)
        self.le_Host.setText("")
        self.le_Host.setClearButtonEnabled(False)
        self.le_Host.setObjectName("le_Host")
        self.verticalLayout_2.addWidget(self.le_Host)
        self.le_User = QtWidgets.QLineEdit(self.widget)
        self.le_User.setText("")
        self.le_User.setObjectName("le_User")
        self.verticalLayout_2.addWidget(self.le_User)
        self.le_Password = QtWidgets.QLineEdit(self.widget)
        self.le_Password.setEchoMode(QtWidgets.QLineEdit.Password)
        self.le_Password.setObjectName("le_Password")
        self.verticalLayout_2.addWidget(self.le_Password)
        self.le_DB = QtWidgets.QLineEdit(self.widget)
        self.le_DB.setObjectName("le_DB")
        self.verticalLayout_2.addWidget(self.le_DB)
        self.horizontalLayout.addLayout(self.verticalLayout_2)
        self.verticalLayout_4.addLayout(self.horizontalLayout)
        self.formLayout.setLayout(1, QtWidgets.QFormLayout.LabelRole, self.verticalLayout_4)
        self.horizontalLayout_2 = QtWidgets.QHBoxLayout()
        self.horizontalLayout_2.setObjectName("horizontalLayout_2")
        spacerItem = QtWidgets.QSpacerItem(40, 20, QtWidgets.QSizePolicy.Expanding, QtWidgets.QSizePolicy.Minimum)
        self.horizontalLayout_2.addItem(spacerItem)
        self.pb_Ok = QtWidgets.QPushButton(self.widget)
        self.pb_Ok.setObjectName("pb_Ok")
        self.horizontalLayout_2.addWidget(self.pb_Ok)
        self.pb_Cancel = QtWidgets.QPushButton(self.widget)
        self.pb_Cancel.setObjectName("pb_Cancel")
        self.horizontalLayout_2.addWidget(self.pb_Cancel)
        self.formLayout.setLayout(2, QtWidgets.QFormLayout.LabelRole, self.horizontalLayout_2)
        ConnectionWindow.setCentralWidget(self.centralwidget)
        self.menubar = QtWidgets.QMenuBar(ConnectionWindow)
        self.menubar.setGeometry(QtCore.QRect(0, 0, 250, 21))
        self.menubar.setObjectName("menubar")
        ConnectionWindow.setMenuBar(self.menubar)
        self.statusbar = QtWidgets.QStatusBar(ConnectionWindow)
        self.statusbar.setObjectName("statusbar")
        ConnectionWindow.setStatusBar(self.statusbar)

        self.retranslateUi(ConnectionWindow)
        QtCore.QMetaObject.connectSlotsByName(ConnectionWindow)

# ###################################################################################
        # Cliquer sur le bouton OK lance la tentative de création de connexion
        self.pb_Ok.clicked.connect(lambda: self.Connect(ConnectionWindow))
        # Cliquer sur le bouton Cancel ferme la fenêtre
        self.pb_Cancel.clicked.connect(lambda: ConnectionWindow.close())

# ###################################################################################

    def retranslateUi(self, ConnectionWindow):
        _translate = QtCore.QCoreApplication.translate
        ConnectionWindow.setWindowTitle(_translate("ConnectionWindow", "Connexion"))
        self.l_Title.setText(_translate("ConnectionWindow", "Connexion à une base de Données :"))
        self.l_host.setText(_translate("ConnectionWindow", "Hôte :"))
        self.l_user.setText(_translate("ConnectionWindow", "Utilisateur :"))
        self.l_password.setText(_translate("ConnectionWindow", "Mot de passe :"))
        self.l_db.setText(_translate("ConnectionWindow", "Base de données :"))
        self.le_Host.setPlaceholderText(_translate("ConnectionWindow", "localhost"))
        self.le_User.setPlaceholderText(_translate("ConnectionWindow", "root"))
        self.pb_Ok.setText(_translate("ConnectionWindow", "Ok"))
        self.pb_Cancel.setText(_translate("ConnectionWindow", "Annuler"))

    # #######################################################
    # Méthode Connect(self, host, user, passW, db):
    # Description :
    # Méthode permettant la création d'une connexion avec la base de données
    # @param host, l'hôte de la bdd
    # @param user, le nom de l'utilisateur voulant se connecter
    # @param passW, mot de passe de l'utilisateur
    # @param db, la bdd à laquelle se connecter
    # @return con : pymysql.connection
    # ########################################################
    def Connect(self, ConnectionWindow):
        try:
            # Récupère les informations données par l'utilisateur
            host = self.le_Host.text()
            if host == "":
                host = self.le_Host.placeholderText()
            user = self.le_User.text()
            if user == "":
                user = self.le_User.placeholderText()
            passW = self.le_Password.text()
            db = self.le_DB.text()
            # Si aucune base de données n'est écrite, affiche une erreur
            if db == "":
                raise DbIsMissing()
            # Sinon tente de créer la connexion
            con = pymysql.connect(host=host, user=user, password=passW, database=db, charset='utf8mb4',
                                  cursorclass=pymysql.cursors.DictCursor)
        # Exception correspondant au nom de la bdd
        except DbIsMissing as e:
            e.ErrorMessage()
        # Autres Exceptions
        except:
            Error.ErrorMessage(Error,message=str(sys.exc_info()[1]))
        # Si tout se passe bien
        else:
            # La connexion est renvoyé à la page principale
            self.MW.setCon(con)
            # Le texte est ensuite changé pour montrer visuellement à l'utilisateur que la connexion est bien faite
            self.MW.l_Connectedto.setText("Connecté à : " + db)
            # On ferme la fenêtre
            ConnectionWindow.close()

