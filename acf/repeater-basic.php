<?php

if( have_rows('repeater_field_name') ):

    while( have_rows('repeater_field_name') ) : the_row(); 

        $sub_value = get_sub_field('sub_field');

        ?>

<?php
    endwhile;


endif;

?>