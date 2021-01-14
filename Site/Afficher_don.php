<?php
session_start();
require_once ('include/dbConfig.php');
$pdo = getPDO("PtutS3");
$_SESSION['idDon'] = $_GET["id"];


//Création de variable
$_SESSION['nomAuteur'] = '';
$_SESSION['fonctionAuteur'] = '';
$_SESSION['idAuteur'] = '';

$_SESSION['nomDestinataire'] = '';
$_SESSION['fonctionDestinataire'] = '';
$_SESSION['idDestinataire'] = '';

$_SESSION['nomIntermediaire'] = '';
$_SESSION['fonctionIntermediaire'] = '';
$_SESSION['idIntermediaire'] = '';

$_SESSION['typeDon'] = '';
$_SESSION['formeDon'] = '';

$_SESSION['idPoids'] = '';
$_SESSION['poids'] = '';

$_SESSION['date'] = '';
$_SESSION['lieu'] = '';
$_SESSION['nature'] = '';
$_SESSION['source'] = '';
$_SESSION['prix'] = '';


//Requete 1, sur table don
$req = $pdo->query('SELECT typeDon as TypeD, forme as FormeD, nature as NatureD, prix as PrixD, 
                dateDon as DateD, idPoids as PoidD, emplacement as LieuD, sourceDon as SourceD FROM don where idDon = '. $_SESSION['idDon'] .'');
while ($row= $req->fetch())
{
	$_SESSION['typeDon'] = $row['TypeD'];
	$_SESSION['formeDon'] = $row['FormeD'];
	$_SESSION['nature'] = $row['NatureD'];
	$_SESSION['prix'] = $row['PrixD'];
$_SESSION['date'] = $row['DateD'];
$_SESSION['idPoids'] = $row['PoidD'];
$_SESSION['lieu'] = $row['LieuD'];
$_SESSION['source'] = $row['SourceD'];
}

//Requete 2, sur table Personne / Auteur
$req = $pdo->query('SELECT idPersonne as idA, nom as NomA, fonction as FonctionA FROM personne 
	INNER JOIN don on personne.idPersonne = don.idAuteur where idDon = '. $_SESSION['idDon'] .'');
while ($row= $req->fetch())
{
    $_SESSION['nomAuteur'] = $row['NomA'];
	$_SESSION['fonctionAuteur'] = $row['FonctionA'];
    $_SESSION['idAuteur']  = $row['idA'];
}

//Requete 3, sur table Personne / Destinataire
$req = $pdo->query('SELECT idPersonne as idD, nom as NomD, fonction as FonctionD FROM personne 
	INNER JOIN don on personne.idPersonne = don.idBeneficiaire where idDon = '.$_SESSION['idDon'] .'');
while ($row= $req->fetch())
{
    $_SESSION['nomDestinataire'] = $row['NomD'];
    $_SESSION['fonctionDestinataire'] = $row['FonctionD'];
    $_SESSION['idDestinataire'] = $row['idD'];
}

//Requete 4, sur table Personne via table intermédiaire
$req = $pdo->query('SELECT personne.idPersonne as idI, personne.nom as NomI, personne.fonction as FonctionI FROM personne
                                INNER JOIN intermediaire on personne.idPersonne = intermediaire.idIntermediaire 
                                LEFT JOIN don on intermediaire.idDon = don.idDon
                WHERE don.idDon = '. $_SESSION['idDon'] .'');
while ($row= $req->fetch())
{
    $_SESSION['nomIntermediaire'] = $row['NomI'];
    $_SESSION['fonctionIntermediaire'] = $row['FonctionI'];
    $_SESSION['idIntermediaire'] = $row['idI'];
}

//Requete sur le poids
$req = $pdo->query('SELECT masse as poids from poids WHERE idPoids = '. $_SESSION['idPoids'] .'');
while ($row= $req->fetch())
{
    $_SESSION['poids'] = $row['poids'];

}


?>

   <!--Affichage html-->

<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Don n°<?php echo ''.$_SESSION['idDon'] .''; ?></title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="style/mainStyle.css">
		<script defer src="script/mainScript.js"></script>
	</head>
    <body>
		<?php include'include/mainHeader.php' ?>
		<main class="container-main">
			<section class="inner-box">
				<div class="restitutionDon">
				<h1>Don numéro <?php echo ' ' . $_SESSION['idDon'] .''; ?></h1>
				<p>
					<br/>
					<br/>Auteur : <?php echo '<a class="restitutionDon-a" href="PerData/donPerDonnateur.php?id='. $_SESSION['idAuteur'] .'">' .
						$_SESSION['nomAuteur'] .'  : ' . $_SESSION['fonctionAuteur'] .'</a>'; ?>
					<br/>A l' intention de : <?php echo '<a class="restitutionDon-a" href="PerData/donPerDonnateur.php?id='. 
						$_SESSION['idDestinataire'] .'">' . $_SESSION['nomDestinataire'] .' : ' . $_SESSION['fonctionDestinataire'] .'</a>'; ?>
					<br/>Par le biais de : <?php
							if($_SESSION['nomIntermediaire'] == null)
							{
								echo 'Aucune Mention';
							}
							else
							{
								echo '<a class="restitutionDon-a" href="PerData/donPerDonnateur.php?id='. $_SESSION['idIntermediaire'] .'">' . 
									$_SESSION['nomIntermediaire'] .' : ' . $_SESSION['fonctionIntermediaire'] .'</a>';
							}
							?>
					<br/>
					<br/>Type :<?php echo ' ' . $_SESSION['typeDon'] .''; ?>
					<br/>Forme :<?php echo ' ' . $_SESSION['formeDon'] .''; ?>
					<br/>Poids :<?php //Poid peut être null
							if($_SESSION['poids'] == null)
							{
								echo 'Aucune Mention de poids';
							}
							else
							{
								echo '' . $_SESSION['poids'] .' ';
							}
							?>
					<br/>Prix :  <?php echo ' ' . $_SESSION['prix'] .''; ?>
					<br/>
					<br/>Date :<?php echo ' <a class="restitutionDon-a" href="PerData/donPerDate.php?date=' . $_SESSION['date'] . '">' . $_SESSION['date'] .'</a>'; ?>
					<br/>Lieu:  <?php echo '<a class="restitutionDon-a" href="PerData/donPerVille.php?emplacement=' . $_SESSION['lieu'] . '">' . $_SESSION['lieu'] .'</a>'; ?>
					<br/>
					<br/>Nature :<?php echo ' ' . $_SESSION['nature'] .''; ?>
					<br/>
					<br/>Source: <?php echo ' ' . $_SESSION['source'] .''; ?>
				</p>
			</div>
			<?php if(isset($_SESSION['type']) && $_SESSION['type']=='Administrateur')
				{
					echo '<form method="POST" action="FormulaireModification.php">
						<div class="container-btn-form">
							<button type="submit" name="Modifier">Modifier</button>
							<button type="submit" name="Supprimer">Supprimer</button>
						</div>
						</form>';
				}
			?>
			</section>
		</main>
		<?php include'include/mainFooter.php' ?>
    </body>
</html>




