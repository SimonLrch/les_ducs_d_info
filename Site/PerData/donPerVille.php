<?php

//Connexion bd
require_once ('../include/dbConfig.php');
require_once('../include/replace.php');

$pdo = getPDO("PtutS3");

$emplacement = $_GET["emplacement"];
$emplacementQuote = replaceDoubleQuote($emplacement);

$emplacement = addAntiSlash($emplacement); //remplacement de caractère pouvais géner
$emplacementQuote = addAntiSlash($emplacementQuote); //remplacement de caractère pouvais géner



//Initialisation variables

//lieux
$lieux = [];
$nombre_don = 0;

//auteur
$idAuteurs = [];
$nomAuteurs = [];
$fonctionAuteurs = [];
$id_don_auteurs = [];
$nb_don_auteurs = [];

//bénéficiaire
$idBeneficiaires = [];
$nomBeneficiaires = [];
$fonctionBeneficiaires = [];
$id_don_beneficiaires = [];
$nb_don_beneficiaires = [];

//date
$dates = [];
$id_don_dates = [];
$nb_don_dates = [];

    //Liste lieux
        //Requête donne une liste de lieux
        $req = $pdo->query('SELECT emplacement as lieu from don
                                            group by emplacement');
        while ($row= $req->fetch())
        {
            array_push($lieux,$row['lieu']);
        }

        for($i =0; $i < count($lieux); $i++)
        {   
            $lieux[$i] =  addAntiSlash($lieux[$i]); //remplacement de caractère pouvais géner
        }

        //Requête nombre de dons
        $req = $pdo->query('SELECT COUNT(idDon) as NbDon FROM don where emplacement = "'.$emplacementQuote.'"');
        while ($row= $req->fetch())
        {
            $nombre_don = $row["NbDon"];
        }



    //AUTEURs
        //Requête => iddonneur
        $req = $pdo->query('SELECT idAuteur as idA from don where emplacement = "'.$emplacementQuote.'"
                                    group by idAuteur');
        while ($row= $req->fetch())
        {
            array_push($idAuteurs,$row['idA']);
        }

        //Requête info Auteur
        $req = $pdo->query('SELECT personne.nom as nomA, personne.fonction as fonctionA from don
                                        INNER JOIN personne on personne.idPersonne = don.idAuteur 
                                        where don.emplacement = "'.$emplacementQuote.'"
                                        group by personne.idPersonne');
        while ($row= $req->fetch())
        {
            array_push($nomAuteurs,$row['nomA']);
            array_push($fonctionAuteurs,$row['fonctionA']);
        }

        //Requête nombre de don par Auteur
        for($i =0; $i < count($idAuteurs); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idAuteur ='. $idAuteurs[$i] .' and emplacement = "' . $emplacementQuote.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_auteurs,$row['nbDon']);
            }
        }

    //RECEVEURS
        //Requête => iddonneur
        $req = $pdo->query('SELECT idBeneficiaire as idB from don where emplacement = "'.$emplacementQuote.'"
                                        group by idBeneficiaire');
        while ($row= $req->fetch())
        {
            array_push($idBeneficiaires,$row['idB']);
        }

        //Requête info Beneficiaire
        $req = $pdo->query('SELECT personne.nom as nomB, personne.fonction as fonctionB from don
                                            INNER JOIN personne on personne.idPersonne = don.idBeneficiaire 
                                            where don.emplacement = "'.$emplacementQuote.'"
                                            group by personne.idPersonne');
        while ($row= $req->fetch())
        {
            array_push($nomBeneficiaires,$row['nomB']);
            array_push($fonctionBeneficiaires,$row['fonctionB']);
        }

        //Requête nombre de don par Beneficiaire
        for($i =0; $i < count($idBeneficiaires); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idBeneficiaire ='. $idBeneficiaires[$i] .' and emplacement = "' . $emplacementQuote.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_beneficiaires,$row['nbDon']);
            }
        }

    //DATES
        //Requête => date
        $req = $pdo->query('SELECT dateDon as dateD from don where emplacement = "'.$emplacementQuote.'"
                                                group by dateDon');
        while ($row= $req->fetch())
        {
            array_push($dates,$row['dateD']);
        }

        //Requête nombre de don par date
        for($i =0; $i < count($dates); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where dateDon ="'. $dates[$i] .'" and emplacement = "' . $emplacementQuote.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_dates,$row['nbDon']);
            }
        }

    //HTML
    require_once ("HTML/donPerVillePage.php");

?>
