<?php 

// Disable admin bar
add_filter('show_admin_bar', '__return_false');

function hexcreate_files() {
    wp_enqueue_style('hexcreate_main_styles', get_stylesheet_uri());
//change to 'development when deployed
    if (defined('WP_ENV') && WP_ENV === 'production') {
        wp_enqueue_script(
            'hexcreate_main_js',
            'http://localhost:5173/src/js/main.js',
            [],
            null,
            true
        );
        
        add_filter('script_loader_tag', function ($tag, $handle) {
            if ($handle === 'hexcreate_main_js') {
                return str_replace(' src', ' type="module" src', $tag);
            }
            return $tag;
        }, 10, 2);
        
        wp_enqueue_style(
            'hexcreate_main_css',
            'http://localhost:5173/src/css/input.css',
            [],
            null
        );
    } else {
        // Production code
        $manifest_path = get_theme_file_path('/dist/.vite/manifest.json');
        if (file_exists($manifest_path)) {
            $manifest = json_decode(file_get_contents($manifest_path), true);
            $entry = 'src/js/main.js';
            if (isset($manifest[$entry])) {
                $entry_data = $manifest[$entry];
                wp_enqueue_script(
                    'hexcreate_main_js',
                    get_theme_file_uri('/dist/' . $entry_data['file']),
                    [],
                    null,
                    true
                );
                add_filter('script_loader_tag', function ($tag, $handle) {
                    if ($handle === 'hexcreate_main_js') {
                        return str_replace(' src', ' type="module" src', $tag);
                    }
                    return $tag;
                }, 10, 2);
                if (!empty($entry_data['css'])) {
                    foreach ($entry_data['css'] as $css_file) {
                        wp_enqueue_style(
                            'hexcreate_main_css_' . basename($css_file, '.css'),
                            get_theme_file_uri('/dist/' . $css_file),
                            [],
                            null
                        );
                    }
                }
            }
        }
    }
}
add_action('wp_enqueue_scripts', 'hexcreate_files');

// function hexcreate_files() {
//     wp_enqueue_style('hexcreate_main_styles', get_stylesheet_uri());

//     // IF WE ARE LOCAL (DEVELOPMENT), LOAD VITE PORT 5173
//     if (defined('WP_ENV') && WP_ENV === 'development') {
//         wp_enqueue_script(
//             'hexcreate_main_js',
//             'http://localhost:5173/src/js/main.js',
//             [],
//             null,
//             true
//         );
        
//         add_filter('script_loader_tag', function ($tag, $handle) {
//             if ($handle === 'hexcreate_main_js') {
//                 return str_replace(' src', ' type="module" src', $tag);
//             }
//             return $tag;
//         }, 10, 2);
        
//         wp_enqueue_style(
//             'hexcreate_main_css',
//             'http://localhost:5173/src/css/input.css',
//             [],
//             null
//         );
//     } 
    // OTHERWISE (ON HOSTINGER), AUTOMATICALLY LOAD COMPILED VITE PRODUCTION ASSETS
//     else {
//         $manifest_path = get_theme_file_path('/dist/.vite/manifest.json');
//         if (file_exists($manifest_path)) {
//             $manifest = json_decode(file_get_contents($manifest_path), true);
//             $entry = 'src/js/main.js';
//             if (isset($manifest[$entry])) {
//                 $entry_data = $manifest[$entry];
//                 wp_enqueue_script(
//                     'hexcreate_main_js',
//                     get_theme_file_uri('/dist/' . $entry_data['file']),
//                     [],
//                     null,
//                     true
//                 );
//                 add_filter('script_loader_tag', function ($tag, $handle) {
//                     if ($handle === 'hexcreate_main_js') {
//                         return str_replace(' src', ' type="module" src', $tag);
//                     }
//                     return $tag;
//                 }, 10, 2);
//                 if (!empty($entry_data['css'])) {
//                     foreach ($entry_data['css'] as $css_file) {
//                         wp_enqueue_style(
//                             'hexcreate_main_css_' . basename($css_file, '.css'),
//                             get_theme_file_uri('/dist/' . $css_file),
//                             [],
//                             null
//                         );
//                     }
//                 }
//             }
//         }
//     }
// }
// add_action('wp_enqueue_scripts', 'hexcreate_files');

// Featured images
function my_theme_setup() {
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'my_theme_setup');

//nav & footer menus
function hexcreate_register_menus() {
    register_nav_menus(array(
        'header' => __('Header Menu'),
        'footer' => __('Footer Menu'),
    ));
}
add_action('after_setup_theme', 'hexcreate_register_menus');

//toggleMenu JS
function enqueue_toggle_menu_js()
{
    wp_enqueue_script(
        'toggle-menu',
        get_template_directory_uri() . '/src/js/toggleMenu.js',
        [],   // no dependencies
        null, // version
        true  // load in footer
    );
}
add_action('wp_enqueue_scripts', 'enqueue_toggle_menu_js');


function get_acf_image_data($image_field, $size = 'full')
{
    if (empty($image_field)) {
        return null;
    }
      // If using 'full', get the original URL directly
    if ($size === 'full' && is_array($image_field) && !empty($image_field['url'])) {
        return array(
            'url' => $image_field['url'],
            'srcset' => '',
            'sizes' => '',
            'alt' => !empty($image_field['alt']) ? $image_field['alt'] : ''
        );
    }

    $image_id = null;

    // If ACF returns an array (has an ID), use WordPress’ image size system
    if (is_array($image_field) && !empty($image_field['ID'])) {
        $image_id = $image_field['ID'];
    }
    //if it's an attachment ID
    elseif (is_numeric($image_field)) {
        $image_id = $image_field;
    }
    
    if ($image_id) {
        return array(
            'url' => wp_get_attachment_image_url($image_id, $size),
            'srcset' => wp_get_attachment_image_srcset($image_id, $size),
            'size' => wp_get_attachment_image_sizes($image_id, $size),
            'alt' => get_post_meta($image_id, 'wp_attachment_image_alt', true)
        );
    }
    
    // If ACF returns a string (URL) - fallback
    if (is_string($image_field)) {
        return array (
            'url' => esc_url($image_field),
            'srcset' => '',
            'sizes' => '',
            'alt' => ''
        );
    }
    // Default fallback
    return null;
}

//Backend compatibility function
function get_acf_image_url($image_field, $size = 'full') {
   $data = get_acf_image_data($image_field, $size);
    return $data ? $data['url'] : null;
}
// 1. Prevent scaling of very large images (default threshold is 2560px)
add_filter( 'big_image_size_threshold', '__return_false' );

// 2. Set JPEG compression quality to 100% for new uploads
add_filter( 'jpeg_quality', function() {
    return 100;
} );

//Mobile detection 
function is_mobile_device() {
    if (empty($_SERVER['HTTP_USER_AGENT'])) {
        return false;
    }
    
    $user_agent = strtolower($_SERVER['HTTP_USER_AGENT']);
    $mobile_keywords = [
        'mobile', 'android', 'iphone', 'ipad', 'ipod', 'blackberry', 
        'webos', 'windows phone', 'symbian', 'kindle', 'opera mini'
    ];
    
    foreach ($mobile_keywords as $keyword) {
        if (strpos($user_agent, $keyword) !== false) {
            return true;
        }
    }
    
    return false;
}

//Accordion JS
function enqueue_accordion()
{
    if (!is_admin()) {
        wp_enqueue_script(
            'accordion.js',
            get_template_directory_uri() . '/src/js/accordion.js',
            array(),

        );
        wp_enqueue_style('accordion', get_template_directory_uri() . '/src/css/accordion.css');
    }
}
add_action('wp_enqueue_scripts', 'enqueue_accordion');

//Custom-solution-cards
function register_solution_cards_cpt()
{
    $labels = array(
        'name' => __('Solution Cards'),
        'singular_name' => __("Solution Card"),
        'add_new' => __('Add New Solution Card'),
        'add_new_item' => __('Add New Solution Card'),
        'edit_item' => __('Edit Solution Card'),
        'new_item' => __('New Solution Card'),
        'view_item' => __('View Solution Card'),
        'search_items' => __('Search Solution Cards'),
        'not_found' => __('No cards found'),
        'not_found_in_trash' => __('No cards found in Trash'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
   
            'title',
            'editor',
        ),
        'has_archive' => false,
        'show_in_rest' => true,
    );

    register_post_type('solution_card', $args);
}
add_action('init', 'register_solution_cards_cpt');

//Custom-stacks-cards
function register_stack_cards_cpt()
{
    $labels = array(
        'name' => __('Stack Cards'),
        'singular_name' => __("Stack Card"),
        'add_new' => __('Add New Stack Card'),
        'add_new_item' => __('Add New Stack Card'),
        'edit_item' => __('Edit Stack Card'),
        'new_item' => __('New Stack Card'),
        'view_item' => __('View Stack Card'),
        'search_items' => __('Search Stack Cards'),
        'not_found' => __('No stack cards found'),
        'not_found_in_trash' => __('No stack cards found in Trash'),
    );

    $args = array(
        'labels' => $labels,
        'public' => true,
        'menu_icon' => 'dashicons-images-alt2',
        'supports' => array(
   
            'title',
            'editor',
        ),
        'has_archive' => false,
        'show_in_rest' => true,
    );

    register_post_type('stack_card', $args);
}
add_action('init', 'register_stack_cards_cpt');

// Force Fluent Forms to load assets on the contact page
function force_fluent_form_assets() {
    if (is_page('contact')) { 
        if (function_exists('wpFluentForm')) {
            wp_enqueue_script('fluentform-public');
            wp_enqueue_style('fluentform-public-default');
        }
    }
}
add_action('wp_enqueue_scripts', 'force_fluent_form_assets');