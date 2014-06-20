<?php
/* Template Name: Profile Template
*/
?>
<?php get_header(); ?>
<h1><?php the_title(); ?></h1>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<p class = "mainCopy"><span class="greeting"><strong>Hi, there. </strong></span><?php the_content(); ?></p>
		<?php endwhile; ?>
		<?php else : ?>
		  	<!-- nothing found! -->
	<?php endif; ?>

<div class="letsTalk"><a href="http://elysepower.com/contact/">
	<img src="<?php bloginfo('template_url'); ?>/images/paper-airplane.png" alt=""></a>
</div>
<?php get_footer(); ?>