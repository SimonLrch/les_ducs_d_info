<?php require_once("profilScript.php"); ?>
<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<title>Profil</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="../style/mainStyle.css">
		<script defer src="../script/mainScript.js"></script>
	</head>
	<body>
		<?php include("../include/mainHeader.php") ?>
		<main class="container-main">
			<section class="inner-box section-hero">
				<span class="titreSection">Profil</span>
			</section>
			<section class="inner-box">
				<?php if (isset($profil_email)): ?>
				<div class="title-form">
					<h2>Bienvenue <?php echo $profil_nom ?></h2>
				</div>
                <div class="global-form">
					<form method="POST" action=<?php echo "FormulaireModification.php"?>>
							<label>Prenom</label>
							<input type="text" name="donateur-name" />
							<label>Nom</label>
							<input type="text" name="donateur-statut" />
							<label>Email</label>
							<input type="text" name="beneficiaire-name" />
							<label>Mot de passe</label>
							<input type="text" name="beneficiaire-statut" />
							<div class="container-btn-form">
								<button type="submit" name="Enregistrer">Enregistrer</button>
								<a class="button-form-a" href="deconnexion.php">Se déconnecter</a>
							</div>
						</div>
					</form>
				</div>
				<?php else: ?>
				<span>Vous n'êtes pas connecté</span>
				<?php endif; ?>
			</section>
		</main>
		<?php include("../include/mainFooter.php") ?>
	</body>
</html>