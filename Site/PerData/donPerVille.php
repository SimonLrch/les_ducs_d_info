<?php

    //Connexion bd
    require_once ('../include/dbConfig.php');
    require_once('../include/replace.php');

    $pdo = getPDO("PtutS3");

    $emplacement = $_GET["emplacement"];
    $emplacementQuote = $emplacement;


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
        $req = $pdo->prepare('SELECT emplacement as lieu from don
                                            group by emplacement');

        $req->execute();
        while ($row= $req->fetch())
        {
            array_push($lieux,$row['lieu']);
        }

        for($i =0; $i < count($lieux); $i++)
        {   
            $lieux[$i] =  addAntiSlash($lieux[$i]); //remplacement de caractère pouvais géner
        }

        //Requête nombre de dons
        $req = $pdo->prepare('SELECT COUNT(idDon) as NbDon FROM don where emplacement = :empla');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);

        $req->execute();
        while ($row= $req->fetch())
        {
            $nombre_don = $row["NbDon"];
        }



    //AUTEURs
        //Requête => iddonneur
        $req = $pdo->prepare('SELECT idAuteur as idA from don where emplacement = :empla group by idAuteur');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);

        $req->execute();
        while ($row= $req->fetch())
        {
            array_push($idAuteurs,$row['idA']);
        }

        //Requête info Auteur
        $req = $pdo->prepare('SELECT personne.nom as nomA, personne.fonction as fonctionA from don
                                        INNER JOIN personne on personne.idPersonne = don.idAuteur 
                                        where don.emplacement = :empla
                                        group by personne.idPersonne');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);

        $req->execute();

        while ($row= $req->fetch())
        {
            array_push($nomAuteurs,$row['nomA']);
            array_push($fonctionAuteurs,$row['fonctionA']);
        }

        //Requête nombre de don par Auteur
        for($i =0; $i < count($idAuteurs); $i++)
        {
            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idAuteur = :idAut and emplacement = :empla');

            $req->bindValue(":idAut",$idAuteurs[$i],PDO::PARAM_INT);
            $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
            $req->execute();
            while ($row= $req->fetch())
            {
                array_push($nb_don_auteurs,$row['nbDon']);
            }
        }

    //RECEVEURS
        //Requête => iddonneur
        $req = $pdo->prepare('SELECT idBeneficiaire as idB from don where emplacement = :empla
                                        group by idBeneficiaire');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
        $req->execute();
        while ($row= $req->fetch())
        {
            array_push($idBeneficiaires,$row['idB']);
        }

        //Requête info Beneficiaire
        $req = $pdo->prepare('SELECT personne.nom as nomB, personne.fonction as fonctionB from don
                                            INNER JOIN personne on personne.idPersonne = don.idBeneficiaire 
                                            where don.emplacement = :empla
                                            group by personne.idPersonne');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
        $req->execute();
        while ($row= $req->fetch())
        {
            array_push($nomBeneficiaires,$row['nomB']);
            array_push($fonctionBeneficiaires,$row['fonctionB']);
        }

        //Requête nombre de don par Beneficiaire
        for($i =0; $i < count($idBeneficiaires); $i++){
            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where idBeneficiaire = :idBene and emplacement = :empla');
            $req->bindValue(":idBene",$idBeneficiaires[$i],PDO::PARAM_INT);
            $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
            $req->execute();
            while ($row= $req->fetch())
            {
                array_push($nb_don_beneficiaires,$row['nbDon']);
            }
        }

    //DATES
        //Requête => date
        $req = $pdo->prepare('SELECT dateDon as dateD from don where emplacement = :empla
                                                group by dateDon');
        $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
        $req->execute();
        while ($row= $req->fetch())
        {
            array_push($dates,$row['dateD']);
        }

        //Requête nombre de don par date
        for($i =0; $i < count($dates); $i++){
            $req = $pdo->prepare('SELECT count(idDon) as nbDon FROM don where dateDon = :date and emplacement = :empla');
            $req->bindValue(":date",$dates[$i]);
            $req->bindValue(":empla",$emplacementQuote,PDO::PARAM_STR);
            $req->execute();
            while ($row= $req->fetch())
            {
                array_push($nb_don_dates,$row['nbDon']);
            }
        }

    //HTML
    require_once ("HTML/donPerVillePage.php");

?>
