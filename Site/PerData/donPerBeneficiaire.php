<?php

//Connexion bd
require_once ('../include/dbConfig.php');
require_once('../include/replace.php');

$pdo = getPDO("PtutS3");

$id = $_GET["id"];

    //Création de variable

    //donneurs
    $idsDonneurs = [];
    $nb_Don_pers = [];
    $nomDonneur = '';
    $fonctionDonneur = '';

    //receveur
    $noms_Receveurs = [];
    $fonctions_Receveurs = [];
    $id_dons_receveurs = [];

    //nb don
    $nombre_don = 0;

    //id
    $id_dons = [];

    //lieu
    $lieux = [];
    $nb_Don_lieux = [];
    $id_dons_lieux = [];

    //dates
    $dates = [];
    $nb_Don_dates = [];
    $id_dons_date = [];


    //Requête => donneur
    $req = $pdo->prepare('SELECT nom as nomD, fonction as fonctionD FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idBeneficiaire
                                        WHERE personne.idPersonne = ?');

    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        $nomDonneur = $row["nomD"];
        $fonctionDonneur = $row["fonctionD"];

    }

    //Requête avoir id donneur
    $req = $pdo->prepare('SELECT idAuteur as idB FROM don WHERE idBeneficiaire = ?
                                GROUP BY idAuteur');
    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        array_push($idsDonneurs,$row['idB']);
    }

    //Requête  nombre de don par id de Donneur
    for($i =0; $i < count($idsDonneurs); $i++){
        $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idBeneficiaire = ? and idAuteur = "' . $idsDonneurs[$i].'"
                                group by idAuteur');

        $req->execute(array($id));
        while ($row= $req->fetch())
        {
            array_push($nb_Don_pers,$row['nbDon']);
        }
    }

    //Requête avoir noms et fonction receveurs
    for($i =0; $i < count($idsDonneurs);$i++){
        $req = $pdo->prepare('SELECT nom as nomB, fonction as fonctionB FROM personne WHERE idPersonne = ?
                            GROUP BY idPersonne');

   $req->execute(array($idsDonneurs[$i] ));
        while ($row= $req->fetch())
        {
            array_push($noms_Receveurs,$row['nomB']);
            array_push($fonctions_Receveurs,$row['fonctionB']);
        }
    }

    //Requête nombre de dons
    $req = $pdo->prepare('SELECT COUNT(idDon) as NbDon FROM don where idBeneficiaire =?');
    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        $nombre_don = $row["NbDon"];
    }

    //Requête  id des dons
    $req = $pdo->prepare('SELECT idDon as idD FROM don where idAuteur = ?');
    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        array_push($id_dons,$row['idD']);
    }

    //Requête  les différents lieux
    $req = $pdo->prepare('SELECT emplacement as lieux FROM don where idBeneficiaire = ?
                                    GROUP BY emplacement');

    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        array_push($lieux,$row['lieux']);
    }

    

    

    //Requête  nombre de don par lieux
    
    for($i =0; $i < count($lieux); $i++){

        $lieuxQuote = replaceDoubleQuote($lieux[$i]); //remplacement de caractère pouvais géner
        //$lieuxQuote = addAntiSlash($lieuxQuote);


        $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idBeneficiaire = ? and emplacement = ? ');
        $req->execute(array($id,$lieuxQuote));
        
        while ($row= $req->fetch())
        {
            array_push($nb_Don_lieux,$row['nbDon']);
        }
    }

    //Requête , les différentes dates
    $req = $pdo->prepare('SELECT dateDon as dateD FROM don where idBeneficiaire = ?
                                        GROUP BY dateDon');
    $req->execute(array($id));
    while ($row= $req->fetch())
    {
        array_push($dates,$row['dateD']);
    }

    //Requête 9, nombre de don par dates
    for($i =0; $i < count($dates); $i++){
        $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idBeneficiaire = ? and dateDon = ?');
        $req->execute(array($id,$dates[$i]));
        while ($row= $req->fetch())
        {
            array_push($nb_Don_dates,$row['nbDon']);
        }
    }

    //HTML
    require_once ("HTML/donPerBeneficiaire.php");
?>
