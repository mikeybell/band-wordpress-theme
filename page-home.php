<?php

/*
	Template Name: Home Page, No Sidebar
*/
$background = wp_get_attachment_image_src( get_post_thumbnail_id( $page->ID ), 'full' );

get_header();  ?>

<div class="main">

	<!-- Hero -->
	<div class="hero" style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),url('<?php echo $background[0]; ?>') fixed center">
		<div class="name">
			<h1 class="wow fadeIn"><?php bloginfo('name'); ?></h1>
			<h3 class="wow fadeIn"><?php bloginfo('description') ?></h3>
			<div class="dn-arrow wow bounce">
				<i class="fa fa-chevron-circle-down"></i>
			</div>
		</div> <!-- /.name -->
	</div> <!-- /.hero -->
	
	<!-- Bio -->
	<section class="bio">
		<div class="container">
		
	    <?php // Start the loop ?>
	    <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

			<div class="bio-text wow fadeInUp">
	      	<?php the_content(); ?>
	      </div>

	    <?php endwhile; // end the loop?>
	  </div> <!-- /.container -->
	</section> <!-- /.bio -->

	<!-- News -->
	<section class="news">
		<div class="container">
			<h2 class="wow fadeInUp">Latest News</h2>
			
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
						<div class="post wow fadeInUp">
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

			<a href="<?php bloginfo('url'); ?>/news"><h3 class="wow fadeInUp">See all news</h3></a>
			
		</div> <!-- /.container -->
	</section> <!-- /.news -->

	<!-- Shows -->
	<a href="<?php bloginfo('url'); ?>/shows">
		<?php $image = get_field('show_image'); ?>
		<section class="shows wow fadeInUp" style="background: linear-gradient(rgba(0, 0, 0, 0.65), rgba(0, 0, 0, 0.65)),url('<?= $image['url']; ?>') fixed center">
			<div class="container">
				<h2 class="wow fadeInLeft"><?php the_field('shows'); ?></h2>
			</div> <!-- .container -->
		</section> <!-- /.shows -->
	</a>


	<!-- Social -->
	<section class="social">
		<div class="container">
			<h2 class="wow fadeInUp">Listen & Connect</h2>

			<div class="social-nav">
			<?php wp_nav_menu( array(
			  'container' => false,
			  'theme_location' => 'social'
			)); ?>
			</div> <!-- /.social-nav -->
			
		</div> <!-- /.container -->		
	</section> <!-- /.social -->


</div> <!-- /.main -->

<?php get_footer(); ?>