<!-- Module Affichage Adresse -->
<?php
function tw_display_address(){
	global $themeworks_config;

	$tw_name 	= $themeworks_config['opt-name'];
	$tw_address = $themeworks_config['opt-address_map'];
	$tw_phone 	= $themeworks_config['opt-phone'];
	$tw_email 	= $themeworks_config['opt-email'];

	if (!empty($tw_name)) {
		echo '<p><strong>'.$tw_name.'</strong></p>';
	}
	if (!empty($tw_address)) {
		echo '<address>
			<strong>Adresse</strong> : '.nl2br($tw_address).'
			</address>';
	}
	if (!empty($tw_phone)) {
		echo '<p><strong>Téléphone</strong> : '.$tw_phone.'</p>';
	}
	if (!empty($tw_email)) {
		echo '<p><strong>E-mail</strong> : '.$tw_email.'</p>';
	}
}

// Affichage de l'adresse
tw_display_address();
?>