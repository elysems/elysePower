<?php ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elyse M. Power Web Design & Development Ottawa</title>
	<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/x-icon" href="<?php bloginfo('template_url'); ?>/images/epowerfavicon.png">
	
<?php wp_head(); ?>
</head>
<body>
<div class="wrapper">
	<h1 class="logo"><img class="logo" src="<?php bloginfo('template_url'); ?>/images/elyseMpowerlogo.jpg" height="335" width="1161" alt=""></h1>
	<?php wp_nav_menu( array( 'theme_location' => 'primary-menu' ) ); ?>
	