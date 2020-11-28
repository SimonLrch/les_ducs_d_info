<?php

//conexion bd
require_once ('../include/dbConfig.php');

$pdo = getPDO("PtutS3");

//Déclaration des variables pour requêtes
$idDon  = [];

$idAuteur = [];
$nomAuteur = '';
$fonctionAuteur = '';

$idBeneficiaire = [];
$nomBeneficiaire = '';
$fonctionBeneficiaire = '';

//$idIntermedaire = [];
//$nomIntermedaire = [];
//$fonctionIntermedaire = [];*/

$lieu = [];
$statut = [];
$nature = [];
$categorie = [];
$forme = [];
$prix = [];
$date = []; 
$sources = [];

$poids = '';
$idPoids = [];







//requête pour avoir les id des Auteurs
$req = $pdo->query('SELECT idAuteur as idA from don group by idAuteur');
while ($row= $req->fetch())
{
    array_push($idAuteur,$row["idA"]);
}



//Remplir le json


$DonJson_Tous = '
                {
                "name": "Dons", "children": 
                [
            ';
            
for($i = 0 ; $i < count($idAuteur); $i++) //
{

    //requete détails Auteurs
    $req = $pdo->query('SELECT nom as nomA, fonction as fonctionA
    from don inner join personne on don.idAuteur =personne.idPersonne
    where idPersonne ='.$idAuteur[$i].'');
    while ($row= $req->fetch())
    {
        $nomAuteur = $row["nomA"];
        $fonctionAuteur = $row["fonctionA"];
    }

    //Json
    $DonJson_Auteur = '{
                        "name" : " '. $nomAuteur.' '. $fonctionAuteur.'",
                        "children" : [';

    //requete idBeneficiaire
    $req = $pdo->query('SELECT distinct(idBeneficiaire) as idB from don 
                        where idAuteur = '. $idAuteur[$i].'');
    while ($row= $req->fetch())
    {
        array_push($idBeneficiaire,$row["idB"]);
    }

    for($j=0;$j < count($idBeneficiaire);$j++)
    {

        //requete détails Beneficiaires
        $req = $pdo->query('SELECT nom as nomB, fonction as fonctionB
        from don inner join personne on don.idBeneficiaire =personne.idPersonne
        where idPersonne ='.$idBeneficiaire[$j].'');
        while ($row= $req->fetch())
        {
            $nomBeneficiaire = $row["nomB"];
            $fonctionBeneficiaire = $row["fonctionB"];
        }

        //json
        $DonJson_Beneficiaire = '{
            "name" : " '. $nomBeneficiaire.' '. $fonctionBeneficiaire.' ",
            "children" : [';

         //requete lieux
        $req = $pdo->query('SELECT distinct(emplacement) as lieu from don 
        where idBeneficiaire = '. $idBeneficiaire[$j].'');
        while ($row= $req->fetch())
        {
        array_push($lieu,$row["lieu"]);
        }

        for ($h=0;$h< count($lieu);$h++)
        {
            $DonJson_Lieu = '{
                "name" : " lieu ",
                "size" : 1}';

            if($h != count($lieu)-1)
            {
                $DonJson_Beneficiaire .= $DonJson_Lieu . ',';
            }
            else
            {
                $DonJson_Beneficiaire .= $DonJson_Lieu;
            }
        }

        $DonJson_Beneficiaire .= ']}';

        if($j != count($idBeneficiaire)-1)
        {
            $DonJson_Auteur .= $DonJson_Beneficiaire . ',';
        }
        else
        {
            $DonJson_Auteur .= $DonJson_Beneficiaire;
        }

    }


    $idBeneficiaire = []; //reset pour le prochain auteur de don

    //Json
    $DonJson_Auteur .= ']}';

    if($i != count($idAuteur)-1)
    {
        $DonJson_Tous .= $DonJson_Auteur . ',';
    }
    else
    {
        $DonJson_Tous .= $DonJson_Auteur;
    }

}


$DonJson_Tous .= ']}';


/*$test1 = ' {
    "name": "TOPICS", "children": 
    [
        {
            "name": "Topic A",
            "children": 
            [
                {
                    "name": "Sub A1", "size": 4}, {"name": "Sub A2", "size": 4
                    }
                ]
        }, 
        {
            "name": "Topic B",
            "children": 
            [
                {
                    "name": "Sub B1", "size": 3
                }, 
                {
                    "name": "Sub B2", "size": 3
                },
                {
                    "name": "Sub B3", "size": 3
                }
            ]
        }, 
        {
            "name": "Topic C",
            "children":
            [
                {
                    "name": "Sub C1", 
                    "children" :
                    [
                        { 
                            "name " : "Sub C1a"
                            , "size": 3
                        }
                    ]
                }, 
                {
                    "name": "Sub C2", 
                    "size": 4
                }
            ]
        }
    ]
}'; */

echo $DonJson_Tous;

?>