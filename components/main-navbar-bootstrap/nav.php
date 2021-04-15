<nav class="navbar smart-scroll navbar-expand-lg">
    <div class="container-fluid navbar-wrapper">

        <a class="navbar-brand" href="<?php echo get_home_url()?>">
       
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#main-menu" aria-controls="main-menu" aria-expanded="false" aria-label="Toggle navigation">
        <span class="mobile-nav__icon-bar"></span>
        <span class="mobile-nav__icon-bar"></span>
        <span class="mobile-nav__icon-bar"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="main-menu">
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu',
                'container' => false,
                'menu_class' => '',
                'fallback_cb' => '__return_false',
                'items_wrap' => '<ul id="%1$s" class="navbar-nav ms-auto flex-nowrap nav-fill ig-main-navbar %2$s">%3$s</ul>',
                'depth' => 2,
                'walker' => new bootstrap_5_wp_nav_menu_walker()
            ));
            ?>
        </div>
    </div>
</nav>