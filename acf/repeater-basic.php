<?php

if( have_rows('repeater_field_name') ):

    while( have_rows('repeater_field_name') ) : the_row(); 

        $field_name = get_sub_field('field_name');

        ?>

<?php
    endwhile;


endif;

?>