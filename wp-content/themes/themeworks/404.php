<?php /* The template for displaying 404 pages */ get_header(); ?>

<div class='container_wrap <?php echo $avia_config['layout']; ?>' id='main'>
		<div class='container'>
				<div class='template-page content <?php echo $avia_config['content_class']; ?> units'>
						<h1>Page introuvable</h1>
						<p>La page à laquelle vous tentez d'accéder n'est pas disponible.<br />
								Plusieurs possibilités s'offrent à vous :</p>
						<ul id="list_style_puce">
								<li>Utilisez  le moteur de recherche :
										<div>
												<?php get_search_form(); ?>
										</div>
								</li>
								<li><a href="<?php bloginfo('url'); ?>/plan-du-site">Accéder au plan du site</a></li>
								<li><a href="<?php bloginfo('url'); ?>">Retourner à l'accueil</a></li>
								<li><a href="javascript: history.back()">Retourner à la page précédente</a></li>
						</ul>
						<!-- Clear-->
						<div class="clear"></div>
				</div>
		</div>
</div>
<?php get_footer(); ?>
