<?php

get_header();


if ( have_posts () ) {
   while ( have_posts() ) {
        the_post();
        echo "<h1>".get_the_title().'</h1>';
        echo '<img  width="400px" src="'.get_the_post_thumbnail_url($post->ID).'">';
        echo get_post_meta($post->ID, 'species', true);
        echo '<p>'.get_the_content().'</p>';
        echo '<br>';
    }
}

get_footer();