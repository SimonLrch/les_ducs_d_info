<?php
 include("getresult.php");
    // On commence par récupérer les champs
	//Attribution des variables :
	//des personnes
	$donateur_name = $donateur_statut = $beneficiaire_name = $beneficiaire_statut = null;
	$intermediaire_name = $intermediaire_statut = "Aucune mention";
	//des détails
	$details_formes = $details_natures = $details_prix = $details_typeDon = $details_date = $details_sources = $details_lieu = null;
	$details_poids = "Aucune mention";

	//Donateurs
    if(isset($_POST['donateur-name']))
	{
		$donateur_name=$_POST['donateur-name'];
	}
    if(isset($_POST['donateur-statut']))      
	{
		$donateur_statut=$_POST['donateur-statut'];
		$Liste_Personne[$donateur_name] = $donateur_statut;
	}

    //Bénéficiaire
    if(isset($_POST['beneficiaire-name']))     
	{
		$beneficiaire_name=$_POST['beneficiaire-name'];
	}
    if(isset($_POST['beneficiaire-statut']))      
	{
		$beneficiaire_statut=$_POST['beneficiaire-statut'];
		$Liste_Personne[$beneficiaire_name] = $beneficiaire_statut;
	}

    //Intermédiaire
    if(isset($_POST['intermediaire-name']))
	{
		$intermediaire_name=$_POST['intermediaire-name'];
	}
    else
	{
		$idIntermediaire = -1;
	}
    if(isset($_POST['intermediaire-statut']))
	{
		$intermediaire_statut=$_POST['intermediaire-statut'];
		$Liste_Personne[$intermediaire_name] = $intermediaire_statut;
	}

    //Formes
    if(isset($_POST['details-formes']))
	{
		$details_formes=$_POST['details-formes'];
		$Info_don["A"] = $details_formes;

	}
	//Natures
    if(isset($_POST['details-natures']))
	{
		$details_natures=$_POST['details-natures'];
		$Info_don["B"] = $details_natures;
	}
	//Prix
    if(isset($_POST['details-prix']))
	{
		$details_prix=$_POST['details-prix'];
		$Info_don["C"] = $details_prix;
	}
	//Type de Don
    if(isset($_POST['details-typeDon']))
	{
		$details_typeDon=$_POST['details-typeDon'];
		$Liste_Autres[$details_typeDon]=["TypeDon","TypeDon"];
		$Info_don["D"] = $details_typeDon;
	}
    //Date
    if(isset($_POST['details-date']))
	{
		$details_date=$_POST['details-date'];
		$Liste_Autres[$details_date]=["Calendrier","DateDon"];
		$Info_don["E"] = $details_date;

	}
	//Sources
    if(isset($_POST['details-sources']))
	{
		$details_sources=$_POST['details-sources'];
		$Liste_Autres[$details_sources]=["sourceDon","recherche"];
		$Info_don["I"] = $details_sources;
	}
    //Poids
    if(isset($_POST['details-poids']))
	{
		$details_poids=$_POST['details-poids'];
		$Liste_Autres[$details_poids]=["Poids","Masse"];
		$Info_don["J"] = $details_poids;
		
	}
	//Lieu
    if(isset($_POST['details-lieu']))
	{
		$details_lieu=$_POST['details-lieu'];
		$Liste_Autres[$details_lieu]=["Lieu","Emplacement"];
		$Info_don["H"] = $details_lieu;
	}
	
	// On vérifie si les champs sont vides ( autres que intermédiaire et poids)
	if(empty($donateur_name) OR empty($donateur_statut) OR empty($beneficiaire_name) OR empty($beneficiaire_statut) OR empty($details_typeDon) OR empty($details_date) OR empty($details_lieu) OR empty($details_formes) OR empty($details_prix) OR empty($details_sources) OR empty($details_natures))
	{
		echo '<font color="red">Attention, seul les champs intermédiaire et poids peuvent rester vide !</font>';
	}
	else
	{
		require_once("include/dbConfig.php");
		$pdo->beginTransaction();
		//----- Vérification de l'existence ou non des valeurs dans la BDD-----
		try {
			foreach($Liste_Personne as $personne => $statut)
			{
				//---Vérification des statuts des personnes---
				//Création d'un KeyArray composé de 
				$sql_statuts = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$pdo,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from statut WHERE fonction = ?",
					//L'attribut statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>array($statut)
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
					"attributes"=>array($personne,$statut)
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
				"attributes"=>array($personne,$statut)
				];
				//On ajoute l'Id la liste d'information par rapport au don
				//L'id de l'auteur à l'emplacement F
				if($personne == $donateur_name)
				{
					$Info_don["F"] = get_one_result($sql_id_personnes);
					
				}
				//L'id du bénéficiaire à l'emplacement G
				else if ($personne == $beneficiaire_name)
				{
					$Info_don["G"] = get_one_result($sql_id_personnes);
				}
				//L'id de l'intermediaire
				else if ($personne == $intermediaire_name)
				{
					$idIntermediaire = get_one_result($sql_id_personnes);
				}
			}
			//Après l'ajout des deux id Auteur et bénéficiaires dans la liste, il faut la mettre maintenant dans l'ordre des éléments dans la BDD, arrangé en ordre alphabétique pour la clé
			ksort($Info_don);
			//---Vérification des autres données---
							
			foreach($Liste_Autres as $value => $TableAndColumn)	
			{
				//Création d'un Array Key composé de 
				$sql_Autres = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$pdo,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from $TableAndColumn[0] WHERE $TableAndColumn[1] = ?",
					//L'attribut $value changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>array($value)
				];
				//Si l'information n'existe pas dans la BDD : la fonction renvoie 0
				if(get_one_result($sql_Autres) == 0)
				{
					//Ajout de la nouvelle information dans la Table correspondante
					$stmt = $pdo->prepare("INSERT INTO $TableAndColumn[0] VALUES (?)");
					$stmt->execute($sql_Autres["attributes"]);
					$stmt->closeCursor();
				}
			}
				
			// Ajout du Don dans la base de données:
			$sql = "INSERT INTO don(forme, nature, prix, typeDon, dateDon, idAuteur, idBeneficiaire, emplacement, sourceDon, masse) VALUES (?,?,?,?,?,?,?,?,?,?)";
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
				"sql" => "SELECT idDon as Res FROM don WHERE forme = ? AND nature = ? AND prix = ? AND typeDon = ? AND dateDon = ? AND idAuteur = ? AND idBeneficiaire = ? AND emplacement = ? AND sourceDon = ? AND masse = ?",
				"attributes" => (array_values($Info_don))
				];
				$idDon = get_one_result($sql_IdDon);
					
				//Ajout de l'intermediaire dans la base de données :	
				$sql = "INSERT INTO intermediaire(idDon,idIntermediaire) VALUES (?,?)";
				$stmt = $pdo->prepare($sql);
				$stmt->execute(array($idDon,$idIntermediaire));
				$stmt->closeCursor();
			}
			
			// On affiche le résultat pour le visiteur
			echo 'Ajout du don terminé';	
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
	}
	
	echo '
<!DOCTYPE html>
<html lang="fr">
    <body>
		<br/>
        <a href="./index.php">Revenir au Formulaire</a>
    </body>
</html>
';

?>              