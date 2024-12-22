
<?php get_header(); ?>
<!-- Main content here -->

<?php
// Start the loop.
if ( have_posts() ) :
    while ( have_posts() ) : the_post();
        // Output the post content.
        the_content();
    endwhile;
else :
    echo 'No content found.';
endif;
?>


<?php get_footer(); ?>