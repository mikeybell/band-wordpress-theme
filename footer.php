<footer>
  <div class="container">

	<a href="#">
		<h3>Back to Top</h3>
	</a>

	<div class="footer-nav">
	<?php wp_nav_menu( array(
	  'container' => false,
	  'theme_location' => 'primary'
	)); ?>
	</div> <!-- /.footer-nav -->

    <p>Designed and developed by <a target="_blank" href="http://mikedoesstuff.com">Mike Bell.</a> &copy; <?php echo date('Y'); ?></p>
  </div>
</footer>

<script>
/* Google Analytics! */
 var _gaq=[["_setAccount","UA-XXXXX-X"],["_trackPageview"]]; // Change UA-XXXXX-X to be your site's ID
 (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];g.async=1;
 g.src=("https:"==location.protocol?"//ssl":"//www")+".google-analytics.com/ga.js";
 s.parentNode.insertBefore(g,s)}(document,"script"));
</script>

<?php wp_footer(); ?>
</body>
</html>