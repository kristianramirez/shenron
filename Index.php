<?php 
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
        //
        // Post Content here
        //
    } // end while
} // end if
?>

<?php endwhile; else : ?>
    <p><?php esc_html_e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>