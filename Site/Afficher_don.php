<?php

/**
 * @param $id id du don
 * @param $db base de donnée
 */
function Afficher_Don($id,$db)
{

    //Création de variable
    $nomAuteur = '';
    $fonctionAuteur = '';
    $nomDestinataire = '';
    $fonctionDestinataire = '';
    $nomIntermediaire = '';
    $fonctionIntermediaire = '';
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
    $req = $db->query('SELECT nom as NomA, fonction as FonctionA FROM personne INNER JOIN don on personne.idPersonne = don.idAuteur where idDon = '. $id .'');
    while ($row= $req->fetch())
    {
        $nomAuteur = $row['NomA'];
        $fonctionAuteur = $row['FonctionA'];
    }

    //Requete 3, sur table Personne / Destinataire
    $req = $db->query('SELECT nom as NomD, fonction as FonctionD FROM personne INNER JOIN don on personne.idPersonne = don.idBeneficiaire where idDon = '. $id .'');
    while ($row= $req->fetch())
    {
        $nomDestinataire = $row['NomD'];
        $fonctionDestinataire = $row['FonctionD'];
    }

    //Requete 4, sur table Personne via table intermédiaire
    $req = $db->query('SELECT personne.nom as NomI, personne.fonction as FonctionI FROM personne
		                            INNER JOIN intermediaire on personne.idPersonne = intermediaire.idIntermediaire 
		                            LEFT JOIN don on intermediaire.idDon = don.idDon
                	WHERE don.idDon = '. $id .'');
    while ($row= $req->fetch())
    {
        $nomIntermediaire = $row['NomI'];
        $fonctionIntermediaire = $row['FonctionI'];
    }

    //remplacement par "non renseigné" des champs pouvant être null
    if ($Poids == null){
        $Poids = 'aucune mention de poids';
    }

   if ($nomIntermediaire == null){
        $nomIntermediaire = 'aucune mention';
        $fonctionIntermediaire = '';
    }

   //Affichage html
    echo '
                    <!DOCTYPE html>
                    <html lang="fr">
                        <body>
                            <br/>
                            <br/>
                            <h1>Don numéro ' . $id .'</h1>
                            <p>
                                <br/>
                                <br/>Auteur :  ' . $nomAuteur .' ' . $fonctionAuteur .'
                                <br/>A l\' intention de : ' . $nomDestinataire .' ' . $fonctionDestinataire.'
                                <br/>Par le bais de : ' . $nomIntermediaire.' ' . $fonctionIntermediaire .'
                                <br/>
                                <br/>Type : ' . $TypeDon .'
                                <br/>Forme : ' . $FormeDon .'
                                <br/>Poids : ' . $Poids .'
                                <br/>Prix :  ' . $Prix .'
                                <br/>
                                <br/>Date : ' . $Date .'
                                <br/>Lieu: ' . $Lieu .'
                                <br/>
                                <br/>Raison : ' . $Raison .'
                                <br/>
                                <br/>Source: ' . $Source .'
                            
                            </p>
                            
                            
                            
                    
                        </body>
                    
                    </html>
                    ';

}

?>
