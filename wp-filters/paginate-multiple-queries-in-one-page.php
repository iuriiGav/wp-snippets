   <!-- Query 1 -->

        <?
            $paged1 = isset( $_GET['paged1'] ) ? (int) $_GET['paged1'] : 1;
            $paged2 = isset( $_GET['paged2'] ) ? (int) $_GET['paged2'] : 1;

            // Custom Loop with Pagination 1
       
            $args1 = array(
                'paged'          => $paged1,
                'posts_per_page' => 2,
            );
            $query1 = new WP_Query( $args1 );

            if($query1-> have_posts()) : while ( $query1->have_posts() ) : $query1->the_post();
                the_title();
            endwhile; endif;

          
            $pag_args1 = array(
                'format'  => '?paged1=%#%',
                'current' => $paged1,
                'total'   => $query1->max_num_pages,
                'add_args' => array( 'paged2' => $paged2 )
            );
            echo paginate_links( $pag_args1 );
        ?>
 

 <!-- Query 2 -->

        <?
            // Custom Loop with Pagination 2
            $args2 = array(
                'paged'          => $paged2,
                'posts_per_page' => 2,
            );
            $query2 = new WP_Query( $args2 );

            if($query2-> have_posts()) :   while ( $query2->have_posts() ) : $query2->the_post();
                the_title();
            endwhile; endif;

            $pag_args2 = array(
                'format'  => '?paged2=%#%',
                'current' => $paged2,
                'total'   => $query2->max_num_pages,
                'add_args' => array( 'paged1' => $paged1 )
            );
            echo paginate_links( $pag_args2 );
        ?>
  