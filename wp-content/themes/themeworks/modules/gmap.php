<!-- Module Affichage Google Maps -->
<?php

// Convertisseur Adresse vers coordonnées
function getCoordinates(){
	global $themeworks_config;
    $address = $themeworks_config['opt-address_map'];
    $address = str_replace(" ", "+", $address); // replace all the white space with "+" sign to match with google search pattern
    $url = "http://maps.google.com/maps/api/geocode/json?sensor=false&address=$address";
    $response = file_get_contents($url);
    $json = json_decode($response,TRUE); //generate array object from the response from the web
    return ($json['results'][0]['geometry']['location']['lat'].",".$json['results'][0]['geometry']['location']['lng']);
}

function getMapInfos(){
	global $themeworks_config;
	$tw_marker = $themeworks_config['opt-map_marker'];
	$tw_marker_title = $themeworks_config['opt-marker_title'];
	$tw_marker_desc = $themeworks_config['opt-marker_desc'];
	$tw_zoom_map = $themeworks_config['opt-zoom_map'];
	$tw_width_map = $themeworks_config['opt-map_width'];
	$tw_height_map = $themeworks_config['opt-map_height'];

	$mapinfos = array();

	if (!empty($tw_marker)) {
		$mapinfos['marker'] = $tw_marker;
	}
	if (!empty($tw_marker_title)) {
		$mapinfos['title'] = $tw_marker_title;
	}
	if (!empty($tw_marker_desc)) {
		$mapinfos['desc'] = $tw_marker_desc;
	}
	if (!empty($tw_zoom_map)) {
		$mapinfos['zoom'] = $tw_zoom_map;
	}
	if (!empty($tw_width_map)) {
		$mapinfos['width'] = $tw_width_map;
	} else {
		$mapinfos['width'] = '100%';
	}
	if (!empty($tw_height_map)) {
		$mapinfos['height'] = $tw_height_map;
	} else {
		$mapinfos['height'] = '400px';
	}
	return $mapinfos;
}

$tw_coordinates = getCoordinates();
$tw_mapinfos = getMapInfos();
$tw_zoom_map = 13;

?>
<div id="tw_map" style="width:<?php echo $tw_mapinfos['width']; ?>; height:<?php echo $tw_mapinfos['height']; ?>;"></div>
<script>
function initialize() {
	// Google
	var map = new google.maps.Map(document.getElementById('tw_map'), {
	    center: new google.maps.LatLng(<?php echo $tw_coordinates; ?>), //
	    zoom: <?php if(!empty($tw_mapinfos['zoom'])) { echo $tw_mapinfos["zoom"]; } else { echo '13'; } ?>,
	    mapTypeId: google.maps.MapTypeId.ROADMAP
	});

	var marker = new google.maps.Marker({
	    position: new google.maps.LatLng(<?php echo $tw_coordinates; ?>),
	    map: map,
	    title: 'My title',
	    <?php if(!empty($tw_mapinfos['marker'])){ ?>
	    	icon: '<?php echo $tw_mapinfos["marker"]["url"] ?>' //https://bit.ly/QIMos7
	    <?php } ?>
	});
	<?php if (!empty($tw_mapinfos['title']) && !empty($tw_mapinfos['desc'])) { ?>
	var contentString = "<h1><?php echo $tw_mapinfos["title"]; ?></h1>" +
		"<div class='map_content'>" +
		"<?php echo $tw_mapinfos['desc'] ?>" +
		"</div>";

	var infowindow = new google.maps.InfoWindow({
		content: contentString
	});

	google.maps.event.addListener(marker, 'click', function() {
		infowindow.open(map,marker);
	});
	<?php } ?>
}
google.maps.event.addDomListener(window, 'load', initialize);
</script>
