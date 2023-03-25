<header> 
<div class="header-desktop">
    <a href="<?php echo '$home'?>"><h3 class="site-title">gelato</h3></a>
    <nav class="desktop-nav">
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        ?>
    </nav>
</div>
<hr class="nav-linebreak">

<div class="header-mobile">
<a href="<?php echo '$home'?>"><h2 class="site-title">gelato</h2></a>
  <div class="dropdown">
  <button class="dropbtn">MENU</button>
  <div class="dropdown-content">
  <?php
        wp_nav_menu (['theme_location' => 'mobile-menu']);
        ?>
  <!-- <a href="#"></a>
  <a href="#"></a>
  <a href="#"></a> -->
  </div>
  </div>
</div>
<hr class="nav-linebreak mobile">



    <!-- <div class="navigation">
    <h1 class="site-title">Gelato</h1>
    <nav class="menu">
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        // $menu = wp_get_nav_menu_items('primary-menu');
        ?>
            <span class="menu-item"></span>
            <span class="menu-item"></span>
    </nav>
    </div> -->
</header>
<main>