<!DOCTYPE html>
<html>
	<?php
		// Conexion à la base de données
		require_once("../include/dbConfig.php");
		$db = getPDO("PtutS3");
		$db_villes = getPDO("PtutS3_villes");
	
		//Création des variables
		$nomVille = [];
		$sourceVille = [];
		$lat = [];
		$longi = [];
		$idDon = [];
		
		$villes = [];
		$latitude = [];
		$longitude = [];
			
		//Requête récupération des données de la base de données
		//Requête du lieu
		$req = $db->query('SELECT emplacement FROM Lieu');
		while ($row = $req->fetch())
		{
			array_push($nomVille,$row['emplacement']);
		}
		
		//Requête des sources de villes
		$req = $db_villes->query('SELECT nom_commune FROM commune');
		while ($row = $req->fetch())
		{
			array_push($sourceVille,$row['nom_commune']);
		}
		
		$req = $db_villes->query('SELECT latitude FROM commune');
		while ($row = $req->fetch())
		{
			array_push($lat,$row['latitude']);
		}
		
		$req = $db_villes->query('SELECT longitude FROM commune');
		while ($row = $req->fetch())
		{
			array_push($longi,$row['longitude']);
		}
		
		//Si on veut afficher les villes non trouvés
		/*for($i = 0; $i < count($nomVille); $i++){
			for ($j = 0; $j < count($sourceVille); $j++) {
				if($nomVille[$i] == $sourceVille[$j]){
					$latitude[$i] = $lat[$j];
					$longitude[$i] = $longi[$j];
				}
			}
		}
		for ($i = 0; $i < count($nomVille); $i++){
			$villes[$i] = array($nomVille[$i] => array("lat" => $latitude[$i], "lon" => $longitude[$i]));
		}*/
		//Si on veut afficher QUE les villes trouvés
		for($i = 0; $i < count($nomVille); $i++){
			for ($j = 0; $j < count($sourceVille); $j++) {
				if($nomVille[$i] == $sourceVille[$j]){
					array_push($villes, array("ville" => $nomVille[$i], "lat" => $lat[$j], "lon" => $longi[$j]));
				}
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
		<title>Géographique</title>
    </head>
    <body>
		<?php include'../include/mainHeader.php' ?>
		<section class="inner-box section-hero">
            <span>Restitution Géographique</span>
        </section>
	<div id="map">
	    <!-- Ici s'affichera la carte -->
	</div>
		<div id="details"></div>
        <!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
		<script>
			var villes = <?php echo json_encode($villes); ?>;
		</script>
		<script type="text/javascript">
			// On initialise la latitude et la longitude de Paris (centre de la carte)
			var lat = 48.852969;
			var lon = 2.349903;
			var macarte = null;
			
			// Fonction d'initialisation de la carte
			function initMap() {
				var map = L.map('map').setView([lat, lon], 5);
				var marker = [];

				L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
					attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
				}).addTo(map);
				
				for (ville in villes) {
					marker = L.marker([villes[ville].lat, villes[ville].lon]).bindPopup('<p><a href="../PerData/donPerVille.php?emplacement=' + villes[ville].ville +'">'+ villes[ville].ville +'</a><p>');;
					marker.addTo(map);
				}
			}
			
			window.onload = function(){
			// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
			initMap(); 
			};
		</script>
    </body>
</html>
