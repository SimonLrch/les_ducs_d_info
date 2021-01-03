
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
<h1>Liste des Beneficiaires</h1>
<p>
    <?php for ($i = 0; $i < count($idsBeneficiaire) ; $i++) { //Afficher tous les donneurs
        echo ' <a href="donPerDonnateur.php?id='. $idsBeneficiaire[$i] .'">' .$nomsBeneficiaire[$i] . '  ' . $fonctionsBeneficiaire[$i] . ' </a> <br/>';
    }  ?>
</p>
</body>
</html>
