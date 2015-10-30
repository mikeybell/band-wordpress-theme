<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main-index">
  <div class="container">

  	<?php 
  	// the query
  	$the_query = new WP_Query( array(
  		'posts_per_page' => 100
  	) ); ?>

  	<?php if ( $the_query->have_posts() ) : ?>

  		<!-- pagination here -->

  		<!-- the loop -->
  		<div class="home-posts">
  			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
  				<div class="post">
  					<div class="line"></div>
  					<?php the_post_thumbnail('large'); ?>
  					<h4><?php the_title(); ?></h4>
  					<div class="white"><?php the_excerpt(); ?></div> <!-- /.white -->
  				</div> <!-- /.post -->
  			<?php endwhile; ?>
  		</div> <!-- /.home-posts -->
  		<!-- end of the loop -->

  		<?php wp_reset_postdata(); ?>

  	<?php else : ?>
  		<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
  	<?php endif; ?>


  </div> <!-- /.container -->
</div> <!-- /.main-index -->

<?php get_footer(); ?>