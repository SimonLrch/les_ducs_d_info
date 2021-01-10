<?php
	if(isset($_POST['Enregistrer-profil']))
	{
		require_once('../include/dbConfig.php');
		$pdo = getPDO('PtutS3_connexion');
		//Récupération des informations
		$stmt = $pdo->prepare('SELECT * FROM compte WHERE nom = :nom AND prenom = :prenom AND email = :email and TypeCompte = :type');
		$stmt->bindValue(':nom',$_SESSION['nom'],PDO::PARAM_STR);
		$stmt->bindValue(':prenom',$_SESSION['prenom'],PDO::PARAM_STR);
		$stmt->bindValue(':email',$_SESSION['email'],PDO::PARAM_STR);
		$stmt->bindValue(':type',$_SESSION['type'],PDO::PARAM_STR);
		$stmt->execute();
		
		$data = $stmt->fetch();
		//Vérification du mot de passe précédent
		if(password_verify($_POST['ancien_mdp'],$data['HashPassword']))
		{
			//Vérification des autres informations
				//S'il faut changer ses informations, faire la requête nécessaire
			$pdo->beginTransaction();
			try{
				$info = array('Nom','Prenom','Email');
				foreach($info as $colonne)
				{
					if($data[$colonne]!=$_POST[$colonne])
					{
						$stmt = $pdo->prepare('UPDATE compte set '.$colonne.' = :info WHERE email = :email');
						$stmt->bindValue(':info',$_POST[$colonne],PDO::PARAM_STR);
						$stmt->bindValue(':email',$_SESSION['email'],PDO::PARAM_STR);
						$stmt->execute();
						$_SESSION[strtolower	($colonne)]=$_POST[$colonne];
					}
				}

				//Vérification décalé pour le mot de passe
				//Si un nouveau mot de passe a été inscrit
				if(!empty($_POST['nouveau_mdp']))
				{
					//S'il est différent du précédent
					if($_POST['nouveau_mdp'] != $_POST['ancien_mdp'])
					{
						$stmt = $pdo->prepare('UPDATE compte set HashPassword = :pass WHERE email = :email');
						$stmt->bindValue(':pass',password_hash($_POST['nouveau_mdp'],PASSWORD_BCRYPT),PDO::PARAM_STR);
						$stmt->bindValue(':email',$_POST['Email'],PDO::PARAM_STR);
						$stmt->execute();
						$err ="Les modifications ont été faites";
					}
				}
			}
			catch(PDOException $e)
			{
				$pdo->rollBack();
				throw $e;
			}
			catch(Exception $e)
			{
				echo $e->getMessage();
				$err = "une erreur s'est produite";
			}
			$pdo->commit();
		}
		else
		{
			$err = "Votre mot de passe est incorrect !";
		}
		
	}
?>