<?php

if( have_rows('repeater_field_name') ):

    while( have_rows('repeater_field_name') ) : the_row(); 

        $sub = get_sub_field('sub');

        ?>

<?php
    endwhile;


endif;

?>