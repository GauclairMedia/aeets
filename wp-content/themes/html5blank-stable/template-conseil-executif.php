<?php /* Template Name: Conseil executif Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="top">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="wrapper_large">
				<div class="section_comite">
					<?php if( have_rows('comite_executif') ): ?>
						<?php while ( have_rows('comite_executif') ) : the_row(); ?>
							<div class="bloc_comite" data-id="<?php the_sub_field('id'); ?>">
								<div class="photo" style="background: url('<?php the_sub_field('photo'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
								<div class="nom"><?php the_sub_field('nom'); ?></div>
								<div class="poste"><?php the_sub_field('poste'); ?></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
			<div class="bg_gray">
				<div class="wrapper_large">
					<div class="section_info_comite">
						<?php if( have_rows('info_comite_executif') ): ?>
							<?php while ( have_rows('info_comite_executif') ) : the_row(); ?>
								<div class="info_comite" style="display: none;" data-id="<?php the_sub_field('id'); ?>">
									<div class="poste"><?php the_sub_field('poste'); ?></div>
									<div class="nom"><?php the_sub_field('nom'); ?></div>
									<div class="info"><?php the_sub_field('info'); ?></div>
									<div class="email"><?php the_sub_field('email'); ?></div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
					</div>
				</div>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
