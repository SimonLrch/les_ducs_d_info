<?php
// Conexion à la base de données
require_once("../include/dbConfig.php");
$db = getPDO("PtutS3");

//On récupère la décénie (ex: 1410 correspond aux années 1410, 1411, ..., 1419)
if (isset($_GET["currentDecade"]) & isset($_GET["nbYear"])) {
    $nbDecade = $_GET["currentDecade"];

    $listYear = array();

    //On regarde pour toutes les années de la décénie
    for ($currYear = 0; $currYear < 10; $currYear++) {
        $listMonth = array();

        //On regarde pour tous les mois de l'année
        for ($currYear = 0; $currYear < $_GET["nbYear"]; $currYear++) {
            $req = $db->prepare("SELECT COUNT(idDon) AS nbDon
            FROM Don NATURAL JOIN Calendrier
            WHERE YEAR(dateDon) = ? AND MONTH(dateDon) = ?");

            $req->execute(array($nbDecade+$currYear, $currMonth));
            $row = $req->fetch();
            array_push($listMonth, $row["nbDon"]);
        }
        $listYear[$nbDecade+$currYear] = $listMonth;
    }
    echo json_encode(array("years" => $listYear));
}
?>