<?php

//conexion bd
require_once ('../../include/dbConfig.php');

$pdo = getPDO("PtutS3");

//Déclaration des variables pour requêtes
$idDon  = [];

$idAuteur = [];
$nomAuteur = '';
//$fonctionAuteur = '';

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


//Declaration des variable pour bd
$DonJson_Seul = '';
$DonJson_Tous = '{
    "name : "root",
    "children" : [';




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
                        nature as nature,
                        prix as prix,
                        idPoids as poids,
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
        array_push($nature,$row['nature']);
        array_push($prix,$row['prix']);
        array_push($sources,$row['sourceD']);
        array_push($categorie,$row['typeD']);
        array_push($idPoids,$row['poids']);
    }

    

}



//remplir chaque ligne du json
for($i = 0 ; $i < count($idDon); $i++) //
{

     //Auteur
    $req = $pdo->query('SELECT nom as nomA
         from don inner join personne on don.idAuteur =personne.idPersonne
         where idPersonne ='.$idAuteur[$i].'');
    while ($row= $req->fetch())
    {
        $nomAuteur = $row['nomA'];
    }

    //Beneficiaire
    $req = $pdo->query('SELECT nom as nomB,
            fonction as statut
    from don inner join personne on don.idBeneficiaire =personne.idPersonne
    where idPersonne ='.$idBeneficiaire[$i].'');
    while ($row= $req->fetch())
    {
        $nomBeneficiaire = $row['nomB'];
        $fonctionBeneficiaire = $row['statut'];
    }

    //Poids
    $req = $pdo->query('SELECT masse as poids
    from don natural join poids
    where idPoids ='.$idPoids[$i].'');
    while ($row= $req->fetch())
    {
        $poids = $row['poids'];
    }




    $DonJson_Seul =  '{ "Category" : "'.$categorie[$i].'", "Auteur": "'.$nomAuteur.'", "Beneficiaire" : "'.$nomBeneficiaire.'", "Statut": "'.$fonctionBeneficiaire.'", "Nature": "'.$nature[$i].'", "Lieu": "'.$lieu[$i].'", "Formes": "'.$forme[$i].'", "Date": "'.$date[$i].'", "Sources": "'.$sources[$i].'", "Poids" : "'.$poids.'" ,"DonCount" : 1 }';
    
    
    if($i != count($idDon)-1)
    {
        $DonJson_Tous .= $DonJson_Seul . ',';
    }
    else
    {
        $DonJson_Tous .= $DonJson_Seul;
    }
}

$DonJson_Tous .= '}';


//echo $DonJson_Tous;

?>