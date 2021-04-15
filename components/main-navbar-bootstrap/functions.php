<?php

function ig_gav_register_navwalker()
{ 
    require_once get_template_directory() . '/inc/bootstrap-nav-menu-walker/class-wp-bootstrap-navwalker.php';
}
add_action('after_setup_theme', 'ig_gav_register_navwalker');

register_nav_menu('main-menu', esc_html__('Main menu'));
register_nav_menu('footer-menu', esc_html__('Footer menu'));
