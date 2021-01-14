<?php
//Création d'une connexion avec la base de données
function getPDO($db_name) {
	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$charset = 'utf8mb4';
	
	//créer le dsn
	$dsn = "mysql:host=$host;dbname=$db_name;charset=$charset";
	$options = [
		PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
		PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
		PDO::ATTR_EMULATE_PREPARES   => false,
	];
	try {
		$pdo = new PDO($dsn, $user, $pass, $options); //créer le pdo
	} catch (\PDOException $e) {
		throw new \PDOException($e->getMessage(), (int)$e->getCode());
	}
	return $pdo;
}
?>