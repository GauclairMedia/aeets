<?php /* Template Name: Services Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="top">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="wrapper">
				<div class="liste_services">
					<?php if( have_rows('liste_services') ): ?>
						<?php while ( have_rows('liste_services') ) : the_row(); ?>
							<div class="list_scroll">
								<div class="zone_cliquable" style="cursor: pointer;">
									<h2 class="title"><?php the_sub_field('service'); ?></h2>
									<div class="contenu" style="display: none;">
										<div class="info">
											<div class="sub_title"><?php the_sub_field('sub_title'); ?></div>
											<h2 class="title"><?php the_sub_field('title'); ?></h2>
											<div class="text"><?php the_sub_field('text'); ?></div>
										</div>
										<a class="classy" href="<?php the_sub_field('link_button'); ?>"><?php the_sub_field('button'); ?></a>
									</div>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
