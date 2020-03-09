<?php /* Template Name: Home Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<?php if( have_rows('slider') ): ?>
				<div class="slider-for">
			    	<?php while ( have_rows('slider') ) : the_row(); ?>

						<div class="slick-container">
							<!-- <a href="<?php the_sub_field('link'); ?>"> -->
							<!-- <div class="orange_filter"></div> -->
							<div class="slideContent" style="background: url('<?php the_sub_field('img'); ?>'); width: 100%; height: 100vh; background-repeat: no-repeat; background-size: cover; filter: grayscale(100%);" ><h1><?php the_sub_field('title'); ?></h1></div>
							<!-- </a> -->
						</div>

				    <?php endwhile; ?>
				</div>
			<?php endif; ?>
		</section>

		<section>
			<div class="wrapper">
				<h1><?php the_field('page_title'); ?></h1>
				<?php if( have_rows('2_bloc_contenu') ): ?>

				    	<?php while ( have_rows('2_bloc_contenu') ) : the_row(); ?>
							<div class="two_bloc_text">
								<div class="left">
									<div style="background-image: url('<?php the_sub_field('img_gauche'); ?>'); width: 200px; height: 250px; background-repeat: no-repeat; background-size: cover; background-position: 100%;" ></div>
									<h2><?php the_sub_field('titre_gauche'); ?></h2>
									<p><?php the_sub_field('text_gauche'); ?></p>
								</div>
								<div class="right">
									<div style="background-image: url('<?php the_sub_field('img_droite'); ?>'); width: 200px; height: 250px; background-repeat: no-repeat; background-size: cover; background-position: 100%;" ></div>
									<h2><?php the_sub_field('titre_droit'); ?></h2>
									<p><?php the_sub_field('text_droit'); ?></p>
								</div>
							</div>
						<?php endwhile; ?>

				<?php endif; ?>
			</div>
			<div class="parallax_bg" style="background-image: url('<?php the_field('parallax'); ?>'); width: 100%; height: 30vh; background-attachment: fixed; background-repeat: no-repeat; background-size: cover; background-size: 100%">

			</div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
