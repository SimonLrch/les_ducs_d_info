
<!--HTML-->
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
<?php include'../include/mainHeader.php' ?>
<section class="inner-box section-hero">
    <span>Restitution Par Donneurs</span>
</section>
<h1>Liste des Donnateurs</h1>
<p>
    <?php for ($i = 0; $i < count($idsDonneurs) ; $i++) { //Afficher tous les donneurs
        echo ' <a href="donPerDonnateur.php?id='. $idsDonneurs[$i] .'">' .$nomsDonneurs[$i] . '  ' . $fonctionsDonneurs[$i] . ' </a> <br/>';
    }  ?>
</p>
</body>
</html>
