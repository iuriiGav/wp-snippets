<?php 

// this in functions.php
//replace years_in_which_this_artist_participated with your repeater name
//years_in_which_this_artist_participated with the repeater field you want to query by
function wpza_replace_repeater_field( $where ) {
    $where = str_replace( "meta_key = 'years_in_which_this_artist_participated_$", "meta_key LIKE 'years_in_which_this_artist_participated_%", $where );
	do_action( 'qm/debug', $where);
    return $where;
}
add_filter( 'posts_where', 'wpza_replace_repeater_field' );

$args = array(

    'post_type' => 'artists',
    'posts_per_page' => 30,
    'meta_query'	=> array(
		array(
        'key'		=> 'years_in_which_this_artist_participated_$_year_of_participation',
        'compare'	=> '=',
        'value'		=> '2021'
			)
    )



);

$current_festival_artists = new WP_Query($args);
if( $current_festival_artists->have_posts() ): ?>
	<ul>
	<?php while ( $current_festival_artists->have_posts() ) : $current_festival_artists->the_post(); ?>
		<li>
			<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		</li>
	<?php endwhile; ?>
	</ul>
<?php endif; 