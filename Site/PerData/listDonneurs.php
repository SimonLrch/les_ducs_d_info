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

    //HTML
    require_once ("HTML/listeDonneursPage.php");

?>

