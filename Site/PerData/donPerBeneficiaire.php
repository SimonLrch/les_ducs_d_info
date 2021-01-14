<?php

//Connexion bd
require_once ('../include/dbConfig.php');

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
    $req = $pdo->query('SELECT nom as nomD, fonction as fonctionD FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idBeneficiaire
                                        WHERE personne.idPersonne = '. $id .'');
    while ($row= $req->fetch())
    {
        $nomDonneur = $row["nomD"];
        $fonctionDonneur = $row["fonctionD"];

    }

    //Requête avoir id donneur
    $req = $pdo->query('SELECT idAuteur as idB FROM don WHERE idBeneficiaire ='. $id .'
                                GROUP BY idAuteur');
    while ($row= $req->fetch())
    {
        array_push($idsDonneurs,$row['idB']);
    }

    //Requête  nombre de don par id de Donneur
    for($i =0; $i < count($idsDonneurs); $i++){
        $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idBeneficiaire ='. $id .' and idAuteur = "' . $idsDonneurs[$i].'"
                                group by idAuteur');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_pers,$row['nbDon']);
        }
    }

    //Requête avoir noms et fonction receveurs
    for($i =0; $i < count($idsDonneurs);$i++){
        $req = $pdo->query('SELECT nom as nomB, fonction as fonctionB FROM personne WHERE idPersonne ='. $idsDonneurs[$i] .'
                            GROUP BY idPersonne');
        while ($row= $req->fetch())
        {
            array_push($noms_Receveurs,$row['nomB']);
            array_push($fonctions_Receveurs,$row['fonctionB']);
        }
    }

    //Requête nombre de dons
    $req = $pdo->query('SELECT COUNT(idDon) as NbDon FROM don where idBeneficiaire ='. $id .'');
    while ($row= $req->fetch())
    {
        $nombre_don = $row["NbDon"];
    }

    //Requête  id des dons
    $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur ='. $id .'');
    while ($row= $req->fetch())
    {
        array_push($id_dons,$row['idD']);
    }

    //Requête  les différents lieux
    $req = $pdo->query('SELECT emplacement as lieux FROM don where idBeneficiaire ='. $id .'
                                    GROUP BY emplacement');
    while ($row= $req->fetch())
    {
        array_push($lieux,$row['lieux']);
    }

    //Requête  nombre de don par lieux
    for($i =0; $i < count($lieux); $i++){
        $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idBeneficiaire ='. $id .' and emplacement = "' . $lieux[$i].'"');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_lieux,$row['nbDon']);
        }
    }

    //Requête , les différentes dates
    $req = $pdo->query('SELECT dateDon as dateD FROM don where idBeneficiaire ='. $id .'
                                        GROUP BY dateDon');
    while ($row= $req->fetch())
    {
        array_push($dates,$row['dateD']);
    }

    //Requête 9, nombre de don par dates
    for($i =0; $i < count($dates); $i++){
        $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idBeneficiaire ='. $id .' and dateDon = "' . $dates[$i].'"');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_dates,$row['nbDon']);
        }
    }

    //HTML
    require_once ("HTML/donPerBeneficiaire.php");
?>
