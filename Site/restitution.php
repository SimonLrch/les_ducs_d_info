<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>Restitution</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/mainStyle.css">
    <script defer src="script/mainScript.js"></script>
</head>
<body>
    <?php include'include/mainHeader.php' ?>
    <main class="container-main">
        <section class="inner-box section-hero">
            <span class="titreSection">RESTITUTION</span>
        </section>
        <section class="inner-box">
            <div class="grid-list grid-restitution">
                <a href="PerData/listDonneurs.php" class="grid-cell">
                    <img src="Images/ParDonneur.png" />
                    <span>Par donneur</span>
                </a>
                <a href="AffichageChronologique/DonSelonChronologie.php" class="grid-cell">
                    <img src="Images/Chronologie.png" />
                    <span>Chronologique</span>
                </a>
                <a href="AffichageGeographique/DonGeographique.php" class="grid-cell">
                    <img src="Images/Geographique.png" />
                    <span>Géographique</span>
                </a>
                <a href="AffichageSunburst2/sunburst.php" class="grid-cell">
                    <img src="Images/Sunburst.png" />
                    <span>Sunburst</span>
                </a>
            </div>
        </section>
		
    </main>
    <?php include'include/mainFooter.php' ?>
</body>
</html>
