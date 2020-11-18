<?php

require_once ('include/dbConfig.php');

$pdo = getPDO("PtutS3");

$id = $_GET["id"];


//Création de variable
$nomAuteur = '';
$fonctionAuteur = '';
$idAuteur = '';
$nomDestinataire = '';
$fonctionDestinataire = '';
$idDestinataire = '';
$nomIntermediaire = '';
$fonctionIntermediaire = '';
$idIntermediaire = '';
$typeDon = '';
$formeDon = '';
$poids = '';
$date = '';
$lieu = '';
$raison = '';
$source = '';
$prix = '';


//Requete 1, sur table don
$req = $pdo->query('SELECT typeDon as TypeD, forme as FormeD, nature as NatureD, prix as PrixD, 
                dateDon as DateD, masse as PoidD, emplacement as LieuD, sourceDon as SourceD FROM don where idDon = '. $id .'');
while ($row= $req->fetch())
{
$typeDon = $row['TypeD'];
$formeDon = $row['FormeD'];
$raison = $row['NatureD'];
$prix = $row['PrixD'];
$date = $row['DateD'];
$poids = $row['PoidD'];
$lieu = $row['LieuD'];
$source = $row['SourceD'];

}

//Requete 2, sur table Personne / Auteur
$req = $pdo->query('SELECT idPersonne as idA, nom as NomA, fonction as FonctionA FROM personne INNER JOIN don on personne.idPersonne = don.idAuteur where idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomAuteur = $row['NomA'];
    $fonctionAuteur = $row['FonctionA'];
    $idAuteur = $row['idA'];
}

//Requete 3, sur table Personne / Destinataire
$req = $pdo->query('SELECT idPersonne as idD, nom as NomD, fonction as FonctionD FROM personne INNER JOIN don on personne.idPersonne = don.idBeneficiaire where idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomDestinataire = $row['NomD'];
    $fonctionDestinataire = $row['FonctionD'];
    $idDestinataire = $row['idD'];
}

//Requete 4, sur table Personne via table intermédiaire
$req = $pdo->query('SELECT personne.idPersonne as idI, personne.nom as NomI, personne.fonction as FonctionI FROM personne
                                INNER JOIN intermediaire on personne.idPersonne = intermediaire.idIntermediaire 
                                LEFT JOIN don on intermediaire.idDon = don.idDon
                WHERE don.idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomIntermediaire = $row['NomI'];
    $fonctionIntermediaire = $row['FonctionI'];
    $idIntermediaire = $row['idI'];
}


?>

   <!--Affichage html-->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style/mainStyle.css">
		<script defer src="script/mainScript.js"></script>
	</head>
    <body>
    <?php include'include/mainHeader.php' ?>
        <br/>
        <br/>
        <h1>Don numéro <?php echo ' ' . $id .''; ?></h1>
        <p>
            <br/>
            <br/>Auteur : <?php echo '<a href="PerData/donPerDonnateur.php?id='. $idAuteur .'">' . $nomAuteur .'  : ' . $fonctionAuteur .'</a>'; ?>
            <br/>A l' intention de :<?php echo '<a href="PerData/donPerDonnateur.php?id='. $idDestinataire .'">' . $nomDestinataire .' : ' . $fonctionDestinataire .'</a>'; ?>
            <br/>Par le bais de : <?php
                    if($nomIntermediaire == null)
                    {
                        echo 'Aucune Mention';
                    }
                    else
                    {
                         echo '<a href="PerData/donPerDonnateur.php?id='. $idIntermediaire .'">' . $nomIntermediaire .' : ' . $fonctionIntermediaire .'</a>';
                    }
                    ?>
            <br/>
            <br/>Type :<?php echo ' ' . $typeDon .''; ?>
            <br/>Forme :<?php echo ' ' . $formeDon .''; ?>
            <br/>Poids :<?php //Poid peut être null
                    if($poids == null)
                    {
                        echo 'Aucune Mention de poids';
                    }
                    else
                    {
                        echo '' . $poids .' ';
                    }
                    ?>
            <br/>Prix :  <?php echo ' ' . $prix .''; ?>
            <br/>
            <br/>Date :<?php echo ' <a href="PerData/donPerDate.php?date=' . $date . '">' . $date .'</a>'; ?>
            <br/>Lieu:  <?php echo '<a href="PerData/donPerVille.php?emplacement=' . $lieu . '">' . $lieu .'</a>'; ?>
            <br/>
            <br/>Raison :<?php echo ' ' . $raison .''; ?>
            <br/>
            <br/>Source: <?php echo ' ' . $source .''; ?>

        </p>




    </body>

</html>




