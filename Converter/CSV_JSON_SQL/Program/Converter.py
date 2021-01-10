from IHM import MainWindow

import sys
from PyQt5.QtWidgets import QApplication, QMainWindow

app = QApplication.instance()
if not app:
    app = QApplication(sys.argv)

mainWin = QMainWindow()
ui = MainWindow.UiMainWindow()
ui.setupUi(mainWin)
mainWin.show()
sys.exit(app.exec_())
