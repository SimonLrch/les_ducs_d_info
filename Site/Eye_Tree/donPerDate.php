<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$date = $_GET["date"];


?>
<!-- Affichage HTML -->

<!DOCTYPE html>
<html lang="fr">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
            <span>Restitution Par Dates</span>
    </section>
<?php if($date != null): ?>
        <h1><?php echo ''; ?></h1>



<?php elseif($date == null): ?> <!-- si l'id du lieu envoyé ne correspond pas a une date dans la bd -->

    <h1> Aucun don n'a été fait par en ces dates</h1>
    <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

<?php endif; ?>
</body>
</html>