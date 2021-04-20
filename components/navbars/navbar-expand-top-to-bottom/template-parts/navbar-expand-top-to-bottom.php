

<h1 class="ig-nav-logo__text">Burger Menu <span class="ig-nav-logo__tagline">Gavryliuk.com</span></h1>

<input class="ig-navbar-toggler-btn__trigger navbar-toggler-checkbox-js" id="burger-toggle-btn" type="checkbox" />

<label class="ig-navbar-toggler-btn navbar-toggler-js"  for="burger-toggle-btn" tabindex="0">
    <span class="ig-navbar-toggler-btn__patty"></span>
    <span class="ig-navbar-toggler-btn__patty"></span>
    <span class="ig-navbar-toggler-btn__patty"></span>
</label>

<nav class="ig-navbar-container" id="main-menu">    
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto flex-nowrap nav-fill ig-main-navbar %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new navbar_expand_top_to_bottom_walker()
            ));
            ?>
 
</nav>



   