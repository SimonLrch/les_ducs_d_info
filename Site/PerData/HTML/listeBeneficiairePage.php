<!--HTML-->
<!DOCTYPE html>
<html lang="fr">
	<head>
		<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
		<title> Liste Beneficiaires </title>
	</head>
	<body>
		<?php include'../include/mainHeader.php' ?>
		<section class="inner-box section-hero">
			<span class="titreSection">Restitution Par Beneficiaires</span>
		</section>
		<div class="restitutionDon">
			<h1 id="titre-beneficiaire">Liste des Beneficiaires :</h1>
				<p>
					<?php for ($i = 0; $i < count($idsBeneficiaire) ; $i++) { //Afficher tous les donneurs
						echo ' <a class="restitutionDon-a" href="donPerBeneficiaire.php?id='. $idsBeneficiaire[$i] .'">' .$nomsBeneficiaire[$i] . ' - ' . $fonctionsBeneficiaire[$i] . ' </a> <br/>';
					}  ?>
				</p>
		</div>
		<?php include'../include/mainFooter.php' ?>
	</body>
</html>
