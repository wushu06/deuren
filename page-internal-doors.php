<?php get_header();?>

<?php
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post();

        get_page_structure( 'page_structure' );

    }
}
wp_reset_postdata();

?>




<?php get_footer();?>