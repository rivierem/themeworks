			<?php global $themeworks_config; ?>
			<footer>
				<div class="row">
					<p class="lead intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa totam sapiente laboriosam magni, obcaecati, iusto quidem. Aspernatur quae laboriosam, minus fuga mollitia maxime nihil quisquam quaerat, unde officiis nemo consectetur?</p>
					<?php $footer_layout = $themeworks_config['opt-footer_layout']; ?>
					<?php
						switch ($footer_layout) {
							case '1':
								echo '<div class="col-lg-12">';
									dynamic_sidebar(1);
								echo '</div>';
								break;
							case '2':
								echo '<div class="col-lg-6">';
									 dynamic_sidebar(1);
								echo '</div>';
								echo '<div class="col-lg-6">';
									dynamic_sidebar(2);
								echo '</div>';
								break;
							case '3':
								echo '<div class="col-lg-4">';
									 dynamic_sidebar(1);
								echo '</div>';
								echo '<div class="col-lg-4">';
									 dynamic_sidebar(2);
								echo '</div>';
								echo '<div class="col-lg-4">';
									 dynamic_sidebar(3);
								echo '</div>';
								break;
							case '4':
								echo '<div class="col-lg-3">';
									 dynamic_sidebar(1);
								echo '</div>';
								echo '<div class="col-lg-3">';
									 dynamic_sidebar(2);
								echo '</div>';
								echo '<div class="col-lg-3">';
									 dynamic_sidebar(3);
								echo '</div>';
								echo '<div class="col-lg-3">';
									 dynamic_sidebar(4);
								echo '</div>';
								break;
						}
					?>
				</div>
				<div class="row footer-bottom">
					<div class="col-lg-6">
						<p id="copyright"><?php echo $themeworks_config['opt-copyright']; ?></p>
					</div>
					<div class="col-lg-6">
					<?php if($themeworks_config['opt-footer_social_menu']) {
						get_template_part('social','menu');
					}
					?>
					</div>
				</div>
			</footer>
		</div><!-- END .container -->
		<?php wp_footer(); ?>
	</body>
</html>