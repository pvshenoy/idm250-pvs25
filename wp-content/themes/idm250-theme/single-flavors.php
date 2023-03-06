<?php get_header(); ?>
<section class="flex flex-col">
  <div class="">
    <h1 class="post-title"> <?php echo get_the_title(); ?></h1>
    <div><?php echo get_the_date() ?> |
      <?php get_template_part('components/flavor-categories-list'); ?>
    </div>
  </div>
  <img src="dist/images/chocolate-ice-cream.png" alt="Chocolate Ice cream">
</section>
<?php get_template_part('components/content'); ?>
<?php get_footer(); ?>