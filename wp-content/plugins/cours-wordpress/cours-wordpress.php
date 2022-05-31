<?php
/**
 * Plugin Name: Cours Wordpress
 * Description: Plugins du cours Wordpress
 * Version: 1.0
 * Author: Johan Nagou 
 */


 function cw_add_custom_types(){
    $labels = array(
        'name'                => _x( 'VTC', 'Post Type General Name'),
        'singular_name'       => _x( 'VTC', 'Post Type Singular Name'),
        'menu_name'           => __( 'VTC'),
        'all_items'           => __( 'All VTC'),
        'view_item'           => __( 'See the VTC'),
        'add_new_item'        => __( 'Add a VTC'),
        'add_new'             => __( 'Add New'),
        'edit_item'           => __( 'Edit'),
        'update_item'         => __( 'Update'),
        'search_items'        => __( 'Search a VTC'),
        'not_found'           => __( 'Not found'),
        'not_found_in_trash'  => __( 'Not found in trash'),
        );

        $args = array(
            'label'               => __( 'VTC'),
            'description'         => __( 'All customs VTC'),
            'labels'              => $labels,
            'menu_icon'           => 'dashicons-car',
            'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
            'show_in_rest' => true,
            'hierarchical'        => false,
            'public'              => true,
            'has_archive'         => true,
            'rewrite'             => array('slug' => 'vtc'),
        );

        register_post_type('vtc', $args);

        $labels = array(
            'name'                => _x( 'Drive', 'Post Type General Name'),
            'singular_name'       => _x( 'Drive', 'Post Type Singular Name'),
            'menu_name'           => __( 'Drive'),
            'all_items'           => __( 'All Drives'),
            'view_item'           => __( 'See the drive'),
            'add_new_item'        => __( 'Add a drive'),
            'add_new'             => __( 'Add New'),
            'edit_item'           => __( 'Edit'),
            'update_item'         => __( 'Update'),
            'search_items'        => __( 'Search a drive'),
            'not_found'           => __( 'Not found'),
            'not_found_in_trash'  => __( 'Not found in trash'),
            );
    
            $args = array(
                'label'               => __( 'Drive'),
                'description'         => __( 'All customs drives'),
                'labels'              => $labels,
                'menu_icon'           => 'dashicons-carrot',
                'supports'            => array('title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
                'show_in_rest' => true,
                'hierarchical'        => false,
                'public'              => true,
                'has_archive'         => true,
                'rewrite'             => array('slug' => 'drive'),
            );
    
            register_post_type('drive', $args);
 }

 
 function cw_register_settings() { 
     register_setting ('cw_options_group', 'param1'); 
     register_setting ('cw_options_group', 'param2'); 
     register_setting ('cw_options_group', 'param3'); 
} 

function cw_setting_page() { 
    add_menu_page( 
        'Cours Wordpress Setting', 
        'Cours Wordpress Setting', 
        'manage_options', 
        'cw-settings-form', 
        'cw_settings_form', 
        'dashicons-cart' 
    ); 
} 


function cw_settings_form(){ 
    require __DIR__ .'/pages/cw_settings_form.php'; 
}


add_action('init', 'cw_add_custom_types');
add_action ('admin_init', 'cw_register_settings'); 
add_action ('admin_menu', 'cw_setting_page');



