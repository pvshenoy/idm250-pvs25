<footer>
  <div class="footer">
  <?php wp_nav_menu(['theme_location' => 'footer-menu']);?>
  </div>
  <p class=footer-content>&copy; <?php echo date('Y'); ?>
    <?php bloginfo('name'); ?>
  </p>
</footer>