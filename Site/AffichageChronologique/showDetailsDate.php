<?php
	// Conexion à la base de données
	require_once("../include/dbConfig.php");
    $db = getPDO("PtutS3");

    //si le jour, le moi et l'année son envoyée
    if (isset($_GET["currentDay"]) && isset($_GET["currentMonth"]) && isset($_GET["currentYear"])) {
		$nbYear = $_GET["currentYear"];
        $nbMouth = $_GET["currentMonth"];
        $nbDay = $_GET["currentDay"];

        //requête  pour avoir des détail sur les don a cette date
        $req = $db->prepare("SELECT idDon AS id,
        dateDon AS date,
        forme AS forme,
        prix AS valeur,
        nature AS nature,
        emplacement AS lieu,
        sourceDon AS source
        FROM don NATURAL JOIN calendrier
        WHERE YEAR(dateDon) = ? AND MONTH(dateDon) = ? AND DAY(dateDon) = ?");

		$req->execute(array($nbYear, $nbMouth, $nbDay));
        $res = $req->fetchAll();
		echo json_encode($res);
    }
?>