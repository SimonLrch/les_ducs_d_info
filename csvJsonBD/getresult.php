<?php

function get_one_result($query)
{
	//Préparer la requête préparée ;
	$stmt = $query["pdo"]->prepare($query["sql"]);
	//Exécuter la requêter préparée avec la liste d'attributs
	$stmt->execute(array($query["attributes"]));
	
	//Obtenir le résultat
	while ($row = $stmt->fetch())
	{
		$output = $row['Res'];
	}
	
	//Fermer la connexion
	$stmt->closeCursor();
	
	//Renvoyer le résultat
	return $output;
}

?>