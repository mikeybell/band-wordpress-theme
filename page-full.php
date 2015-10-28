<?php

/*
	Template Name: Full Page, No Sidebar
*/

get_header();  ?>

<div class="main">

	<div class="hero">
		<div class="name">
			<h1><?php bloginfo('name'); ?></h1>
			<h3><?php bloginfo('description') ?></h3>
			<div class="dn-arrow">
				<i class="fa fa-chevron-circle-down"></i>
			</div>
		</div> <!-- /.name -->
	</div> <!-- /.hero -->
	

	<section class="bio">
		<div class="container">
		
	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="bio-text">
	      	<?php the_content(); ?>
	      </div>

	    <?php endwhile; // end the loop?>
	  </div> <!-- /.container -->
	</section> <!-- /.bio -->


	<section class="news">
		<div class="container">
			<h2>Latest News</h2>


			
			<?php 
			// the query
			$the_query = new WP_Query( array(
				'posts_per_page' => 2
			) ); ?>

			<?php if ( $the_query->have_posts() ) : ?>

				<!-- pagination here -->

				<!-- the loop -->
				<div class="home-posts">
					<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
						<div class="post">
							<h4><?php the_title(); ?></h4>
							<div class="white"><?php the_content(); ?></div> <!-- /.white -->
						</div> <!-- /.post -->
					<?php endwhile; ?>
				</div> <!-- /.home-posts -->
				<!-- end of the loop -->

				<!-- pagination here -->

				<?php wp_reset_postdata(); ?>

			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
			<?php endif; ?>
			


		</div> <!-- /.container -->
	</section> <!-- /.news -->

</div> <!-- /.main -->

<?php get_footer(); ?>