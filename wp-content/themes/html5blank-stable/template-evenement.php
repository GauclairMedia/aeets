<?php /* Template Name: Evenement Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="top">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="wrapper">
				<h2><?php the_field('titre_evenements'); ?></h2>
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
			<div class="bg_calendar">
				<div class="wrapper">
					<div class="section_calendar">
						<div class="left">
							<iframe src="https://calendar.google.com/calendar/embed?src=auclair.media%40gmail.com&ctz=America%2FToronto" style="border: 0" width="800" height="600" frameborder="0" scrolling="no"></iframe>
						</div>
						<div class="right">
							<h2><?php the_field('titre_liste'); ?></h2>
							<ul>
								<?php if( have_rows('liste_contenu') ): ?>
									<?php while ( have_rows('liste_contenu') ) : the_row(); ?>
										<li class="bold"><?php the_sub_field('activite'); ?></li>
										<li class="line"><?php the_sub_field('date'); ?></li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
						</div>
					</div>
				</div>
			</div>

		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
