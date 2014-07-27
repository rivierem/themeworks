<p>Vous êtes ici :</p> <?php // Breadcrumb navigation
if (is_page() && !is_front_page() || is_single() || is_category() || is_search()) {
	echo '<ul class="breadcrumb">';
	echo '<li><a title="Accueil - '.get_bloginfo('name').'" rel="nofollow" href="'.get_bloginfo('url').'">Accueil</a> </li>';

	if (is_page()) {
		$ancestors = get_post_ancestors($post);

		if ($ancestors) {
			$ancestors = array_reverse($ancestors);
			foreach ($ancestors as $crumb) {
				echo '<li><a href="'.get_permalink($crumb).'">'.get_the_title($crumb).'</a></li>';
			}
		}
	}

	if (is_search()) {
		echo '<li>Résultat(s) pour la recherche : <strong>'.$_GET['s'].'</strong></li>';
	}

	if (is_single()) {
		$category = get_the_category();
		echo '<li><a href="'.get_category_link($category[0]->cat_ID).'">'.$category[0]->cat_name.'</a></li>';
	}

	if (is_category()) {
		$category = get_the_category();
		echo '<li><a href="">'.$category[0]->cat_name.'</a></li>';
	}

	// Current page
	if (is_page() || is_single()) {
		echo '<li><a href="">'.get_the_title().'</a></li>';
	}
	echo '</ul>';
} elseif (is_front_page()) {
	// Front page
	echo '<ul class="breadcrumb">';
		echo '<li><a title="Accueil - NOM DU SITE" rel="nofollow" href="http://VOTRE_SITE.com/">Accueil</a></li>';
	echo '</ul>';
}
?>