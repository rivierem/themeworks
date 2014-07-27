			<?php global $themeworks_config; ?>
			<footer>
				<div class="row">
					<p class="lead intro">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa totam sapiente laboriosam magni, obcaecati, iusto quidem. Aspernatur quae laboriosam, minus fuga mollitia maxime nihil quisquam quaerat, unde officiis nemo consectetur?</p>
					<div class="col-lg-3">
						<h3>Get in touch</h3>
						<address>
						  <strong>Themeworks</strong><br>
						  BDN Saint-Paul<br>
						  Reunion Island, FR 974<br>
						  <abbr title="Téléphone">Tél. :</abbr> 0693 037 061
						</address>

						<address>
						  <strong>Mathieu Rivière</strong><br>
						  <a href="mailto:#">info@mathieuriviere.com</a>
						</address>
					</div>
					<div class="col-lg-3">
						<h3>Widget footer 2</h3>
					</div>
					<div class="col-lg-3">
						<h3>Widget footer 3</h3>
					</div>
					<div class="col-lg-3">
						<h3>Widget footer 4</h3>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<p id="copyright"><?php echo $themeworks_config['opt-copyright']; ?></p>
					</div>
					<div class="col-lg-6">
					<?php get_template_part('social','menu'); ?>
					</div>
				</div>
			</footer>
		</div><!-- END .container -->
		<?php wp_footer(); ?>
	</body>
</html>