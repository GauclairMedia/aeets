			<!-- footer -->
			<footer class="footer" role="contentinfo">

				<!-- copyright -->
				<div class="logo">
					<a href="<?php echo home_url(); ?>">
						<img src="<?php echo get_template_directory_uri(); ?>/img/logo_white.svg" alt="Logo" class="logo-img">
					</a>
				</div>
				<div class="copyright">
					<?php the_field('copyright', 'option'); ?>
				</div>
				<div class="social_media">
					<?php if( have_rows('social_media', 'option') ): ?>
						<?php while ( have_rows('social_media', 'option') ) : the_row(); ?>
							<a href="<?php the_sub_field('lien_externe'); ?>"><img src="<?php the_sub_field('img'); ?>" alt="icon"></a>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<!-- /copyright -->
			</footer>
			<!-- /footer -->

		<!-- </div> -->
		<!-- /wrapper -->

		<?php wp_footer(); ?>

		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>

	</body>
</html>
