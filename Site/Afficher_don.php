<?php

$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

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
$TypeDon = '';
$FormeDon = '';
$Poids = '';
$Date = '';
$Lieu = '';
$Raison = '';
$Source = '';
$Prix = '';


//Requete 1, sur table don
$req = $db->query('SELECT typeDon as TypeD, forme as FormeD, nature as NatureD, prix as PrixD, 
                dateDon as DateD, masse as PoidD, emplacement as LieuD, sourceDon as SourceD FROM don where idDon = '. $id .'');
while ($row= $req->fetch())
{
$TypeDon = $row['TypeD'];
$FormeDon = $row['FormeD'];
$Raison = $row['NatureD'];
$Prix = $row['PrixD'];
$Date = $row['DateD'];
$Poids = $row['PoidD'];
$Lieu = $row['LieuD'];
$Source = $row['SourceD'];

}

//Requete 2, sur table Personne / Auteur
$req = $db->query('SELECT idPersonne as idA, nom as NomA, fonction as FonctionA FROM personne INNER JOIN don on personne.idPersonne = don.idAuteur where idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomAuteur = $row['NomA'];
    $fonctionAuteur = $row['FonctionA'];
    $idAuteur = $row['idA'];
}

//Requete 3, sur table Personne / Destinataire
$req = $db->query('SELECT idPersonne as idD, nom as NomD, fonction as FonctionD FROM personne INNER JOIN don on personne.idPersonne = don.idBeneficiaire where idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomDestinataire = $row['NomD'];
    $fonctionDestinataire = $row['FonctionD'];
    $idDestinataire = $row['idD'];
}

//Requete 4, sur table Personne via table intermédiaire
$req = $db->query('SELECT personne.idPersonne as idI, personne.nom as NomI, personne.fonction as FonctionI FROM personne
                                INNER JOIN intermediaire on personne.idPersonne = intermediaire.idIntermediaire 
                                LEFT JOIN don on intermediaire.idDon = don.idDon
                WHERE don.idDon = '. $id .'');
while ($row= $req->fetch())
{
    $nomIntermediaire = $row['NomI'];
    $fonctionIntermediaire = $row['FonctionI'];
    $idIntermediaire = $row['idI'];
}

//remplacement par "non renseigné" des champs pouvant être null
if ($Poids == null){
    $Poids = 'aucune mention de poids';
}

?>

   <!--Affichage html-->

<!DOCTYPE html>
<html lang="fr">
    <body>
    <?php include'include/mainHeader.php' ?>
        <br/>
        <br/>
        <h1>Don numéro <?php echo ' ' . $id .''; ?></h1>
        <p>
            <br/>
            <br/>Auteur : <?php echo '<a href="Eye_Tree/donPerDonnateur.php?id='. $idAuteur .'">' . $nomAuteur .' ' . $fonctionAuteur .'</a>'; ?>
            <br/>A l' intention de :<?php echo '<a href="Eye_Tree/donPerDonnateur.php?id='. $idDestinataire .'">' . $nomDestinataire .' ' . $fonctionDestinataire .'</a>'; ?>
            <br/>Par le bais de : <?php
                    if($nomIntermediaire == null)
                    {
                        echo 'Aucune Mention';
                    }
                    else
                    {
                         echo '<a href="Eye_Tree/donPerDonnateur.php?id='. $idIntermediaire .'">' . $nomIntermediaire .' ' . $fonctionIntermediaire .'</a>';
                    }
                    ?>
            <br/>
            <br/>Type :<?php echo ' ' . $TypeDon .''; ?>
            <br/>Forme :<?php echo ' ' . $FormeDon .''; ?>
            <br/>Poids :<?php echo ' ' . $Poids .''; ?>
            <br/>Prix :  <?php echo ' ' . $Prix .''; ?>
            <br/>
            <br/>Date :<?php echo ' ' . $Date .''; ?>
            <br/>Lieu:  <?php echo ' ' . $Lieu .''; ?>
            <br/>
            <br/>Raison :<?php echo ' ' . $Raison .''; ?>
            <br/>
            <br/>Source: <?php echo ' ' . $Source .''; ?>

        </p>




    </body>

</html>




