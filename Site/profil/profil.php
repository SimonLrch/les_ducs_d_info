<?php 
	require_once("profilScript.php");
	require_once("modificationProfil.php");
	var_dump($_SESSION);
?>
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
			<h2 class="title-form">Bienvenue <?php echo $profil_nom ?></h2>
			<section class="inner-box">
				<?php if (isset($profil_email)): ?>
				<form method="POST" action="">
					<fieldset class="global-form">
						<div class="form-step active-step" id="form-step1">
							<span class="warning"><?php if(isset($err)) {echo $err; }?></span>
							<legend>Les * sont des champs obligatoires</legend>
							<label>Prenom*</label>
							<input type="text" name="prenom" value="<?php echo $profil_prenom ?>" required />
							<label>Nom*</label>
							<input type="text" name="nom" value="<?php echo $profil_nom ?>" required />
							<label>Email*</label>
							<input type="text" name="email" value="<?php echo $profil_email ?>" required />
							<label>Ancien mot de passe*</label>
							<input type="password" name="ancien_mdp" required />
							<label>Nouveau mot de passe</label>
							<input type="password" name="nouveau_mdp"/>
							<div class="container-btn-form">
								<button type="submit" name="Enregistrer-profil">Enregistrer</button>
								<a class="button-form-a" href="deconnexion.php">Se déconnecter</a>
							</div>
						</div>
					</fieldset>
				</form>
				<?php else: ?>
				<span>Vous n'êtes pas connecté</span>
				<?php endif; ?>
			</section>
		</main>
		<?php include("../include/mainFooter.php") ?>
	</body>
</html>