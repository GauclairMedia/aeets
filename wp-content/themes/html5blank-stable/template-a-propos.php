<?php /* Template Name: A propos Template */ get_header(); ?>

	<main role="main">
		<!-- section -->
		<section>
			<div class="top">
				<h1><?php the_title(); ?></h1>
			</div>
			<div class="wrapper">
				<?php $section_un = get_field('section_un');
				if( $section_un): ?>
					<div class="img_text_left">
						<div class="left">
							<div class="img" style="background: url('<?php echo $section_un['img']; ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
						</div>
						<div class="right">
							<h2 class="title"><?php echo $section_un['title']; ?></h2>
							<div class="text"><?php echo $section_un['text']; ?></div>
							<a class="classy" href="<?php echo $section_un['link_button']; ?>"><?php echo $section_un['button']; ?></a>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="wrapper">
				<?php $section_deux = get_field('section_deux');
				if( $section_deux): ?>
					<div class="img_text_right">
						<div class="left">
							<h2 class="title"><?php echo $section_deux['title']; ?></h2>
							<div class="text"><?php echo $section_deux['text']; ?></div>
							<a class="classy" href="<?php echo $section_deux['link_button']; ?>"><?php echo $section_deux['button']; ?></a>
						</div>
						<div class="right">
							<div class="img" style="background: url('<?php echo $section_deux['img']; ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
						</div>
					</div>
				<?php endif; ?>
			</div>
			<div class="wrapper">
				<?php $section_trois = get_field('section_trois');
				if( $section_trois): ?>
					<div class="img_text_left">
						<div class="left">
							<div class="img" style="background: url('<?php echo $section_trois['img']; ?>'); background-repeat: no-repeat; background-size: contain; background-position: center;"></div>
						</div>
						<div class="right">
							<h2 class="title"><?php echo $section_trois['title']; ?></h2>
							<div class="text"><?php echo $section_trois['text']; ?></div>
							<a class="classy" href="<?php echo $section_trois['link_button']; ?>"><?php echo $section_trois['button']; ?></a>
						</div>
					</div>
				<?php endif; ?>
			</div>
		</section>
		<!-- /section -->
	</main>
<?php get_footer(); ?>
