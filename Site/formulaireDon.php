<?php
session_start();

	include("getresult.php");
	// On commence par récupérer les champs
	//Attribution des variables :
	//des personnes
	$donateur_name = $donateur_statut = $beneficiaire_name = $beneficiaire_statut = null;
	$intermediaire_name = $intermediaire_statut = "Aucune mention d'intermédiaire";
	//des détails
	$details_sources = "Aucune mention de Source";
	$details_poids = "Aucune mention de Poids";
	$details_formes = "Aucune mention de Forme";
	$details_natures = "Aucune mention de Nature";
	$details_prix = "Aucune mention de Prix";
	$details_lieu = "Aucune mention de Lieu";
	//Donateurs

	if(isset($_POST['donateur-name']) AND $_POST['donateur-name'] != '')
	{
		$donateur_name=$_POST['donateur-name'];
	}
	if(isset($_POST['donateur-statut']) AND $_POST['donateur-statut'])      
	{
		$donateur_statut=$_POST['donateur-statut'];
	}
	//Bénéficiaire
	if(isset($_POST['beneficiaire-name']))     
	{
		$beneficiaire_name=$_POST['beneficiaire-name'];
	}
	if(isset($_POST['beneficiaire-statut']))      
	{
		$beneficiaire_statut=$_POST['beneficiaire-statut'];
	}

	//Intermédiaire
	if(isset($_POST['intermediaire-name'])  AND $_POST['intermediaire-name'] != '')
	{
		$intermediaire_name=$_POST['intermediaire-name'];
	}
	else
	{
		$idIntermediaire = -1;
	}
	if(isset($_POST['intermediaire-statut']) AND $_POST['intermediaire-statut'] != '')
	{
		$intermediaire_statut=$_POST['intermediaire-statut'];
		$Liste_Personne["Intermédiaire"] = array($intermediaire_name,$intermediaire_statut);

	}

	//Formes
	if(isset($_POST['details-formes']) AND $_POST['details-formes'] != '')
	{
		$details_formes=$_POST['details-formes'];

	}
	//Natures
	if(isset($_POST['details-natures']) AND $_POST['details-natures'] != '')
	{
		$details_natures=$_POST['details-natures'];
	}
	//Prix
	if(isset($_POST['details-prix']) AND $_POST['details-prix'] != '')
	{
		$details_prix=$_POST['details-prix'];
	}
	//Type de Don
	if(isset($_POST['details-typeDon']))
	{
		$details_typeDon=$_POST['details-typeDon'];
	}
	//Date
	if(isset($_POST['details-date']))
	{
		$details_date=$_POST['details-date'];
	}
	//Sources
	if(isset($_POST['details-sources']) AND $_POST['details-sources'] != '')
	{
		$details_sources=$_POST['details-sources'];
	}
	//Poids
	if(isset($_POST['details-poids']) AND $_POST['details-poids'] != '')
	{
		$details_poids=$_POST['details-poids'];
	}
	//Lieu
	if(isset($_POST['details-lieu']) AND $_POST['details-lieu'] != '') 
	{
		$details_lieu=$_POST['details-lieu'];
	}
	//Ajout des valeurs dans les listes nécessaires au bon fonctionnement de la partie suivante
	$Liste_Personne["Donateur"] = array($donateur_name,$donateur_statut);
	$Liste_Personne["Bénéficiaire"] = array($beneficiaire_name,$beneficiaire_statut);
	$Info_don["A"] = $details_formes;
	$Info_don["B"] = $details_natures;
	$Info_don["C"] = $details_prix;
	$Info_don["D"] = $details_typeDon;
	$Info_don["E"] = $details_date;
	$Info_don["I"] = $details_sources;
	$Info_don["J"] = $details_poids;
	$Info_don["H"] = $details_lieu;
	
	/*$Liste_Autres[$details_typeDon]=["TypeDon","TypeDon"];
	$Liste_Autres[$details_date]=["Calendrier","DateDon"];
	$Liste_Autres[$details_sources]=["sourceDon","recherche"];
	$Liste_Autres[$details_poids]=["Poids","Masse"];
	$Liste_Autres[$details_lieu]=["Lieu","Emplacement"];*/
	$Liste_Autres = array();
	array_push($Liste_Autres, array($details_typeDon, "TypeDon", "TypeDon"));
	array_push($Liste_Autres, array($details_date, "Calendrier", "DateDon"));
	array_push($Liste_Autres, array($details_sources, "sourceDon", "recherche"));
	array_push($Liste_Autres, array($details_poids, "Poids", "Masse"));
	array_push($Liste_Autres, array($details_lieu, "Lieu", "Emplacement"));
/*
	//Si nécessaire pour faire des test
	 echo 'Donateur name : '.$donateur_name .'<br>';
	 echo 'Donateur statut : '.$donateur_statut .'<br>';
	 echo 'Beneficiaire name : '.$beneficiaire_name .'<br>';
	 echo 'Beneficiaire statut : '.$beneficiaire_statut  .'<br>';
	 echo 'Intermediaire name : '.$intermediaire_name .'<br>';
	 echo 'Intermedaire statut : '.$intermediaire_statut .'<br>';
	 echo 'typeDon : '.$details_typeDon .'<br>';
	 echo 'Date : '.$details_date .'<br>';
	 echo 'Source : '.$details_sources .'<br>';
	 echo 'Poids : '.$details_poids .'<br>';
	 echo 'Forme : '.$details_formes .'<br>';
	 echo 'Natures : '.$details_natures .'<br>';
	 echo 'Prix : '.$details_prix .'<br>';
	 echo 'Lieu : '.$details_lieu .'<br>';
	 print_r($Liste_Personne);
	 echo '<br>';
	 print_r($Info_don);
	 echo '<br>';
	 print_r($Liste_Autres);
	 echo '<br>';
*/
	// On vérifie si les champs sont vides ( autres que intermédiaire et poids)
	if(empty($donateur_name) OR empty($donateur_statut) OR empty($beneficiaire_name) OR empty($beneficiaire_statut) OR empty($details_typeDon) OR empty($details_date) OR empty($details_lieu) OR empty($details_formes) OR empty($details_prix) OR empty($details_sources) OR empty($details_natures))
	{
		$_SESSION['ajout'] = '<font color="red">Attention, seuls les champs intermédiaire et poids peuvent rester vide !</font>';
	}
	else
	{
		require_once("include/dbConfig.php");
		$pdo = getPDO("PtutS3");
		$pdo->beginTransaction();
		//----- Vérification de l'existence ou non des valeurs dans la BDD-----
		try {
			foreach($Liste_Personne as $Niveau => $info)
			{
				//---Vérification des statuts des personnes---
				//Création d'un KeyArray composé de 
				$sql_statuts = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$pdo,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from statut WHERE fonction = ?",
					//L'attribut statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>array($info[1])
				];
				
				// Si le statut n'existe pas déjà dans la BDD : la fonction renvoie 0
				if(get_one_result($sql_statuts) == 0)
				{
					//Création du statut dans la BDD
					$stmt = $pdo->prepare("INSERT INTO Statut VALUES (?)");
					$stmt->execute($sql_statuts["attributes"]);	
					$stmt->closeCursor();
				}
				
				//---Vérification des personnes---
				//Création d'un KeyArray composé de 
				$sql_personnes = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$pdo,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from personne WHERE nom = ? AND fonction = ?",
					//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>$info
				];
				
				//Si la personne n'existe pas dans la BDD : la fonction renvoie 0
				if(get_one_result($sql_personnes) == 0)
				{
					//Création de la personne dans la BDD
					$stmt = $pdo->prepare("INSERT INTO personne(nom,fonction) VALUES (?, ?)");
					$stmt->execute($sql_personnes["attributes"]);		
					$stmt->closeCursor();
				}
				
				//Après que la personne soit créer ou non. On récupère alors son ID pour la suite des requêtes.
				$sql_id_personnes = [
				"pdo" =>$pdo,
				"sql"=>"SELECT idPersonne as Res from personne WHERE nom = ? AND fonction = ?",
				"attributes"=>$info
				];
				//On ajoute l'Id la liste d'information par rapport au don

				//L'id de l'auteur à l'emplacement F
				if($Niveau == "Donateur")
				{
					$Info_don["F"] = get_one_result($sql_id_personnes);
					
				}
				//L'id du bénéficiaire à l'emplacement G
				else if ($Niveau == "Bénéficiaire")
				{
					$Info_don["G"] = get_one_result($sql_id_personnes);
				}
				//L'id de l'intermediaire
				else if ($Niveau == "Intermédiaire")
				{
					$idIntermediaire = get_one_result($sql_id_personnes);
				}
			}



			//Après l'ajout des deux id Auteur et bénéficiaires dans la liste, il faut la mettre maintenant dans l'ordre des éléments dans la BDD, arrangé en ordre alphabétique pour la clé
			ksort($Info_don);
			//---Vérification des autres données---
							
			foreach($Liste_Autres as $value => $TableAndColumn)	
			{
				echo "<pre>";
				echo var_dump($TableAndColumn);
				echo "</pre>";
				//Création d'un Array Key composé de 
				$sql_Autres = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$pdo,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from $TableAndColumn[1] WHERE $TableAndColumn[2] = ?",
					//L'attribut $value changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>array($TableAndColumn[0])
				];
				//Si l'information n'existe pas dans la BDD : la fonction renvoie 0
				if(get_one_result($sql_Autres) == 0)
				{
					//Ajout de la nouvelle information dans la Table correspondante
					$stmt = $pdo->prepare("INSERT INTO $TableAndColumn[1]($TableAndColumn[2]) VALUES (?)");
					$stmt->execute($sql_Autres["attributes"]);
					$stmt->closeCursor();
				}
			}
				
			//Récupération de l'idPoids
			$sql_id_Poids= [
				"pdo"=>$pdo,
				"sql"=>"SELECT idPoids AS Res FROM Poids WHERE masse = ?",
				"attributes"=> array($Info_don['J']),
			];
			//On change le details_poids en idPoids
			echo $Info_don['J'].'<br>';
			echo get_one_result($sql_id_Poids).'<br>';
			$Info_don['J'] = get_one_result($sql_id_Poids);
			echo $Info_don['J'].'<br>';

			// Ajout du Don dans la base de données:
			$sql = "INSERT INTO don(forme, nature, prix, typeDon, dateDon, idAuteur, idBeneficiaire, emplacement, sourceDon, idPoids) VALUES (?,?,?,?,?,?,?,?,?,?)";
			$stmt = $pdo->prepare($sql);
			$stmt->execute(array_values($Info_don));
			$stmt->closeCursor();
			
			//S'il existe un intermédiaire pour ce don : 
			if($idIntermediaire!=-1)
			{
				// Récupération de l'ID du don nouvellement ajouté. Afin d'ajouter à la bdd l'intermédiaire
				$sql_IdDon = 
				[
				"pdo" => $pdo,
				"sql" => "SELECT idDon as Res FROM don WHERE forme = ? AND nature = ? AND prix = ? AND typeDon = ? AND dateDon = ? AND idAuteur = ? AND idBeneficiaire = ? AND emplacement = ? AND sourceDon = ? AND idPoids = ?",
				"attributes" => (array_values($Info_don))
				];
				$idDon = get_one_result($sql_IdDon);
					
				//Ajout de l'intermediaire dans la base de données :	
				$sql = "INSERT INTO intermediaire(idDon,idIntermediaire) VALUES (?,?)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($idDon,$idIntermediaire));
				$stmt->closeCursor();
			}
			
		}
		catch(PDOException $e)
		{
			$pdo->rollBack();
			echo $e->getMessage();
			throw $e;
		}
		catch(Exception $e)
		{
			echo $e->getMessage();
		}	
		$pdo ->commit();
		// On affiche le résultat pour le visiteur
		$_SESSION['ajout']=	'Ajout du don terminé';	
	}

	

	header('Location:Finformulaire.php');

//AFFICHAGE RETOUR
/*	echo '
<!DOCTYPE html>
	<html lang="fr"> 

		<body>
			<br/>
			<a href="./donation-submission.php">Revenir au Formulaire</a>
		</body>
	</html>
'; */

?>              