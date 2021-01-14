<?php
// Conexion à la base de données
require_once("../include/dbConfig.php");
$db = getPDO("PtutS3");

//si le jour, le moi et l'année sont envoyées
if (isset($_GET["currentDay"]) && isset($_GET["currentMonth"]) && isset($_GET["currentYear"])) {
	$nbYear = $_GET["currentYear"];
    $nbMouth = $_GET["currentMonth"];
    $nbDay = $_GET["currentDay"];

    //requete pour avoir le don à ceyye date
    $req = $db->prepare("SELECT idDon AS id,
    dateDon AS date,
    forme AS forme,
    prix AS valeur,
    nature AS nature,
    emplacement AS lieu,
    sourceDon AS source,
    auteur.nom AS auteur,
    beneficiaire.nom AS beneficiaire
    FROM Don NATURAL JOIN calendrier
    JOIN Personne AS auteur ON Don.idAuteur = Auteur.idPersonne
    JOIN Personne AS beneficiaire ON Don.idBeneficiaire = Beneficiaire.idPersonne
    WHERE YEAR(dateDon) = ? AND MONTH(dateDon) = ? AND DAY(dateDon) = ?");

	$req->execute(array($nbYear, $nbMouth, $nbDay));
    $res = $req->fetchAll();
	echo json_encode($res);
}
?>