<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<p class = "mainCopy"><?php the_content(); ?></p>
		<?php endwhile; ?>
		<?php else : ?>
		  	<!-- nothing found! -->
	<?php endif; ?>

<?php get_footer(); ?>

