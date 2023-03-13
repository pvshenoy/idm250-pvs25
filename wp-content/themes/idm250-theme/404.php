<?php get_header('404'); ?>
<div class="error-img">
  <img src="<?php echo get_template_directory_uri(); ?>dist/images/404.png" alt="">
  <!-- <img src="dist/images/404.png" alt="" class="error"> -->
</div>
<h2 class="error-text">Oops! This page couldn't be found.</h2>
<?php get_footer('simple'); ?>