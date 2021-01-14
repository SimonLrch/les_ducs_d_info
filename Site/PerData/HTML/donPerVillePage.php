<!DOCTYPE html>
<html lang="fr">
	<header>
    	<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
		<title>Restitution à : <?php echo deleteAntiSlash($emplacement); ?></title>  <!-- variables qui viennent d'un fichier php -->
	</header>
	<body>
		<?php include'../include/mainHeader.php' ?>
		<main class="container-main">
			<section class="inner-box section-hero">
				<span class="titreSection">Restitution par Lieu</span>
			</section>
			<section class="inner-box">
				<div class="restitutionDon">
					<?php if(in_array($emplacement,$lieux)): ?>
						<p><a href="../AffichageGeographique/DonGeographique.php">Voir la carte des donations</a>  </p>
						<h1><?php echo 'Dons fait à '. deleteAntiSlash($emplacement).''; ?></h1>
						<p>
							<br/>Nombre de dons : <?php echo ' '.$nombre_don.''; ?>
						</p>
						<details>
							<summary class="Eye-Tree-titre1">Personnes ayant donné à <?php echo ''.deleteAntiSlash($emplacement).''; ?>: </summary><p>
								<?php
								for($i =0; $i < count($idAuteurs);$i++)
								{

									$emplacementQuote = replaceDoubleQuote($emplacement);

									echo '<details>
								<summary class="Eye-Tree-titre2"><a class="restitutionDon-a" href="donPerBeneficiaire.php?id=' . $idAuteurs[$i] . '">' . $nomAuteurs[$i] . ' :  ' . $fonctionAuteurs[$i] . '</a> ( ' . $nb_don_auteurs[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
									//Requête pour avoir les dons par donneurs:
									$req = $pdo->query('SELECT idDon as idD FROM don where idAuteur =' . $idAuteurs[$i] . ' and emplacement = "' . $emplacementQuote . '"');
									while ($row = $req->fetch())
									{
										array_push($id_don_auteurs, $row['idD']);
									}
									for ($j = 0; $j < count($id_don_auteurs); $j++)
									{
										echo ' <a class="restitutionDon-a" href="..\Afficher_don.php?id=' . $id_don_auteurs[$j] . '">Don ' . $id_don_auteurs[$j] . '</a>
									<br/>';
									}
									$id_don_auteurs = []; //reset le tableau
									echo '</p></div></details>';
								}
								?>

							</p>
						</details>
						<details>
							<summary class="Eye-Tree-titre1">Personnes ayant reçu des dons à <?php echo ''.deleteAntiSlash($emplacement).''; ?>: </summary><p>

								<?php
								for($i =0; $i < count($idBeneficiaires);$i++)
								{

									$emplacementQuote = replaceDoubleQuote($emplacement); //remplacement de caractère pouvais géner


									echo '<details><summary class="Eye-Tree-titre2"><a class="restitutionDon-a" href="donPerBeneficiaire.php?id=' . $idBeneficiaires[$i] . '">' . $nomBeneficiaires[$i] . ' :  ' . $fonctionBeneficiaires[$i] . '</a> ( ' . $nb_don_beneficiaires[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
									//Requête pour avoir les dons par donneurs:
									$req = $pdo->query('SELECT idDon as idD FROM don where idBeneficiaire =' . $idBeneficiaires[$i] . ' and emplacement = "' . $emplacementQuote . '"');
									while ($row = $req->fetch())
									{
										array_push($id_don_beneficiaires, $row['idD']);
									}
									for ($j = 0; $j < count($id_don_beneficiaires); $j++)
									{
										echo ' <a class="restitutionDon-a" href="..\Afficher_don.php?id=' . $id_don_beneficiaires[$j] . '">Don ' . $id_don_beneficiaires[$j] . '</a>
									<br/>';
									}
									$id_don_beneficiaires = []; //reset le tableau
									echo '</p></div></details>';
								}
								?>

							</p>
						</details>
						<details>
							<summary class="Eye-Tree-titre1">Dates où il y a eu des dons à <?php echo ''.deleteAntiSlash($emplacement).''; ?>: </summary><p>

								<?php
								for($i =0; $i < count($dates);$i++)
								{

									$emplacementQuote = replaceDoubleQuote($emplacement); //remplacement de caractère pouvais géner


									echo '<details><summary class="Eye-Tree-titre2"><a class="restitutionDon-a" href="donPerDate.php?date=' . $dates[$i] . '">' . $dates[$i] . ' </a> ( ' . $nb_don_dates[$i] . ' )</summary><div class="Eye-Tree-content" ><p>';
									//Requête pour avoir les dons par donneurs:
									$req = $pdo->query('SELECT idDon as idD FROM don where dateDon ="' . $dates[$i] . '" and emplacement = "' . $emplacementQuote . '"
								');
									while ($row = $req->fetch())
									{
										array_push($id_don_dates, $row['idD']);
									}
									for ($j = 0; $j < count($id_don_dates); $j++)
									{
										echo ' <a class="restitutionDon-a" href="..\Afficher_don.php?id=' . $id_don_dates[$j] . '">Don ' . $id_don_dates[$j] . '</a>
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
				</section>
			</div>
		</main>
		<?php include'../include/mainFooter.php' ?>
	</body>
</html>