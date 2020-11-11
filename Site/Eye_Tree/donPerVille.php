<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$emplacement = $_GET["emplacement"];


?>
<!-- Affichage HTML -->

<!DOCTYPE html>
<html lang="fr">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
            <span>Restitution Par Lieux</span>
    </section>
<?php if($emplacement != null): ?>
        <h1><?php echo ''; ?></h1>



<?php elseif($emplacement == null): ?> <!-- si l'id du lieu envoyé ne correspond pas a un lieu qui existe -->

    <h1> Aucun don n'a été fait par en ce lieux</h1>
    <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

<?php endif; ?>
</body>
</html>