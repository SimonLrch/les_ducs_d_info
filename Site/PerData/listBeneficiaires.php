<?php

//Connexion bd
include_once("../include/dbConfig.php");
$db = getPDO("PtutS3");
//Création des variables
$idsBeneficiaire = [];
$nomsBeneficiaire= [];
$fonctionsBeneficiaire = [];

//Requête
$req = $db->prepare('SELECT idPersonne as idB, nom as nomB, fonction as fonctionB FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idBeneficiaire
                                        GROUP BY personne.idPersonne');
$req->execute();
while ($row= $req->fetch())
{
    array_push($idsBeneficiaire,$row['idB']);
    array_push($nomsBeneficiaire,$row['nomB']);
    array_push($fonctionsBeneficiaire,$row['fonctionB']);

}

    //HTML
    require_once ("HTML/listeBeneficiairePage.php");

?>

