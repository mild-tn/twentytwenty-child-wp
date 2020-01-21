<?php

get_header();

echo '<div class="container">';
echo '<h1>Animals</h1>';
if ( have_posts () ) {
    while ( have_posts() ) {
        the_post();
        echo '<img  width="200px" src="'.get_the_post_thumbnail_url($post->ID).'">';
        echo '<a href="'.get_permalink().'">';
        echo "<h2>".the_title().'</h2>';
        echo '</a>';
     }
 }
 echo '</div>';

get_footer();