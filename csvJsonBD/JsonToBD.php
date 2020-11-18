<?php
	include ("getresult.php");
		//Connexion bd
	$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));	
	
	// mettre contenu du fichier dans une variable
	$listfile =array("Animaux.json", "Vetements&draps.json", "Pensions.json", "Joyaux&Vaisselles.json");

	//remplissage de la table typeDon
	$requete=$db->prepare("INSERT IGNORE INTO `typedon`(`typedon`) VALUES (?)");
	$requete->execute(array("Animaux"));
	$requete=$db->prepare("INSERT IGNORE INTO `typedon`(`typedon`) VALUES (?)");
	$requete->execute(array("Vetements&draps"));
	$requete=$db->prepare("INSERT IGNORE INTO `typedon`(`typedon`) VALUES (?)");
	$requete->execute(array("Pensions"));	
	$requete=$db->prepare("INSERT IGNORE INTO `typedon`(`typedon`) VALUES (?)");
	$requete->execute(array("Joyaux&Vaisselles"));
	

	//remplissage de la table statut et de la table personne
	foreach ($listfile as $file ){
		$file = file_get_contents($file);
		$data = preg_replace('/,\s*([\]}])/m', '$1', utf8_encode($file));
		$obj = json_decode( $data, true );

		foreach ($obj as $item){
			foreach($item as $i){
				$requete=$db->prepare("INSERT IGNORE INTO `statut`(`fonction`) VALUES (?)");
	            $requete->execute(array($i['Statut']));

	            $sql_personnes = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$db,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from personne WHERE idPersonne = ?",
					//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>$i['IdBene']
				];
				if(get_one_result($sql_personnes) == 0){
			            $requete=$db->prepare("INSERT INTO `personne`(`idPersonne`,`nom`,`fonction`) VALUES (?,?,?)");
	            		$requete->execute(array($i['IdBene'], $i['Beneficiaire'], $i['Statut']));	
		        }    
	            
			}
		}
	}
	//gestion des intermédiaires et des auteurs pour la table personne
	foreach ($listfile as $file ){
		$file = file_get_contents($file);
		$data = preg_replace('/,\s*([\]}])/m', '$1', utf8_encode($file));
		$obj = json_decode( $data, true );

		foreach ($obj as $item){
			foreach($item as $i){
				$sql_personnes = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$db,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from personne WHERE nom = ?",
					//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>$i['Intermediaire']
				];
				if(get_one_result($sql_personnes) == 0){
			            $requete=$db->prepare("INSERT IGNORE INTO `personne`(`nom`) VALUES (?)");
			            $requete->execute(array( $i['Intermediaire']));	
		        }
		        $sql_personnes = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$db,
					//La requête à préparer
					"sql" => "SELECT Count(*) as Res from personne WHERE nom = ?",
					//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>$i['Auteur']
				];
				if(get_one_result($sql_personnes) == 0){
			            $requete=$db->prepare("INSERT INTO `personne`(`nom`) VALUES (?)");
			            $requete->execute(array( $i['Auteur']));	
		        }            
			}
		}
	}

	//remplissage des autres tables
	foreach ($listfile as $file ){
		if ($file == "Pensions.json"){
			$type = "Pensions";
		}elseif ($file == "Animaux.json") {
			$type = "Animaux";
		}elseif ($file == "Vetements&draps.json") {
			$type = "Vetements&draps";
		}elseif ($file == "Joyaux&Vaisselles.json") {
			$type = "Joyaux&Vaisselles";
		}
		$file = file_get_contents($file);
		$data = preg_replace('/,\s*([\]}])/m', '$1', utf8_encode($file));
		$obj = json_decode( $data, true );

		foreach ($obj as $item){
			foreach($item as $i){

				$requete=$db->prepare("INSERT IGNORE INTO `lieu`(`emplacement`) VALUES (?)");
	            $requete->execute(array($i['Lieu']));

				$requete=$db->prepare("INSERT IGNORE INTO `calendrier`(`dateDon`) VALUES (?)");
	            $requete->execute(array($i['Informations']));

		        $requete=$db->prepare("INSERT IGNORE INTO `poids`(`masse`) VALUES (?)");
		        $requete->execute(array($i['Poids']));

		        $requete=$db->prepare("INSERT IGNORE INTO `sourcedon`(`recherche`) VALUES (?)");
	            $requete->execute(array($i['Sources']));

				$sql_auteur = [
					//Un objet Pdo pour executer les requêtes
					"pdo"=>$db,
					//La requête à préparer
					"sql" => "SELECT idPersonne AS Res FROM personne WHERE nom = ?",
					//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
					"attributes"=>$i['Auteur']
				];            
				$resAuteur = get_one_result($sql_auteur);

				$requete=$db->prepare("INSERT IGNORE INTO `don`(forme, nature, prix, typeDon, dateDon, idAuteur, idBeneficiaire, emplacement, sourceDon, masse) VALUES (?,?,?,?,STR_TO_DATE(?, '%d-%m-%Y'),?,?,?,?,?)");

				$requete->execute(array($i['Formes'],$i['Nature'], $i['Prix'], $type, $i['Informations'], $resAuteur, $i['IdBene'], $i['Lieu'], $i['Sources'], $i['Poids'] ));
				
				if ($i['Intermediaire'] != ""){
					$sql_inter = [
						//Un objet Pdo pour executer les requêtes
						"pdo"=>$db,
						//La requête à préparer
						"sql" => "SELECT idPersonne AS Res FROM personne WHERE nom = ?",
						//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
						"attributes"=>$i['Intermediaire']
					];            
					$resInter = get_one_result($sql_inter);
					$sql_don = [
						//Un objet Pdo pour executer les requêtes
						"pdo"=>$db,
						//La requête à préparer
						"sql" => "SELECT idDon AS Res FROM don WHERE forme = ?",
						//Les attributs personne et  statut changeant à chaque loop. Dans un array car pdo execute avec une liste d'attributs
						"attributes"=>$i['Formes']
					];            
					$resDon = get_one_result($sql_don);
					$requete=$db->prepare("INSERT INTO intermediaire(idDon,idIntermediaire) VALUES (?,?)");
		            $requete->execute(array($resDon,$resInter));
				}
	            
			}
		}
	}
?>

				
		
			
		