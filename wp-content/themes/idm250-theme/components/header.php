<div class="header-back"></div>
<header> 
    <div class="navigation">
    <h1>Gelato</h1>
    <nav class="menu">
        <?php
        wp_nav_menu (['theme_location' => 'primary-menu']);
        $menu = wp_get_nav_menu_items('primary-menu');
        ?>
            <span class="menu-item"></span>
            <span class="menu-item"></span>
    </nav>
    </div>
</header>
<main>