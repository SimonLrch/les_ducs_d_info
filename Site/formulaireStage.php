<?php
 include("getresult.php");
    // On commence par récupérer les champs
    //Donateurs
    if(isset($_POST['donateur-name']))      $donateur_name=$_POST['donateur-name'];
    else      $donateur_name= null; //Exception
 
    if(isset($_POST['donateur-statut']))      $donateur_statut=$_POST['donateur-statut'];
    else      $donateur_statut= null;//Exception

    //Bénéficiaire
    if(isset($_POST['beneficiaire-name']))      $beneficiaire_name=$_POST['beneficiaire-name'];
    else      $beneficiaire_name= null; //Exception
 
    if(isset($_POST['beneficiaire-statut']))      $beneficiaire_statut=$_POST['beneficiaire-statut'];
    else      $beneficiaire_statut= null;//Exception

        //Intermédiaire
    if(isset($_POST['intermediaire-name']))      $intermediaire_name=$_POST['intermediaire-name'];
    else      $intermediaire_name= null; //Exception
 
    if(isset($_POST['intermediaire-statut']))      $intermediaire_statut=$_POST['intermediaire-statut'];
    else      $intermediaire_statut= null;//Exception
 
    //Type de Don
    if(isset($_POST['details-typeDon']))      $details_typeDon=$_POST['details-typeDon'];
    else      $details_typeDon= null;
	
    //Date
    if(isset($_POST['details-date']))      $details_date=$_POST['details-date'];
    else      $details_date= null;
	
    //Lieu
    if(isset($_POST['details-lieu']))      $details_lieu=$_POST['details-lieu'];
    else      $details_lieu= null;
	
    //Formes
    if(isset($_POST['details-formes']))      $details_formes=$_POST['details-formes'];
    else      $details_formes= null;
	
    //Poids
    if(isset($_POST['details-poids']))      $details_poids=$_POST['details-poids'];
    else      $details_poids= null;
	
    //Prix
    if(isset($_POST['details-prix']))      $details_prix=$_POST['details-prix'];
    else      $details_prix= null;
	
    //Sources
    if(isset($_POST['details-sources']))      $details_sources=$_POST['details-sources'];
    else      $details_sources= null;

    //Natures
    if(isset($_POST['details-natures']))      $details_natures=$_POST['details-natures'];
    else      $details_natures= null;
	
	// On vérifie si les champs sont vides ( autres que intermédiaire et poids)
	if(empty($donateur_name) OR empty($donateur_statut) OR empty($beneficiaire_name) OR empty($beneficiaire_statut) OR empty($details_typeDon) OR empty($details_date) OR empty($details_lieu) OR empty($details_formes) OR empty($details_prix) OR empty($details_sources) OR empty($details_natures))
	{
		echo '<font color="red">Attention, seul les champs intermédiaire et poids peuvent rester vide !</font>';
	}
	else
	{
		// connexion à la base
		$db = mysqli_connect('localhost', 'root', 'root') or die('Erreur de connexion ' . mysqli_error());

		// sélection de la base
		mysqli_select_db($db,'PtutS3') or die('Erreur de selection ' . mysqli_error());

		// Vérification de l'existence ou non d'une valeurs dans la BDD
		// Vérification Statut (donateur) :
		$sql = "SELECT Count(*) from statut WHERE fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$donateur_statut);
		$stmt->execute();
		
		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création du statut dans la BDD
			$sql = "INSERT INTO Statut VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$donateur_statut);
			$stmt->execute();
			
		
		}
		
		// Vérification Statut (bénéficiaire) :
		$sql = "SELECT Count(*) from statut WHERE fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$beneficiaire_statut);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création du statut dans la BDD
			$sql = "INSERT INTO statut VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$beneficiaire_statut);
			$stmt->execute();
		}
		
		// Vérification Statut (intermédiaire) :
		$sql = "SELECT Count(*) from statut WHERE fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$intermediaire_statut);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0){
			//Création du statut dans la BDD
			$sql = "INSERT INTO Statut VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$intermediaire_statut);
			$stmt->execute();
		}
		
		// Vérification Personne (donateur) :
		$sql = "SELECT Count(*) from personne WHERE nom = ? AND fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$donateur_name, $donateur_statut);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création de la personne dans la BDD
			$sql = "INSERT INTO personne(nom,fonction) VALUES (?, ?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('ss',$donateur_name,$donateur_statut);
			$stmt->execute();
		}
		
		$sql = "SELECT idPersonne from personne WHERE nom = ? AND fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$donateur_name, $donateur_statut);
		$stmt->execute();
		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$idDonateur =  $row["idPersonne"];
		}
		
		// Vérification Personne (bénéficiaire) :
		$sql = "SELECT Count(*) from personne WHERE nom = ? AND fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$beneficiaire_name, $beneficiaire_statut);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création de la personne dans la BDD
			$sql = "INSERT INTO personne(nom,fonction) VALUES (?,?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('ss',$beneficiaire_name, $beneficiaire_statut);
			$stmt->execute();	
		}
		$sql = "SELECT IdPersonne from personne WHERE nom = ? AND fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$beneficiaire_name, $beneficiaire_statut);
		$stmt->execute();
		
		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$idBeneficiaire =  $row["IdPersonne"];
		}
		
		// Vérification Calendrier :
		$sql = "SELECT Count(*) from calendrier WHERE dateDon = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$details_date);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création de la date dans la BDD
			$sql = "INSERT INTO calendrier VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$details_date);
			$stmt->execute();
		}
		
		// Vérification Lieu :
		$sql = "SELECT Count(*) from lieu WHERE emplacement = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$details_lieu);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création du lieu dans la BDD
			$sql = "INSERT INTO lieu VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$details_lieu);
			$stmt->execute();		
		}
	
		// Vérification TypeDon :
		$sql = "SELECT Count(*) from typeDon WHERE typeDon = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$details_typeDon);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) {
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création du type de don dans la BDD
			$sql = "INSERT INTO typeDon VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$details_typeDon);
			$stmt->execute();
		}
		
		// Vérification Poids :
		$sql = "SELECT Count(*) from poids WHERE masse = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$details_Poids);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création du type de don dans la BDD
			$sql = "INSERT INTO poids VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$details_poids);
			$stmt->execute();
		}
		
		// Vérification SourceDon :
		$sql = "SELECT Count(*) from sourceDon WHERE recherche = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('s',$details_sources);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création de la source du don dans la BDD
			$sql = "INSERT INTO sourceDon VALUES (?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('s',$details_sources);
			$stmt->execute();
		}
		
		// Vérification Don :
		$sql = "INSERT INTO don(forme, nature, prix, typeDon, dateDon, idAuteur, idBeneficiaire, emplacement, sourceDon, masse) VALUES (?,?,?,?,?,?,?,?,?,?)";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('sssssiisss',$details_formes, $details_natures, $details_prix, $details_typeDon, $details_date, $idDonateur, $idBeneficiaire, $details_lieu, $details_sources, $details_poids);
		$stmt->execute();
		
		$sqlidDon = "SELECT idDon FROM don WHERE forme = ? AND nature = ? AND prix = ? AND typeDon = ? AND dateDon = ? AND idAuteur = ? AND idBeneficiaire = ? AND emplacement = ? AND sourceDon = ? AND masse = ?";
		$stmt = $db->prepare($sqlidDon);
		$stmt->bind_param('sssssiisss',$details_formes, $details_natures, $details_prix, $details_typeDon, $details_date, $idDonateur, $idBeneficiaire, $details_lieu, $details_sources, $details_poids);
		$stmt->execute();
		
		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$idDon =  $row["idDon"];
		}
		
		// Vérification Personne (intermédiaire) :
		$sql = "SELECT Count(*) from personne WHERE nom = ? AND fonction = ?";
		$stmt = $db->prepare($sql);
		$stmt->bind_param('ss',$intermediaire_name, $intermediaire_statut);
		$stmt->execute();

		$result = get_result($stmt);
		while ($row = array_shift($result)) 
		{
			$output =  $row['Count(*)'];
		}
		// S'il n'existe pas déjà 
		if($output == 0)
		{
			//Création de la personne dans la BDD
			$sql = "INSERT INTO personne(nom,fonction) VALUES (?,?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('ss',$intermediaire_name,$intermediaire_statut);
			$stmt->execute();
			//Création de l'intermédiaire dans la BDD
			$sql = "SELECT IdPersonne from personne WHERE nom = ? AND fonction = ?";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('ss',$intermediaire_name, $intermediaire_statut);
			$stmt->execute();
			
			$result = get_result($stmt);
			while ($row = array_shift($result)) 
			{
				$idIntermediaire =  $row['IdPersonne'];
			}
		// S'il n'existe pas déjà 
		
			
			$sql = "INSERT INTO intermediaire(idDon,idIntermediaire) VALUES (?,?)";
			$stmt = $db->prepare($sql);
			$stmt->bind_param('ii',$idDon,$idIntermediaire);
			$stmt->execute();
		}

		// on affiche le résultat pour le visiteur
		echo 'Les données ont bien été mises à jours';

		mysqli_close($db);  // on ferme la connexion
	}

?>