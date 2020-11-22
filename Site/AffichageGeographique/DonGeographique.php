<!DOCTYPE html>
<html>
	<?php
		//Connexion bd
		$db = new PDO('mysql:host=localhost; dbname=PtutS3', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		$db_villes = new PDO('mysql:host=localhost; dbname=PtutS3_villes', 'root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
		
		//Création des variables
		$nomVille = [];
		$sourceVille = [];
		$lat = [];
		$longi = [];
		
		
		$villes = [];
		$latitude = [];
		$longitude = [];
		
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
		
		for($i = 0; $i < count($nomVille); $i++){
				for($j = 0; $j < count($sourceVille); $j++){
					if($nomVille[$i] == $sourceVille[$j]){
							$villes[$i] = $nomVille[$i];
							$latitude[$i] = $lat[$j];
							$ongitude[$i] = $longi[$j];
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
	<title>Carte</title>
    </head>
    <body>
		<?php include'../include/mainHeader.php' ?>
		<section class="inner-box section-hero">
            <span>Restitution Géographique</span>
        </section>
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
	<div id="map">
	    <!-- Ici s'affichera la carte -->
	</div>
        <!-- Fichiers Javascript -->
        <script src="https://unpkg.com/leaflet@1.3.1/dist/leaflet.js" integrity="sha512-/Nsx9X4HebavoBvEBuyp3I7od5tA0UzAxs+j83KgC8PU0kgB4XiK4Lfe4y4cgBtaRJQEIFCW+oC506aPT2L1zw==" crossorigin=""></script>
        <script type='text/javascript' src='https://unpkg.com/leaflet.markercluster@1.3.0/dist/leaflet.markercluster.js'></script>
	<script type="text/javascript">
	    // On initialise la latitude et la longitude de Paris (centre de la carte)
	    var lat = 48.852969;
	    var lon = 2.349903;
	    var macarte = null;
        var markerClusters; // Servira à stocker les groupes de marqueurs
        // Nous initialisons une liste de marqueurs
		var villes;
		for (int i = 0; i < nom_villes.length; i++){
			villes += {
                nom_villes[i] : { "lat": 48.852969, "lon": 2.349903 }
            };
		}
		
	    // Fonction d'initialisation de la carte
        function initMap() {
			var markers = []; // Nous initialisons la liste des marqueurs
			// Nous définissons le dossier qui contiendra les marqueurs
			var iconBase = 'marker.png';
			// Créer l'objet "macarte" et l'insèrer dans l'élément HTML qui a l'ID "map"
			macarte = L.map('map').setView([lat, lon], 11);
			markerClusters = L.markerClusterGroup(); // Nous initialisons les groupes de marqueurs
			// Leaflet ne récupère pas les cartes (tiles) sur un serveur par défaut. Nous devons lui préciser où nous souhaitons les récupérer. Ici, openstreetmap.fr
			L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png', {
				// Il est toujours bien de laisser le lien vers la source des données
				attribution: 'données © OpenStreetMap/ODbL - rendu OSM France',
				minZoom: 1,
				maxZoom: 20
			}).addTo(macarte);
			// Nous parcourons la liste des villes
			for (ville in villes) {
				// Nous définissons l'icône à utiliser pour le marqueur, sa taille affichée (iconSize), sa position (iconAnchor) et le décalage de son ancrage (popupAnchor)
				var myIcon = L.icon({
					iconUrl: iconBase,
					iconSize: [50, 50],
					iconAnchor: [25, 50],
					popupAnchor: [-3, -76],
				});
				var marker = L.marker([villes[ville].lat, villes[ville].lon], { icon: myIcon }); // pas de addTo(macarte), l'affichage sera géré par la bibliothèque des clusters		
				var id = document.getElementById("idDon").innerHTML;
				marker.bindPopup(ville + " " + id[0]);
				markers.push(marker); // Nous ajoutons le marqueur à la liste des marqueurs
				markerClusters.addLayer(marker); // Nous ajoutons le marqueur aux groupes
			}
			var group = new L.featureGroup(markers); // Nous créons le groupe des marqueurs pour adapter le zoom
			macarte.fitBounds(group.getBounds().pad(0.5)); // Nous demandons à ce que tous les marqueurs soient visibles, et ajoutons un padding (pad(0.5)) pour que les marqueurs ne soient pas coupés
			macarte.addLayer(markerClusters);
		}
	    window.onload = function(){
		// Fonction d'initialisation qui s'exécute lorsque le DOM est chargé
		initMap(); 
	    };
	</script>
	<script>
		var id = <?php echo json_encode($id); ?>;
		var nom_villes = <?php echo json_encode($villes); ?>;
		var latitude = <?php echo json_encode($latitude); ?>;
		var longitude = <?php echo json_encode($longitude); ?>;
	</script>
    </body>
</html>
