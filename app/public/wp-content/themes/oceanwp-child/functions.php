<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'font-awesome','simple-line-icons','oceanwp-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );
// END ENQUEUE PARENT ACTION

add_filter( 'wp_nav_menu_items', 'add_extra_item_to_nav_menu', 10, 2 );

function add_extra_item_to_nav_menu( $items, $args ) {

    if ( is_user_logged_in() && $args->menu == "header" ) {
               $new_item = '<li class="menu-item menu-item-type-post_type menu-item-object-page parent hfe-creative-menu"><a href="#"><strong>Admin</strong></a></li>';
        $items = '<ul class="horizontal-menu">' . $items . '</ul>';

        // Convertir les éléments de menu en un tableau
        $items_array = explode('</li>', $items);

        // Insérer l'élément à la position souhaitée (par exemple, entre le 2e et le 3e élément)
        $position = 1; // Position de l'insertion (après le 1er élément)
        array_splice($items_array, $position, 0, $new_item);

        // Ajouter la balise de fermeture </li> à tous les éléments, sauf au dernier
        $items_with_closing_li = implode('</li>', $items_array);
        $items_with_closing_li = rtrim($items_with_closing_li, '</li>');
        $items_with_closing_li .= '</li>';
        
        // Reconstruire la chaîne d'éléments du menu
        $items = '<ul class="horizontal-menu">' . $items_with_closing_li . '</ul>';
    }

    return $items;
}
function custom_styles() {
    wp_enqueue_style( 'custom-css', get_stylesheet_directory_uri() . '/style.css' );
}

add_action( 'wp_enqueue_scripts', 'custom_styles' );