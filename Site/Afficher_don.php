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

$idPoids = '';
$poids = '';

$date = '';
$lieu = '';
$raison = '';
$source = '';
$prix = '';


//Requete 1, sur table don
$req = $pdo->query('SELECT typeDon as TypeD, forme as FormeD, nature as NatureD, prix as PrixD, 
                dateDon as DateD, idPoids as PoidD, emplacement as LieuD, sourceDon as SourceD FROM don where idDon = '. $id .'');
while ($row= $req->fetch())
{
$typeDon = $row['TypeD'];
$formeDon = $row['FormeD'];
$raison = $row['NatureD'];
$prix = $row['PrixD'];
$date = $row['DateD'];
$idPoids = $row['PoidD'];
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

//Requete sur le poids
$req = $pdo->query('SELECT masse as poids from poids natural join don
                WHERE idPoids = '. $idPoids .'');
while ($row= $req->fetch())
{
    $poids = $row['poids'];

}


?>

   <!--Affichage html-->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Don n°<?php echo ''.$id .''; ?></title>
		<meta charset="utf-8">
		<link rel="stylesheet" href="style/mainStyle.css">
		<script defer src="script/mainScript.js"></script>
	</head>
    <body>
		<?php include'include/mainHeader.php' ?>
		<section class="inner-box section-hero">
            <span class="titreSection">Don numéro<?php echo ' ' . $id .''; ?></span>
        </section>
		<div class="restitutionDon">
			<p>
				Auteur : <?php echo '<a class="restitutionDon-a" href="PerData/donPerBeneficiaire.php?id='. $idAuteur .'">' . $nomAuteur .'  -  ' . $fonctionAuteur .'</a>'; ?>
				<br/>A l' intention de :<?php echo '<a class="restitutionDon-a" href="PerData/donPerBeneficiaire.php?id='. $idDestinataire .'">' . $nomDestinataire .' - ' . $fonctionDestinataire .'</a>'; ?>
				<br/>Par le biais de : <?php
						if($nomIntermediaire == null)
						{
							echo 'Aucune Mention';
						}
						else
						{
							 echo '<a class="restitutionDon-a" href="PerData/donPerBeneficiaire.php?id='. $idIntermediaire .'">' . $nomIntermediaire .' - ' . $fonctionIntermediaire .'</a>';
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
				<br/>Date :<?php echo ' <a class="restitutionDon-a" href="PerData/donPerDate.php?date=' . $date . '">' . $date .'</a>'; ?>
				<br/>Lieu:  <?php echo '<a class="restitutionDon-a" href="PerData/donPerVille.php?emplacement=' . $lieu . '">' . $lieu .'</a>'; ?>
				<br/>
				<br/>Raison :<?php echo ' ' . $raison .''; ?>
				<br/>
				<br/>Source: <?php echo ' ' . $source .''; ?>
			</p>
		</div>
		<?php include'include/mainFooter.php' ?>
    </body>
</html>




