<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Elyse M. Power</title>

	<script type="text/javascript" src="http://fast.fonts.net/jsapi/caabbd26-913c-4c3e-9bf5-86fbef738226.js"></script>
</head>
<body>
<h1>THIS IS INDEX.PHP</h1>
	
</body>
</html>

<?php if ( have_posts() ) : ?>
	<?php while ( have_posts() ) : the_post(); ?>
		<article>
	      <header class="major">
	        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
	      </header>
	      <?php the_content(); ?>
	    </article>
	<?php endwhile; ?>
	<?php else : ?>
	  	<!-- nothing found! -->
<?php endif; ?>