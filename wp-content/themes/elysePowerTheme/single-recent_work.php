
<?php get_header() ?>
<h1 class="recent">Recent Work</h1>

<h1><?php the_title(); ?></h1>
	<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
    <div class="workSingle">
    	<div class="workItemFull">
		    <p class="skills"><?php the_field('skills'); ?></p>
			<p class="longDescrip"><?php the_field('longdescrip'); ?></p>
		</div><!-- end of workItemFull -->

		<?php while( has_sub_field('images') ): ?>
			<div class="imageSingle">
				<!--<pre><?php print_r($image);?></pre>-->
		  		<p class="caption"><?php the_sub_field('caption'); ?></p>
		  		<?php $image = get_sub_field('image'); ?>
		    	<img src="<?php echo $image['sizes']['large'] ?>">
		  	</div><!-- end of imageSingle -->
		

	
	  	<?php endwhile; ?>
		<?php endwhile; // end of the loop. ?>
		<div class="back"><a class="backButton" href="http://elysepower.com/recent_work/">Back to Recent Work ></a></div>
	</div> <!-- end of workSingle -->

<?php get_footer(); ?>
   