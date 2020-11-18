<!Doctype html>
<html>
	<?php
	// Conexion à la base de données
	$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

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

		//Requête , les différentes dates
		$req = $db->query("SELECT dateDon FROM calendrier");
		while ($row= $req->fetch())
		{
			array_push($dates,$row['dateDon']);
		}

	?>
	<head>
		<meta charset="utf-8">
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
				   min="1400-01-01" max="2000-12-31">
			<input  type="submit" id="insere" name="insereDon">
		</form>
		<p>
		<?php 
		if(isset($_POST['insereDon'])){ // si formulaire soumis
			for ($i = 0; $i < count($dates) ; $i++) {
				if ( ($_POST['calendrier']) == ($dates[$i]) ){
					echo ' <a href="../PerData/donPerDate.php?date='. $dates[$i] .'></a><br/>';
				}else{
					exit('Date non répertorié');
				}
			}
		}
		?>
		</p>
	</body>

</html>