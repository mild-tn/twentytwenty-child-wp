<?php

//template tag
get_header();

$args = array(
    'post_type'   => 'post',
    'nukberposts' => 10,
    'orderby'     => 'date',
    'order'       => 'DESC'
);

$lastest_posts = get_posts($args);

echo '<div class="container-fluid">';
echo '<div class="row">';
foreach ($lastest_posts as $lastest_post) {
    $categorises = get_the_category($lastest_post->ID);
    echo '<div class="col-md-6 d-flex justify-content-center">';
    // foreach ($categorises as $category) {
    //     echo $category->name;
    // }
    echo '<h5>'.$lastest_post->post_title.'</h5>';
    echo '<p>'.$lastest_post->post_date.'</p>';
    echo '<a href="'.get_permalink( $lastest_post->ID ).'"> See Detail </a>';
    // echo '<p>'.$lastest_post->post_content.'</p>';
    // echo '<img  width="200px" src="'.get_the_post_thumbnail_url($lastest_post->ID).'">';
    echo '</div>';
}
echo '</div>';
echo '</div>';

get_footer();