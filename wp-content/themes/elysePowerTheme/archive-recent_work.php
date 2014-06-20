<?php ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elyse M. Power Web Design & Development Ottawa</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/epowerfavicon.png">
</head>
<body>
<div class="wrapper">
	<h1 class="logo"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/elyseMpowerlogo.jpg" height="335" width="1161" alt=""></h1>
	<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	<h1>Recent Work</h1>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="work clearfix">
    	<div class="image">
			<?php the_post_thumbnail('large'); ?>
		</div><!-- end of image -->
    	<div class="workItem clearfix">
		    <p class="skills"><?php the_field('skills'); ?></p>
		    <h2><?php the_title(); ?></h2>
			<p class="workDescrip"><?php the_content(); ?></p>
			
			<?php if(get_field('linkto')=='Site'): ?>
				<a href="<?php the_field('siteurl') ?>" class="workButton"><?php the_field('button_text'); ?></a>
			<?php else: ?>	
				<a href="<?php the_permalink() ?>" class="workButton"><?php the_field('button_text'); ?></a>
			<?php endif; ?>
		</div><!-- end of workItem -->	  
		
	</div> <!-- end of work -->

	<?php endwhile; // end of the loop. ?>
	<div class="line clearfix"></div>

	<?php get_footer(); ?>