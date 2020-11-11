<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//Création des variables
$idsDonneurs = [];
$nomsDonneurs = [];
$fonctionsDonneurs = [];

//Requête
$req = $db->query('SELECT idPersonne as idD, nom as nomD, fonction as fonctionD FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idAuteur
                                        GROUP BY personne.idPersonne');
while ($row= $req->fetch())
{
    array_push($idsDonneurs,$row['idD']);
    array_push($nomsDonneurs,$row['nomD']);
    array_push($fonctionsDonneurs,$row['fonctionD']);

}

?>


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
