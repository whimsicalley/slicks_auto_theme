<?php
/*-------------- Enable Widgets--------------- */

function blank_widgets_init() {
    /*-- Blog Sidebar Widget --*/
    register_sidebar( array(
        'name' => ('Blog Sidebar Widget'),
        'id' => 'blog-widget',
        'description' => 'Widget for our sidebar on the blog pages',
        'before_widget' => '<div class="blog-widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    /*-- About Sidebar Widget --*/
    register_sidebar( array(
        'name' => ('About Sidebar Widget'),
        'id' => 'about-widget-sidebar',
        'description' => 'Widget for our sidebar on the about page',
        'before_widget' => '<div class="about-widget-sidebar">',
        'after_widget' => '</div>',
        'before_title' => '<h4>',
        'after_title' => '</h4>'
    ));
    /*-- About Widget --*/
    register_sidebar( array(
        'name' => ('About Widget'),
        'id' => 'about-widget',
        'description' => 'Widget content of the about page',
        'before_widget' => '<div class="about-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    /*-- Promos Widget --*/
    register_sidebar( array(
        'name' => ('Promos Widget'),
        'id' => 'promos-widget',
        'description' => 'Widget content of the promotions page',
        'before_widget' => '<div class="promos-widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
    /*--First Footer Widget--*/
    register_sidebar( array(
        'name'          => ('First Footer widget'),
        'id'            => 'footer-one',
        'description'   => 'Left widget in the footer',
        'before_widget' => '<div class="widget-footer widget-left">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    /*--Second Footer Widget--*/
    register_sidebar( array(
        'name'          => ('Second Footer widget'),
        'id'            => 'footer-two',
        'description'   => 'Middle widget in the footer',
        'before_widget' => '<div class="widget-footer widget-middle">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

    /*--Third Footer Widget--*/
    register_sidebar( array(
        'name'          => ('Third Footer widget'),
        'id'            => 'footer-three',
        'description'   => 'Right widget in the footer',
        'before_widget' => '<div class="widget-footer widget-right">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>'
    ));

}
add_action('widgets_init', 'blank_widgets_init');

/*-------------- Enable Menu --------------- */
add_theme_support('menus');

/*--- Enable Post Thumbnails ---*/
add_theme_support( 'post-thumbnails' );

/*---Change excerpt length---*/
function new_excerpt_length($length) {
    return 30;
}
add_filter('excerpt_length', 'new_excerpt_length');

?>
