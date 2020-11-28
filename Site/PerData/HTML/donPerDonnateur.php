
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
<?php include'../include/mainHeader.php' ?>
<?php if($nomDonneur != null): ?>
<h1><?php echo ' Dons fait par '.$nomDonneur.' : '. $fonctionDonneur.''; ?></h1>
<p>
    <br/>Nombre de dons : <?php echo ' '.$nombre_don.''; ?>
</p>

<details>
    <summary class="Eye-Tree-titre1">A fait des don à : </summary>
    <p><?php
        for($i =0; $i < count($idsReceveurs);$i++)
        {
            echo '<details>
                <summary class="Eye-Tree-titre2"><a href="donPerDonnateur.php?id=' . $idsReceveurs[$i] . '">' . $noms_Receveurs[$i] . ' :  ' . $fonctions_Receveurs[$i] . '</a> ( ' . $nb_Don_pers[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par receveur:
            $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and idBeneficiaire =' . $idsReceveurs[$i] . '');
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
            echo '</p></div></details>';
        }
        ?>
    </p></details>
<details>
    <summary class="Eye-Tree-titre1">En ces endroits :</summary>
    <p>
        <?php
        for($i =0; $i < count($lieux);$i++)
        {
            echo ' <details>
                <summary class="Eye-Tree-titre2"><a href="donPerVille.php?emplacement=' . $lieux[$i] . '">' . $lieux[$i] . '</a> ( ' . $nb_Don_lieux[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par ville:
            $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and emplacement ="' . $lieux[$i] . '"');
            while ($row = $req->fetch()) {
                array_push($id_dons_lieux, $row['idD']);
            }
            for ($j = 0; $j < count($id_dons_lieux); $j++) {
                echo ' <a href="..\Afficher_don.php?id=' . $id_dons_lieux[$j] . '">Don ' . $id_dons_lieux[$j] . '</a>
                    <br/>';
            }
            $id_dons_lieux = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>
</details>
<details>
    <summary class="Eye-Tree-titre1">A ces dates :</summary>
    <p>

        <?php
        for($i =0; $i < count($dates);$i++)
        {
            echo ' <details><summary class="Eye-Tree-titre2"><a href="donPerDate.php?date=' . $dates[$i] . '">' .$dates[$i] .'</a> ( '. $nb_Don_dates[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par date:
            $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $id . ' and dateDon ="' . $dates[$i] . '"');
            while ($row = $req->fetch()) {
                array_push($id_dons_date, $row['idD']);
            }
            for ($j = 0; $j < count($id_dons_date); $j++) {
                echo ' <a href="..\Afficher_don.php?id= ' . $id_dons_date[$j] . '">Don ' . $id_dons_date[$j] . '</a>
                    <br/>';
            }
            $id_dons_date = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>





    <?php elseif($nomDonneur == null): ?> <!-- si l'id envoyée ne correspondait pas à celle d'un donnateur, nomdonnateur == nul -->

        <h1> Aucun don n'a été fait par cette personne</h1>
        <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

    <?php endif; ?>
</body>
</html>
