<?php get_header() ?>

<?php
    if(have_posts()) :
        while(have_posts()) : the_post();
            the_title();
            the_content();
        endwhile;
    else :
        echo '<p>No content found</p>';
    endif;
?>

<?php get_footer() ?>