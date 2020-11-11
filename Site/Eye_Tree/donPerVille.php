<?php

//Connexion bd
require_once ('../include/dbConfig.php');

$pdo = getPDO("PtutS3");

$emplacement = $_GET["emplacement"];

//Initialisation variables

$lieux = [];
$nombre_don = 0;

$idAuteurs = [];
$nomAuteurs = [];
$fonctionAuteurs = [];
$id_don_auteurs = [];
$nb_don_auteurs = [];

$idBeneficiaires = [];
$nomBeneficiaires = [];
$fonctionBeneficiaires = [];
$id_don_beneficiaires = [];
$nb_don_beneficiaires = [];

$dates = [];
$id_don_dates = [];
$nb_don_dates = [];

    //Liste lieux
        //Requête donne une liste de lieux
        $req = $pdo->query('SELECT emplacement as lieu from don
                                            group by emplacement');
        while ($row= $req->fetch())
        {
            array_push($lieux,$row['lieu']);
        }

        //Requête nombre de dons
        $req = $pdo->query('SELECT COUNT(idDon) as NbDon FROM don where emplacement = "'.$emplacement.'"');
        while ($row= $req->fetch())
        {
            $nombre_don = $row["NbDon"];
        }

    //AUTEURs
        //Requête => iddonneur
        $req = $pdo->query('SELECT idAuteur as idA from don where emplacement = "'.$emplacement.'"
                                    group by idAuteur');
        while ($row= $req->fetch())
        {
            array_push($idAuteurs,$row['idA']);
        }

        //Requête info Auteur
        $req = $pdo->query('SELECT personne.nom as nomA, personne.fonction as fonctionA from don
                                        INNER JOIN personne on personne.idPersonne = don.idAuteur 
                                        where don.emplacement = "'.$emplacement.'"
                                        group by personne.idPersonne');
        while ($row= $req->fetch())
        {
            array_push($nomAuteurs,$row['nomA']);
            array_push($fonctionAuteurs,$row['fonctionA']);
        }

        //Requête nombre de don par Auteur
        for($i =0; $i < count($idAuteurs); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idAuteur ='. $idAuteurs[$i] .' and emplacement = "' . $emplacement.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_auteurs,$row['nbDon']);
            }
        }

    //RECEVEURS
        //Requête => iddonneur
        $req = $pdo->query('SELECT idBeneficiaire as idB from don where emplacement = "'.$emplacement.'"
                                        group by idBeneficiaire');
        while ($row= $req->fetch())
        {
            array_push($idBeneficiaires,$row['idB']);
        }

        //Requête info Beneficiaire
        $req = $pdo->query('SELECT personne.nom as nomB, personne.fonction as fonctionB from don
                                            INNER JOIN personne on personne.idPersonne = don.idBeneficiaire 
                                            where don.emplacement = "'.$emplacement.'"
                                            group by personne.idPersonne');
        while ($row= $req->fetch())
        {
            array_push($nomBeneficiaires,$row['nomB']);
            array_push($fonctionBeneficiaires,$row['fonctionB']);
        }

        //Requête nombre de don par Beneficiaire
        for($i =0; $i < count($idBeneficiaires); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where idBeneficiaire ='. $idBeneficiaires[$i] .' and emplacement = "' . $emplacement.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_beneficiaires,$row['nbDon']);
            }
        }

    //DATES
        //Requête => date
        $req = $pdo->query('SELECT dateDon as dateD from don where emplacement = "'.$emplacement.'"
                                                group by dateDon');
        while ($row= $req->fetch())
        {
            array_push($dates,$row['dateD']);
        }

        //Requête nombre de don par date
        for($i =0; $i < count($dates); $i++){
            $req = $pdo->query('SELECT count(idDon) as nbDon FROM don where dateDon ="'. $dates[$i] .'" and emplacement = "' . $emplacement.'"');
            while ($row= $req->fetch())
            {
                array_push($nb_don_dates,$row['nbDon']);
            }
        }

?>
<!-- Affichage HTML -->

<!DOCTYPE html>
<html lang="fr">
	<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
	<?php include'../include/mainHeader.php' ?>
	<section class="inner-box section-hero">
            <span>Restitution Par Lieux</span>
    </section>
<?php if(in_array($emplacement,$lieux)): ?>
    <p><a href="../AffichageGeographique/DonGeographique.php">Voir avec une carte</a>  </p>
    <h1><?php echo 'Dons fait à '. $emplacement.''; ?></h1>
    <p>
        <br/>Nombre de dons : <?php echo ' '.$nombre_don.''; ?>
    </p>
    <details>
    <summary class="Eye-Tree-titre1">Personnes ayant données à <?php echo ''.$emplacement.''; ?>: </summary><p>
        <?php
        for($i =0; $i < count($idAuteurs);$i++)
        {
            echo '<details>
            <summary class="Eye-Tree-titre2"><a href="donPerDonnateur.php?id=' . $idAuteurs[$i] . '">' . $nomAuteurs[$i] . ' :  ' . $fonctionAuteurs[$i] . '</a> ( ' . $nb_don_auteurs[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $idAuteurs[$i] . ' and emplacement = "' . $emplacement . '"');
            while ($row = $req->fetch())
            {
                array_push($id_don_auteurs, $row['idD']);
            }
            for ($j = 0; $j < count($id_don_auteurs); $j++)
            {
                echo ' <a href="..\Afficher_don.php?id=' . $id_don_auteurs[$j] . '">Don ' . $id_don_auteurs[$j] . '</a>
                <br/>';
            }
            $id_don_auteurs = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>
    </details>
    <details>
        <summary class="Eye-Tree-titre1">Personnes ayant recues des dons à <?php echo ''.$emplacement.''; ?>: </summary><p>

        <?php
        for($i =0; $i < count($idAuteurs);$i++)
        {
            echo '<details><summary class="Eye-Tree-titre2"><a href="donPerDonnateur.php?id=' . $idBeneficiaires[$i] . '">' . $nomBeneficiaires[$i] . ' :  ' . $fonctionBeneficiaires[$i] . '</a> ( ' . $nb_don_beneficiaires[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where idBeneficiaire =' . $idBeneficiaires[$i] . ' and emplacement = "' . $emplacement . '"');
            while ($row = $req->fetch())
            {
                array_push($id_don_beneficiaires, $row['idD']);
            }
            for ($j = 0; $j < count($id_don_beneficiaires); $j++)
            {
                echo ' <a href="..\Afficher_don.php?id=' . $id_don_beneficiaires[$j] . '">Don ' . $id_don_beneficiaires[$j] . '</a>
                <br/>';
            }
            $id_don_beneficiaires = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>
    </details>
    <details>
        <summary class="Eye-Tree-titre1">Dates où il y a eu des dons à <?php echo ''.$emplacement.''; ?>: </summary><p>

        <?php
        for($i =0; $i < count($dates);$i++)
        {
            echo '<details><summary class="Eye-Tree-titre2"><a href="donPerDate.php?date=' . $dates[$i] . '">' . $dates[$i] . ' </a> ( ' . $nb_don_dates[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where dateDon ="' . $dates[$i] . '" and emplacement = "' . $emplacement . '"
            ');
            while ($row = $req->fetch())
            {
                array_push($id_don_dates, $row['idD']);
            }
            for ($j = 0; $j < count($id_don_dates); $j++)
            {
                echo ' <a href="..\Afficher_don.php?id=' . $id_don_dates[$j] . '">Don ' . $id_don_dates[$j] . '</a>
                <br/>';
            }
            $id_don_dates = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>
    </details>



<?php elseif(!in_array($emplacement,$lieux)): ?> <!-- si l'id du lieu envoyé ne correspond pas a un lieu qui existe -->

<h1> Aucun don n'a été fait par en ce lieux</h1>
<p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

<?php endif; ?>
</body>
</html>