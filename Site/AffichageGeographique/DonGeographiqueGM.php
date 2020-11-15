<!DOCTYPE html>
<html>
	<?php
		//Connexion bd
		$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
		//Création des variables
		$nomVille = [];
		

		//Requête du lieu
		$req = $db->query('SELECT emplacement FROM Lieu');
		while ($row = $req->fetch())
		{
			array_push($nomVille,$row['emplacement']);
		}
		
			class GmapApi {
				private static $apikey = 'AIzaSyAgPXq6TWkPOvcKicY0opcHSe1m7vpkgnw';

				public static function geocodeAddress($address) {
					//valeurs vide par défaut
					$data = array('lat' => '', 'lng' => '', 'city' => '');
					//on formate l'adresse
					$address = str_replace(" ", "+", $address);
					//on fait l'appel à l'API google map pour géocoder cette adresse
					$json = file_get_contents("https://maps.google.com/maps/api/geocode/json?key=" . self::$apikey . "&address=$address&sensor=false&region=fr");
					$json = json_decode($json);
					//on enregistre les résultats recherchés
					if ($json->status == 'OK' && count($json->results) > 0) {
						$res = $json->results[0];
						//adresse complète et latitude/longitude
						$data['address'] = $res->formatted_address;
						$data['lat'] = $res->geometry->location->lat;
						$data['lng'] = $res->geometry->location->lng;
						foreach ($res->address_components as $component) {
							//ville
							if ($component->types[0] == 'locality') {
								$data['city'] = $component->long_name;
							}
						}
					}
					return $data;
				}
			}
		
	?>
    <head>
        <meta charset="utf-8">
        <!-- Nous chargeons les fichiers CDN de Leaflet. Le CSS AVANT le JS -->
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.1/dist/leaflet.css" integrity="sha512-Rksm5RenBEKSKFjgI3a41vrjkw4EVPlJ3+OiI65vTjIdo9brlAacEuKOiQ5OFh7cOI1bkDwLqdLw3Zg0cRJAAQ==" crossorigin="" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.css" />
        <link rel="stylesheet" type="text/css" href="https://unpkg.com/leaflet.markercluster@1.3.0/dist/MarkerCluster.Default.css" />
		<link rel="stylesheet" type="text/css" href="../style/mainStyle.css"/>
        <style type="text/css" >
	    #map{ /* la carte DOIT avoir une hauteur sinon elle n'apparaît pas */
	        height:400px;
	    }
		</style>
	</style>
	<title>Carte</title>
    </head>
    <body>
		<?php include'../include/mainHeader.php' ?>
		<section class="inner-box section-hero">
            <span>Restitution Géographique</span>
        </section>
		<?php
			// Test avec une seule ville
			$data = GmapApi::geocodeAddress('Paris');
			//on affiche les différente infos
			echo '<ul>';
			foreach ($data as $key=>$value){
				echo '<li>'.$key.' : '.$value.'</li>';
			}
			echo '</ul>';
		?>
	<div id="idDon">
		<?php
			//Requête de l'id du don
			$req = $db->query('SELECT idDon FROM don');
			while ($row = $req->fetch())
			{
				$id = $row['idDon'];
			}
		?>
	</div>
	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d6114218.6905187825!2d3.992019673680408!3d47.1214606229732!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sfr!2sfr!4v1605439269777!5m2!1sfr!2sfr" width="1500" height="600" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
		<!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
	<script type="text/javascript">
	    //A coder si on choisis googleMap
	</script>
	<script>
		var id = <?php echo json_encode($id); ?>;
	</script>
    </body>
</html>
