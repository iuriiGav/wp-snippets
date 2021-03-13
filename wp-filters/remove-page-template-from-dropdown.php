<?php 

//Filter removes page template option from the dropdown menue in pages

add_filter( 'theme_page_templates', 'ig_gav_remove_page_template' );
function ig_gav_remove_page_template( $pages_templates ) {
unset( $pages_templates['page-name.php'] );
return $pages_templates;
}
?>