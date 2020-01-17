<?php

get_header();


// echo the_title();
// echo the_content();

if ( have_posts () ) {
   while ( have_posts() ) {
       the_post();
    //    the_title();
       echo "<h1>".get_the_title().'</h1>';
    //    the_content();
       echo '<p>'.get_the_content().'</p>';
       echo '<br>';
    }
}

get_footer();