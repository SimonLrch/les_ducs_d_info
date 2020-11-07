<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));


function Afficher_infos_donneur($_id,$_db)
{

    //Création de variable
    $idsReceveurs = [];
    $noms_Receveurs = [];
    $fonctions_Receveurs = [];
    $nomDonneur = '';
    $fonctionDonneur = '';


    //Requête1 => donneur
    $req = $_db->query('SELECT nom as nomD, fonction as fonctionD FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idAuteur
                                        WHERE personne.idPersonne = '. $_id .'');
    while ($row= $req->fetch())
    {
        $nomDonneur = $row["nomD"];
        $fonctionDonneur = $row["fonctionD"];

    }

    //Requête 2 avoir id receveux
    $req = $_db->query('SELECT idBeneficiaire as idB FROM don WHERE idAuteur ='. $_id .'');
    while ($row= $req->fetch())
    {
        array_push($idsReceveurs,$row['idB']);
    }

    for($i =0; $i < count($idsReceveurs);$i++){
        $req = $_db->query('SELECT nom as nomB FROM personne WHERE idPersonne ='. $idsReceveurs[$i] .'
                            GROUP BY idPersonne');
        while ($row= $req->fetch())
        {
            array_push($noms_Receveurs,$row['nomB']);
        }
    }
?>

<!DOCTYPE html>
<html lang="fr">
<body>
    <h1>'.$nomDonneur.' '. $fonctionDonneur.'</h1>
    <p><?php
        for($i =0; $i < count($idsReceveurs);$i++){
            echo '<br/>' .$noms_Receveurs[$i] .'';
        }
    ?>
    </p>
</body>
</html>

<!--Afficher_infos_donneur($_GET["id"],$db);-->