<?php

//Connexion bd
require_once ('../include/dbConfig.php');
require_once('../include/replace.php');

$pdo = getPDO("PtutS3");

$date = $_GET["date"];

//Variables

//date
$datesTab = [];
$nombre_don = 0;

//auteur
$idAuteurs = [];
$nomAuteurs = [];
$fonctionAuteurs = [];
$id_don_auteurs = [];
$nb_don_auteurs = [];

//bénéficiaires
$idBeneficiaires = [];
$nomBeneficiaires = [];
$fonctionBeneficiaires = [];
$id_don_beneficiaires = [];
$nb_don_beneficiaires = [];

//lieux
$lieux = [];
$id_don_lieux = [];
$nb_don_lieux = [];

    //DATE
        //Requête donne une liste de dates
        $req = $pdo->query('SELECT dateDon as dateD from don
                                                    group by dateDon');

        while ($row= $req->fetch())
        {
            array_push($datesTab,$row['dateD']);
        }

        //Requête nombre de dons
        $req = $pdo->prepare('SELECT COUNT(idDon) as NbDon FROM don where dateDon = ?');
        $req->execute(array($date));
        while ($row= $req->fetch())
        {
            $nombre_don = $row["NbDon"];
        }

    //AUTEURs
        //Requête => iddonneur
        $req = $pdo->prepare('SELECT idAuteur as idA from don where dateDon = ?
                                            group by idAuteur');
         $req->execute(array($date));
        while ($row= $req->fetch())
        {
            array_push($idAuteurs,$row['idA']);
        }

        //Requête info Auteur
        $req = $pdo->prepare('SELECT personne.nom as nomA, personne.fonction as fonctionA from don
                                                INNER JOIN personne on personne.idPersonne = don.idAuteur 
                                                where don.dateDon = ?
                                                group by personne.idPersonne');

        $req->execute(array($date));
        while ($row= $req->fetch())
        {
            array_push($nomAuteurs,$row['nomA']);
            array_push($fonctionAuteurs,$row['fonctionA']);
        }

        //Requête nombre de don par Auteur
        for($i =0; $i < count($idAuteurs); $i++){
            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idAuteur = ? and dateDon = ?');

            $req->execute(array($idAuteurs[$i],$date));
            while ($row= $req->fetch())
            {
                array_push($nb_don_auteurs,$row['nbDon']);
            }
        }

    //RECEVEURS
        //Requête => iddonneur
        $req = $pdo->prepare('SELECT idBeneficiaire as idB from don where dateDon = ?
                                                group by idBeneficiaire');

        $req->execute(array($date));
        while ($row= $req->fetch())
        {
            array_push($idBeneficiaires,$row['idB']);
        }

        //Requête info Beneficiaire
        $req = $pdo->prepare('SELECT personne.nom as nomB, personne.fonction as fonctionB from don
                                                    INNER JOIN personne on personne.idPersonne = don.idBeneficiaire 
                                                    where don.dateDon =  ?
                                                    group by personne.idPersonne');
        
        $req->execute(array($date));                                           
        while ($row= $req->fetch())
        {
            array_push($nomBeneficiaires,$row['nomB']);
            array_push($fonctionBeneficiaires,$row['fonctionB']);
        }

        //Requête nombre de don par Beneficiaire
        for($i =0; $i < count($idBeneficiaires); $i++){
            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idBeneficiaire = ? and dateDon = ? ');
            $req->execute(array($idBeneficiaires[$i],$date));
            while ($row= $req->fetch())
            {
                array_push($nb_don_beneficiaires,$row['nbDon']);
            }
        }

    //Lieux
        //Requête => lieux
        $req = $pdo->prepare('SELECT emplacement as lieu from don where dateDon = ?
                                                group by emplacement');
        
       $req->execute(array($date));                                        
       while ($row= $req->fetch())
        {
            array_push($lieux,$row['lieu']);
        }

        //Requête nombre de don par date
        for($i =0; $i < count($lieux); $i++){

            $lieuxQuote = replaceDoubleQuote($lieux[$i]); //remplacement de caractère pouvais géner


            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where emplacement = ? and dateDon =  ?');
            $req->execute(array($lieuxQuote,$date));
            while ($row= $req->fetch())
            {
                array_push($nb_don_lieux,$row['nbDon']);
            }
        }

    //HTML
    require_once ("HTML/donPerDate.php");

?>

