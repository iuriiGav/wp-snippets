<div class="ig-hamburger-btn-container" id="navbar-toggler-js" tabindex="0">
    <span class="patty-top"></span>
    <span class="patty-middle"></span>
    <span class="patty-bottom"></span>
</div>

<div class="ig-main-nav-overlay" id="main-nav-overlay">
    <nav>


        <?php
        wp_nav_menu(array(
            'theme_location' => 'main-menu',
            'container' => false,
            'menu_class' => '',
            'fallback_cb' => '__return_false',
            'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto flex-nowrap nav-fill ig-main-navbar %2$s">%3$s</ul>',
            'depth' => 2,
            'walker' => new navbar_from_two_sides_full_screen_walker()
        ));
        ?>
    </nav>
</div>