<?php
// Module Affichage Formulaire de contact
global $themeworks_config;
$tw_cf7 = $themeworks_config['opt-contact_form'];
if (!empty($tw_cf7)) {
	echo do_shortcode($tw_cf7);
} else {
	echo 'Le formulaire de contact n\'est pas activé, veuillez paramètrer dans les options du thème.';
}
?>