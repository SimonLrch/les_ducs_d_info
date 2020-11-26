<?php

//conexion bd
require_once ('../../include/dbConfig.php');

$pdo = getPDO("PtutS3");

//Déclaration des variables pour requêtes
$idDon  = [];

$idAuteur = [];
$nomAuteur = [];
$fonctionAuteur = [];

$idBeneficiaire = [];
$nomBeneficiaire = [];
$fonctionBeneficiaire = [];

$idIntermedaire = [];
$nomIntermedaire = [];
$fonctionIntermedaire = [];

$lieu = [];
$statut = [];
$nature = [];
$poids = [];
$categorie = [];
$forme = [];
$prix = [];
$date = []; 
$sources = [];


//Declaration des variable pour bd
$DonJson_Seul = '';
$DonJson_Tous = '[';

$test = 'oui';



//Requête pour liste des id

$req = $pdo->query('SELECT idDon as id from don group by dateDon');
while ($row= $req->fetch())
{
    array_push($idDon,$row['id']);
}


for($i = 0 ; $i < count($idDon); $i++){

    $DonJson_Seul =  '{ "Category" : "'.$test.'", "Auteur": "'.$test.'", "Label" : "'.$test.'", "Statut": "'.$test.'", "Nature": "'.$test.'", "Lieu": "'.$test.'", "Formes": "'.$test.'", "Date": "'.$test.'", "Sources": "'.$test.'" Poids = "'.$test.'",DonCount = "1"}';
    
    if($i != count($idDon))
    {
        echo 'oui';
        $DonJson_Tous .= $DonJson_Seul . ',';
    }
    else{
        echo 'non';
    }
}


echo $DonJson_Seul;

?>