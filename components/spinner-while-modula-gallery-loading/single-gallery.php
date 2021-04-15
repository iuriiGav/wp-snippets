<?php get_header(); ?>

<div id="ig_gav-loader" class="ig_loading-spinner"></div>
<section class="single-gallery">

    <?php the_field('gallery_shortcode') ?>


</section>

<script>
    document.onreadystatechange = function() {



        if (document.readyState !== "complete") {
            document.querySelector(
                ".modula").style.visibility = "hidden";
            document.querySelector(
                "#ig_gav-loader").style.visibility = "visible";
        } else {
            document.querySelector(
                "#ig_gav-loader").style.display = "none";
            document.querySelector(
                ".modula").style.visibility = "visible";
        }


    };
</script>


<?php get_footer(); ?>