<?php /* Template Name: Home Template */ get_header(); ?>

	<main role="main" class="home">
		<!-- section -->
		<div class="top">
			<h1><?php the_field('title'); ?></h1>
			<div class="wave_bottom">

			</div>
		</div>

		<div class="section_2">
			<?php if( have_rows('slider') ): ?>
				<div class="slider-for">
					<?php while ( have_rows('slider') ) : the_row(); ?>

						<div class="slick-container">
							<!-- <a href="<?php the_sub_field('link'); ?>"> -->
							<!-- <div class="orange_filter"></div> -->
							<div class="slideContent">
								<div style="background: url('<?php the_sub_field('img'); ?>'); margin-top: -13vw; width: 50%; background-repeat: no-repeat; background-position: center; background-size: cover; filter: grayscale(100%);"  class="bg_slider">

								</div>
								<div class="text">
									<div class="sub_title"><?php the_sub_field('sub_title'); ?></div>
									<h2><?php the_sub_field('title'); ?></h2>
									<p><?php the_sub_field('text'); ?></p>
									<a class="classy" href="<?php the_sub_field('btn_link'); ?>"><?php the_sub_field('btn_text'); ?></a>
								</div>
							</div>
							<!-- </a> -->
						</div>

					<?php endwhile; ?>
				</div>
			<?php endif; ?>
		</div>
		<!-- /section -->
		<div class="section_comite">
			<?php $section_comite = get_field('section_comite');
			if( $section_comite): ?>
				<div class="wrapper_large">
					<div class="title_btn">
						<h2><?php echo $section_comite['titre_comite']; ?></h2>
						<a class="classy" href="<?php echo $section_comite['lien_bouton_comite']; ?>"><?php echo $section_comite['bouton_comite']; ?></a>
					</div>
			<?php endif; ?>
				<div class="section_comite">
					<?php if( have_rows('comite_executif') ): ?>
						<?php while ( have_rows('comite_executif') ) : the_row(); ?>
							<div class="bloc_comite">
								<div class="photo" style="background: url('<?php the_sub_field('photo'); ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
								<div class="nom"><?php the_sub_field('nom'); ?></div>
								<div class="poste"><?php the_sub_field('poste'); ?></div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
			</div>
		</div>

		<div class="section_3">
			<div class="wrapper">
				<div class="title_btn">
					<h2><?php the_field('titre_evenements'); ?></h2>
					<a class="classy" href="#">Plus d'événements</a>
				</div>
				<div class="section_event">
					<?php if( have_rows('event') ): ?>

						<?php while ( have_rows('event') ) : the_row(); ?>
							<div class="bloc_event">
								<div class="bg" style="background: url('<?php the_sub_field('event_image'); ?>');  background-size: cover; ">

								</div>
								<div class="date">
									<div class="chiffre">
										<?php the_sub_field('chiffre'); ?>
									</div>
									<div class="mois">
										<?php the_sub_field('mois'); ?>
									</div>
								</div>
							</div>

						<?php endwhile; ?>

					<?php endif; ?>
				</div>
			</div>
		</div>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
