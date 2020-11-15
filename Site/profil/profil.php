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
            <span>Profil</span>
        </section>
        <section class="inner-box">
            <?php if (isset($profil_email)): ?>
            <span>Bienvenue <?php echo $profil_nom ?></span>
            <a href="deconnexion.php">Se déconnecter</a>
            <?php else: ?>
            <span>Vous n'êtes pas connecté</span>
            <?php endif; ?>
        </section>
    </main>
</body>
</html>