<?php

//Connexion bd
$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));

$id = $_GET["id"];

    //Création de variable
    $idsReceveurs = [];
    $nb_Don_pers = [];
    $noms_Receveurs = [];
    $fonctions_Receveurs = [];
    $nomDonneur = '';
    $fonctionDonneur = '';
    $id_dons = [];
    $nombre_don = 0;
    $lieux = [];
    $nb_Don_lieux = [];
    $dates = [];
    $nb_Don_dates = [];

    $id_dons_receveurs = [];
    $id_dons_lieux = [];
    $id_dons_date = [];


    //Requête => donneur
    $req = $db->query('SELECT nom as nomD, fonction as fonctionD FROM personne
                                        INNER JOIN don on personne.idPersonne = don.idAuteur
                                        WHERE personne.idPersonne = '. $id .'');
    while ($row= $req->fetch())
    {
        $nomDonneur = $row["nomD"];
        $fonctionDonneur = $row["fonctionD"];

    }

    //Requête avoir id receveurs
    $req = $db->query('SELECT idBeneficiaire as idB FROM don WHERE idAuteur ='. $id .'
                                GROUP BY idBeneficiaire');
    while ($row= $req->fetch())
    {
        array_push($idsReceveurs,$row['idB']);
    }

    //Requête  nombre de don par id de Beneficiaire
    for($i =0; $i < count($idsReceveurs); $i++){
        $req = $db->query('SELECT count(idDon) as nbDon FROM don where idAuteur ='. $id .' and idBeneficiaire = "' . $idsReceveurs[$i].'"');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_pers,$row['nbDon']);
        }
    }

    //Requête avoir noms et fonction receveurs
    for($i =0; $i < count($idsReceveurs);$i++){
        $req = $db->query('SELECT nom as nomB, fonction as fonctionB FROM personne WHERE idPersonne ='. $idsReceveurs[$i] .'
                            GROUP BY idPersonne');
        while ($row= $req->fetch())
        {
            array_push($noms_Receveurs,$row['nomB']);
            array_push($fonctions_Receveurs,$row['fonctionB']);
        }
    }

    //Requête nombre de dons
    $req = $db->query('SELECT COUNT(idDon) as NbDon FROM don where idAuteur ='. $id .'');
    while ($row= $req->fetch())
    {
        $nombre_don = $row["NbDon"];
    }

    //Requête  id des dons
    $req = $db->query('SELECT idDon as idD FROM don where idAuteur ='. $id .'');
    while ($row= $req->fetch())
    {
        array_push($id_dons,$row['idD']);
    }

    //Requête  les différents lieux
    $req = $db->query('SELECT emplacement as lieux FROM don where idAuteur ='. $id .'
                                    GROUP BY emplacement');
    while ($row= $req->fetch())
    {
        array_push($lieux,$row['lieux']);
    }

    //Requête  nombre de don par lieux
    for($i =0; $i < count($lieux); $i++){
        $req = $db->query('SELECT count(idDon) as nbDon FROM don where idAuteur ='. $id .' and emplacement = "' . $lieux[$i].'"');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_lieux,$row['nbDon']);
        }
    }

    //Requête , les différentes dates
    $req = $db->query('SELECT dateDon as dateD FROM don where idAuteur ='. $id .'
                                        GROUP BY dateDon');
    while ($row= $req->fetch())
    {
        array_push($dates,$row['dateD']);
    }

    //Requête 9, nombre de don par dates
    for($i =0; $i < count($dates); $i++){
        $req = $db->query('SELECT count(idDon) as nbDon FROM don where idAuteur ='. $id .' and dateDon = "' . $dates[$i].'"');
        while ($row= $req->fetch())
        {
            array_push($nb_Don_dates,$row['nbDon']);
        }
    }





?>
<!-- Affichage HTML -->

<!DOCTYPE html>
<html lang="fr">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
	<?php include'../include/mainHeader.php' ?>
<?php if($nomDonneur != null): ?>
        <h1><?php echo ' '.$nomDonneur.' '. $fonctionDonneur.''; ?></h1>
        <p>
            <br/>Nombre de dons : <?php echo ' '.$nombre_don.''; ?>
        </p>
        <h2> A fait des don à : </h2>
        <p><?php
            for($i =0; $i < count($idsReceveurs);$i++)
            {
                echo '<h3><a href="donPerDonnateur.php?id=' . $idsReceveurs[$i] . '">' . $noms_Receveurs[$i] . ' ' . $fonctions_Receveurs[$i] . '</a> ( ' . $nb_Don_pers[$i] . ' )</h3>';
                //Requête pour avoir les dons par receveur:
                $req = $db->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and idBeneficiaire =' . $idsReceveurs[$i] . '');
                while ($row = $req->fetch())
                {
                    array_push($id_dons_receveurs, $row['idD']);
                }
                for ($j = 0; $j < count($id_dons_receveurs); $j++)
                {
                    echo ' <a href="..\Afficher_don.php?id=' . $id_dons_receveurs[$j] . '">Don ' . $id_dons_receveurs[$j] . '</a>
                    <br/>';
                }
                $id_dons_receveurs = []; //reset le tableau
            }
             ?>
        </p>
        <h2> En ces endroits : </h2>
        <p>
            <?php
            for($i =0; $i < count($lieux);$i++)
            {
                echo ' <h3><a href="donPerVille.php?emplacement=' . $lieux[$i] . '">' . $lieux[$i] . '</a> ( ' . $nb_Don_lieux[$i] . ' )</h3>';
                //Requête pour avoir les dons par ville:
                $req = $db->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and emplacement ="' . $lieux[$i] . '"');
                while ($row = $req->fetch()) {
                    array_push($id_dons_lieux, $row['idD']);
                }
                for ($j = 0; $j < count($id_dons_lieux); $j++) {
                    echo ' <a href="..\Afficher_don.php?id=' . $id_dons_lieux[$j] . '">Don ' . $id_dons_lieux[$j] . '</a>
                    <br/>';
                }
                $id_dons_lieux = []; //reset le tableau
            }
            ?>

        </p>
        <h2> A ces dates : </h2>
        <p>

            <?php
            for($i =0; $i < count($dates);$i++)
            {
                echo '<h3><a href="donPerDate.php?date=' . $dates[$i] . '">' .$dates[$i] .'</a> ( '. $nb_Don_dates[$i] . ' )</h3>';
                //Requête pour avoir les dons par date:
                $req = $db->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and dateDon ="' . $dates[$i] . '"');
                while ($row = $req->fetch()) {
                    array_push($id_dons_date, $row['idD']);
                }
                for ($j = 0; $j < count($id_dons_date); $j++) {
                    echo ' <a href="..\Afficher_don.php?id=' . $id_dons_date[$j] . '">Don ' . $id_dons_date[$j] . '</a>
                    <br/>';
                }
                $id_dons_date = []; //reset le tableau
            }
            ?>

        </p>





<?php elseif($nomDonneur == null): ?> <!-- si l'id envoyée ne correspondait pas à celle d'un donnateur, nomdonnateur == nul -->

    <h1> Aucun don n'a été fait par cette personne</h1>
    <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

<?php endif; ?>
</body>
</html>