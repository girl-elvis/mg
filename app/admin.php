<?php

namespace App;

/**
 * Theme customizer
 */
add_action('customize_register', function (\WP_Customize_Manager $wp_customize) {
    // Add postMessage support
    $wp_customize->get_setting('blogname')->transport = 'postMessage';
    $wp_customize->selective_refresh->add_partial('blogname', [
        'selector' => '.brand',
        'render_callback' => function () {
            bloginfo('name');
        }
    ]);
});

/**
 * Customizer JS
 */
add_action('customize_preview_init', function () {
    wp_enqueue_script('sage/customizer.js', asset_path('scripts/customizer.js'), ['customize-preview'], null, true);
});







/**
 * Filters the CSS class(es) applied to a menu item's list item element.
 *
 * @param array    $classes The CSS classes that are applied to the menu item's `<li>` element.
 * @param WP_Post  $item    The current menu item.
 * @param stdClass $args    An object of wp_nav_menu() arguments.
 * @param int      $depth   Depth of menu item. Used for padding.
 *
 * @return Array $classes
 */
add_filter( 'nav_menu_css_class', function ( $classes, $item, $args, $depth ) {

    if ( 'primary_navigation' === $args->theme_location ) {
      foreach ( $classes as $key => $class ) {
        if ( $class == 'menu-item' ) {
          $classes[ $key ] ='relative group';
        }
      }

    } else if ( 'mobile_navigation' === $args->theme_location ) {
      foreach ( $classes as $key => $class ) {
        if ( $class == 'menu-item' && $depth == 0) {
          $classes[ $key ] ='relative group my-5 md:my-2';
        }
      }
    }

    return $classes;
}, 10, 4 );




/**
 * Add a parent CSS class for nav menu items.
 *
 * @param array  $items The menu items, sorted by each menu item's menu order.
 * @return array (maybe) modified parent CSS class.
 */
add_filter('nav_menu_submenu_css_class',function ($classes, $args, $depth ) {
    foreach ( $classes as $key => $class ) {
        if ( $class == 'sub-menu' && $depth == 0) {
            $classes[ $key ] = 'list-none sub-menu md:absolute z-10 md:hidden group-hover:block pl-6 pr-2 pt-4 md:pt-2 pb-4 md:bg-white shadow-lg grid grid-cols-1 gap-2 md:grid-cols-2';
        }
        // elseif($class == 'sub-menu' && $depth == 1){
        //     $classes[ $key ] = 'your-class';
        // }
    }
    return $classes;
} , 10, 3 );
