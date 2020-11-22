<?php
	// Conexion à la base de données
	require_once("../include/dbConfig.php");
	$db = getPDO("PtutS3");

	//Création de variable
	$idsReceveurs = [];
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
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Restitution chronologique</title>
	<link rel="stylesheet" href="Calendar/calendar.css">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
</head>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
        <span>Restitution Chronologique</span>
    </section>
	<label for="start">Calendrier:</label>
	<form lang="en" method="post" action="DonSelonChronologie.php">
		<input type="date" id="start" name="calendrier"
			   value="1400-01-01"
			   min="1400-01-01">
		<input  type="submit" id="insere" name="insereDon">
	</form>
	<?php if(isset($_POST['insereDon'])): ?>
		<?php if ($estDansDate == true): ?>
			<p>
			<?php echo '<a href="..\PerData\donPerDate.php?date=' . $dateEntree_fr->format('Y-m-d') . '">Aller à la page du '. $dateEntree_fr->format('Y-m-d') .'</a>' ?>
			</p>

		<?php elseif($estDansDate == false): ?>
			<p>Aucun don n'a été fais à cette date.</p>
		<?php endif; ?>
	<?php endif; ?>
</body>
</html>