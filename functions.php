<?php

// Support To Post Thumbnail.
add_theme_support( 'post-thumbnails' );

function widgets_init() {
    register_sidebar( array(
        'name'          => 'Sidebar Widget',
        'id'            => 'sidebar-widget',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'description'   => 'サイドバーにウィジットを追加します',
    'class'         => 'fotter-left-widget',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
}
add_action( 'widgets_init', 'widgets_init' );

register_sidebar( array(
    'name'          => 'Sidebar 2nd',
    'id'            => 'sidebar-2',
    'before_widget' => '<div id="%1$s" class="widget %2$s">',
    'description'   => 'サイドバー2ndにウィジットを追加します',
    'class'         => 'fotter-left-widget-2nd',
    'after_widget'  => '</div>',
    'before_title'  => '<h3 class="widget-title">',
    'after_title'   => '</h3>',
) );

function my_the_excerpt($postContent) {
    $postContent = mb_strimwidth($postContent, 0, 150, "…","UTF-8");
    return $postContent;
}
add_filter('the_excerpt', 'my_the_excerpt');

function the_posts_pagination_clean($args = '')
{
 $thePagination = get_the_posts_pagination($args);
 $thePagination = preg_replace('~<div class="nav-links">~', '', $thePagination );
 $thePagination = preg_replace('~</div>~', '', $thePagination);
 $thePagination = preg_replace('~page-numbers~', 'page-item', $thePagination);
 $thePagination = preg_replace('~current~', 'active', $thePagination);
 
 echo preg_replace('~(<h2\\s(class="screen-reader-text")(.*)[$>])(.*)(</h2>)~ui', '', $thePagination);
} 