<?php
	// Conexion à la base de données
	require_once("../include/dbConfig.php");
    $db = getPDO("PtutS3");

	//si le mois et l'année sont envoyée
    if (isset($_GET["currentMonth"]) && isset($_GET["currentYear"])) {
		$nbYear = $_GET["currentYear"];
		$nbMouth = $_GET["currentMonth"];

		//requete pour avoire les date qui corresponde (ou il y a eu des don)
        $req = $db->prepare("SELECT dateDon AS date FROM calendrier WHERE YEAR(dateDon) = ? AND MONTH(dateDon) = ?");
		$req->execute(array($nbYear, $nbMouth)); 
        $res = $req->fetchAll();
		echo json_encode($res);
    }

	//Création de variable
	/*$idsReceveurs = [];
	$nb_Don_pers = [];
	$noms_Receveurs = [];
	$fonctions_Receveurs = [];
	$nomDonneur = '';
	$fonctionDonneur = '';
	$id_dons = [];
	$nombre_don = 0;
	$lieux = [];
	$nb_Don_lieux = [];
	$dates = [];
	$nb_Don_dates = [];

	//pour converstion
	$dates_fr= [];
	$ateEntree = 1400-01-01;
	$dateEntree_fr = 01-01-1400;

	//Requête , les différentes dates
	$req = $db->query("SELECT dateDon FROM calendrier");
	while ($row= $req->fetch())
	{
		array_push($dates,$row['dateDon']);
	}

	//conversion en date
	$format = "Y-m-d";

	for ($i = 0; $i < count($dates);$i++){
		$dates_fr[$i] = DateTime::createFromFormat($format, $dates[$i]);
	}

	$estDansDate = false;
	//vérifie le formulaire et convertis le string en date

	if(isset($_POST['insereDon'])){ // si formulaire soumis récupérer la date
		$dateEntree = $_POST['calendrier'];
		$dateEntree_fr = DateTime::createFromFormat($format, $dateEntree);       

		for($i=0;$i < count($dates_fr); $i++){
			if($dateEntree_fr == $dates_fr[$i]){
				$estDansDate = true;
			}
		}
	}*/
?>