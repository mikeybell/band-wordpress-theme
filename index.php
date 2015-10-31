<?php //index.php is the last resort template, if no other templates match ?>
<?php get_header(); ?>

<div class="main-index clearfix">
  <div class="container">

  		<h1 class="wow fadeInDown">Latest News</h1>

    <div class="content wow fadeInLeft">
        <?php get_template_part( 'loop', 'index' ); ?>
    </div> <!--/.content -->

    <?php get_sidebar(); ?>

  </div> <!-- /.container -->
</div> <!-- /.main -->

<?php get_footer(); ?>