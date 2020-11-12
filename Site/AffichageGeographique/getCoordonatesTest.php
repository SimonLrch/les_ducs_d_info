<?php
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
	
	$data = GmapApi::geocodeAddress('Paris');
	//on affiche les différente infos
	echo '<ul>';
	foreach ($data as $key=>$value){
		echo '<li>'.$key.' : '.$value.'</li>';
	}
	echo '</ul>';
?>