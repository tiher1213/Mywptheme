<?php

// Add Theme features
function wptd_theme_features() {
add_theme_support( 'title-tag' );
add_theme_support( 'menus' );


    
    
    
    
    //custom logo
add_theme_support( 'custom-logo',  array(
    'height'               => 110,
    'width'                => 180,
    'flex-height'          => true,
    'flex-width'           => true,
    
    'unlink-homepage-logo' => true, 
) );

//nav menus
register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' )
     
     )
   );
}


add_action( 'after_setup_theme', 'wptd_theme_features' );

 //regester sidebars
 add_action( 'widgets_init', 'wpd_register_sidebars' );
 function wpd_register_sidebars() {
     /* Register the 'primary' sidebar. */
     register_sidebar(
         array(
             'id'            => 'sidebar-1',
            'name'          => __( 'default Sidebar' ),
             'description'   => __( 'At widgets to show on sidebar .' ),
             'before_widget' => '<div id="%1$s" class="widget %2$s">',
             'after_widget'  => '</div>',
             'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
     );
     register_sidebar(
        array(
            'id'            => 'footer-widgets',
           'name'          => __( 'Footer widgets' ),
            'description'   => __( 'Add widgets is to show inside site footer .' ),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget'  => '</div>',
            'before_title'  => '<h2 class="widget-title">',
           'after_title'   => '</h2>',
       )
    );    
}

    // Include CSS and JS
add_action( 'wp_enqueue_scripts', 'wptd_theme_css_js' );
function wptd_theme_css_js() {
    
     wp_enqueue_style( 'wptd-style',  get_stylesheet_uri() ); 

    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Roboto:wght@400;500;700;900&display=swap' );
wp_enqueue_script( 'wptd-custom', get_template_directory_uri().'/assets/js/scripts.js', array( 'jquery'), false, true  );

}
//Add Icon to Menu Item has Sub Menu
function add_icon_item_has_submenu( $classes, $menu_item, $args) {
    
  if( 'header-menu'=== $args->theme_location && in_array( 'menu-item-has-children', $classes)) {
      $menu_item->title .='<span class="dropdown-menu-toggle"></span>';
  } 
    
    return $classes;
}
add_filter('nav_menu_css_class', 'add_icon_item_has_submenu', 10, 3);
// filter excerpt more

function wpd_filter_excerpt_more(){
    return sprintf(  
        '<a href="%1$s"class="more-link">%2$s<span class="screen_reader_text">"%3$s"</spam></a>',
    get_permalink(),
   'Read More',
   get_the_title()
);
}
add_filter('excerpt_more','wpd_filter_excerpt_more');
//Change Excerpt Length
function wpd_filter_excerpt_length() {
    return 35;
}
add_filter('excerpt_length', 'wpd_filter_excerpt_length',);
                                                                                   
