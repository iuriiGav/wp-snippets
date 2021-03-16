<!-- Get Image Width And Height -->

<?php 
$img_width = wp_get_attachment_metadata($teacher_photo)['width'];
$img_height = wp_get_attachment_metadata($teacher_photo)['height'];
?>







<!-- Conditional renderring -->

<?php

if($img_width >= $img_height) :
    ?>
        <img class=""  src="<?php echo esc_url(wp_get_attachment_image_src($image_ID, 'ig-blog')[0]) ?>" alt="<?php esc_html_e(get_post_meta($image_ID, '_wp_attachment_image_alt', TRUE), 'saulkrasti-jazz-festival') ?>">
    
    <?php 
    else :
    ?>
    <img class=""  src="<?php echo esc_url(wp_get_attachment_image_src($image_ID, 'ig-portrait')[0]) ?>" alt="<?php esc_html_e(get_post_meta($image_ID, '_wp_attachment_image_alt', TRUE), 'saulkrasti-jazz-festival') ?>">
    
    <?php endif; ?>