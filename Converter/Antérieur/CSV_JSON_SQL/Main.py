from IHM import MainWindow

import sys
from PyQt5.QtWidgets import QApplication, QWidget, QMainWindow

app = QApplication.instance()
if not app:
    app = QApplication(sys.argv)

mainWin = QMainWindow()
ui = MainWindow.Ui_MainWindow()
ui.setupUi(mainWin)
mainWin.show()
sys.exit(app.exec_())