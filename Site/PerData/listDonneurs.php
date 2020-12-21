<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

//Création des variables
$idsBeneficiaire = [];
$nomsBeneficiaire= [];
$fonctionsBeneficiaire = [];

//Requête
$req = $db->query('SELECT idPersonne as idB, nom as nomB, fonction as fonctionB FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idBeneficiaire
                                        GROUP BY personne.idPersonne');
while ($row= $req->fetch())
{
    array_push($idsBeneficiaire,$row['idB']);
    array_push($nomsBeneficiaire,$row['nomB']);
    array_push($fonctionsBeneficiaire,$row['fonctionB']);

}

    //HTML
    require_once ("HTML/listeDonneursPage.php");

?>

