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
