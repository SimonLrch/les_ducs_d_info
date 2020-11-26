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

$req = $pdo->query('SELECT idDon as id from don group by idDon');
while ($row= $req->fetch())
{
    array_push($idDon,$row['id']);
}


//requête pour remplir chaque variable
for($i = 0 ; $i < count($idDon); $i++)
{
    //sur table don
    $req = $pdo->query('SELECT dateDon as dateD ,
                        emplacement as lieu,
                        forme as forme,
                        idAuteur as idA,
                        idBeneficiaire as idB,
                        masse as poids,
                        nature as nature,
                        prix as prix,
                        sourceDon as sourceD,
                        typeDon as typeD
                        from don where idDon ='.$idDon[$i].'');
    while ($row= $req->fetch())
    {
        array_push($date,$row['dateD']);
        array_push($lieu,$row['lieu']);
        array_push($forme,$row['forme']);
        array_push($idAuteur,$row['idA']);
        array_push($idBeneficiaire,$row['idB']);
        array_push($poids,$row['poids']);
        array_push($nature,$row['nature']);
        array_push($prix,$row['prix']);
        array_push($sources,$row['sourceD']);
        array_push($categorie,$row['typeD']);
    }

}

//remplir chaque ligne du json
for($i = 0 ; $i < count($idDon); $i++)
{

    $DonJson_Seul =  '{ "Category" : "'.$categorie[$i].'", "Auteur": "'.$test.'", "Beneficiaire" : "'.$test.'", "Statut": "'.$test.'", 
        "Nature": "'.$nature[$i].'", "Lieu": "'.$test.'", "Formes": "'.$test.'", "Date": "'.$test.'", "Sources": "'.$test.'" ,
        "Poids" = "'.$test.'","DonCount"= "1"}';
    
    if($i != count($idDon)-1)
    {
        $DonJson_Tous .= $DonJson_Seul . ',';
    }
    else{
        $DonJson_Tous .= $DonJson_Seul;
    }
}

$DonJson_Tous .= ']';


echo $DonJson_Tous;

?>