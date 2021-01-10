<?php
	if(isset($_POST['Enregistrer-profil']))
	{
		require_once('../include/dbConfig.php');
		$pdo = getPDO('PtutS3_connexion');
		$stmt = $pdo->prepare('SELECT * FROM compte WHERE nom = :nom AND prenom = :prenom AND email = :email and TypeCompte = :type');
		$stmt->bindValue(':nom',$_SESSION['nom'],PDO::PARAM_STR);
		$stmt->bindValue(':prenom',$_SESSION['prenom'],PDO::PARAM_STR);
		$stmt->bindValue(':email',$_SESSION['email'],PDO::PARAM_STR);
		$stmt->bindValue(':type',$_SESSION['type'],PDO::PARAM_STR);
		$stmt->execute();
		
		$data = $stmt->fetch();
		if(password_verify($_POST['ancien_mdp'],$data['HashPassword']))
		{
			
		}
		else
		{
			$err = "Votre mot de passe est incorrect !";
		}
		
	}
?>