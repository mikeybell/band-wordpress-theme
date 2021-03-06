<?php

/*
	Template Name: Listen Page, No Sidebar
*/

get_header();  ?>

<div class="main-listen">
	
	<h1 class="wow fadeInDown"><?php the_title(); ?></h1>

	<div class="shows-container">
	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="shows-text wow fadeInUp">
	      	<?php the_content(); ?>
	      </div>

	    <?php endwhile; // end the loop?>

	</div> <!-- /.shows-container -->


</div> <!-- /.main-shows -->

<?php get_footer(); ?>