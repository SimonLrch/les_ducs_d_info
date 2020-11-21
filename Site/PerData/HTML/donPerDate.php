
<!DOCTYPE html>
<html lang="fr">
<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
<body>
<?php include'../include/mainHeader.php' ?>
<section class="inner-box section-hero">
    <span>Restitution Par Dates</span>
</section>
<?php if(in_array($date,$datesTab)): ?>
<p><a href="../AffichageChronologique/DonSelonChronologie.php">Voir avec un calendrier</a>  </p>
<h1><?php echo 'Dons fait le '.$date.''; ?></h1>
<p>
    <br/>Nombre de dons : <?php echo ' '.$nombre_don.''; ?>
</p>

<details>
    <summary class="Eye-Tree-titre1">Personnes ayant données le <?php echo ''.$date.''; ?> : </summary><p>
        <?php
        for($i =0; $i < count($idAuteurs);$i++)
        {
            echo '<details><summary class="Eye-Tree-titre2"><a href="donPerDonnateur.php?id=' . $idAuteurs[$i] . '">' . $nomAuteurs[$i] . ' :  ' . $fonctionAuteurs[$i] . '</a> ( ' . $nb_don_auteurs[$i] . ' )</summary>
                <div class="Eye-Tree-content"> <p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $idAuteurs[$i] . ' and dateDon = "' . $date . '"');
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
    <summary class="Eye-Tree-titre1">Personnes ayant reçu a des dons le <?php echo ''.$date.''; ?> : </summary><p>

        <?php
        for($i =0; $i < count($idAuteurs);$i++)
        {
            echo '<details><summary class="Eye-Tree-titre2"><a href="donPerDonnateur.php?id=' . $idBeneficiaires[$i] . '">' . $nomBeneficiaires[$i] . ' :  ' . $fonctionBeneficiaires[$i] . '</a> ( ' . $nb_don_beneficiaires[$i] . ' )</summary><div class="Eye-Tree-content"><p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where idBeneficiaire =' . $idBeneficiaires[$i] . ' and dateDon = "' . $date . '"');
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
<details><summary class="Eye-Tree-titre1">Lieux dans lesquels les dons du <?php echo ''.$date.''; ?> ont été fait : </summary><p>

        <?php
        for($i =0; $i < count($lieux);$i++)
        {
            echo '<details><summary class="Eye-Tree-titre2"><a href="donPerVille.php?emplacement=' . $lieux[$i] . '">' . $lieux[$i] . ' </a> ( ' . $nb_don_lieux[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
            //Requête pour avoir les dons par donneurs:
            $req = $pdo->query('SELECT idDon as idD FROM don where emplacement ="' . $lieux[$i] . '" and dateDon = "' . $date . '"
            ');
            while ($row = $req->fetch())
            {
                array_push($id_don_lieux, $row['idD']);
            }
            for ($j = 0; $j < count($id_don_lieux); $j++)
            {
                echo ' <a href="..\Afficher_don.php?id=' . $id_don_lieux[$j] . '">Don ' . $id_don_lieux[$j] . '</a>
                <br/>';
            }
            $id_don_lieux = []; //reset le tableau
            echo '</p></div></details>';
        }
        ?>

    </p>





    <?php elseif(!in_array($date,$datesTab)): ?> <!-- si l'id du lieu envoyé ne correspond pas a une date dans la bd -->

        <h1> Aucun don n'a été fait à cette date</h1>
        <p><a href="<?php echo $_SERVER['HTTP_REFERER']; ?>">Revenir à la page précédente</a></p>

    <?php endif; ?>
</body>
</html>