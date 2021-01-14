<!--HTML-->
<!DOCTYPE html>
<html lang="fr">
	<head>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
		<title>Liste Bénéficiaires</title>
	</head>
	<body>
		<?php include'../include/mainHeader.php' ?>
		<main class="container-main">
			<section class="inner-box section-hero">
				<span class="titreSection">Restitution Par Bénéficiaire</span>
			</section>
			<section class="inner-box">
				<div class="restitutionDon">
					<h1 id="titre-beneficiaire">Liste des Bénéficiaires :</h1>
						<p>
							<?php for ($i = 0; $i < count($idsBeneficiaire) ; $i++) { //Afficher tous les donneurs
								echo ' <a class="restitutionDon-a" href="donPerBeneficiaire.php?id='. $idsBeneficiaire[$i] .'">' .$nomsBeneficiaire[$i] . ' - ' . $fonctionsBeneficiaire[$i] . ' </a> <br/>';
							}  ?>
						</p>
				</div>
			</section>
		</main>
		<?php include'../include/mainFooter.php' ?>
	</body>
</html>
