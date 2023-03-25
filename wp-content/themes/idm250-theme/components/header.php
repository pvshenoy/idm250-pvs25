<header> 
<div class="header-desktop">
    <a href="<?php echo '$home'?>"><h3 class="site-title">gelato</h3></a>
    <ul class="desktop-nav">
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        ?>
    </ul>
</div>
<hr class="nav-linebreak">





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