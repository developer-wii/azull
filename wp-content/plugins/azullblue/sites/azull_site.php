<?php
/* The class used to define Sites custom post type and associated taxonomy
 * @package:wordpress
 * @subpackage:azull
 */

defined('ABSPATH') or die("No script kiddies please!");

function register_site() {
  register_post_type(
                'azull_site', array(
            'labels' => array(
                'name' => __('Websites', 'azull'),
                'singular_name' => __('Websites', 'azull'),
                'add_new' => __('Add Website', 'azull'),
                'add_new_item' => __('Add New Website', 'azull'),
                'edit_item' => __('Edit Website', 'azull'),
                'new_item' => __('New Website', 'azull'),
                'view_item' => __('View Website', 'azull'),
                'search_items' => __('Search Website', 'azull'),
            ),
            'description' => __('Sites in the netowrk', 'azull'),
            'public' => false,
            'show_ui' => true,
            'publicly_queryable' => false,
            'exclude_from_search' => false,
            'menu_position' => 80,
            'menu_icon' => 'dashicons-admin-site',
            'supports' => array('title'),
            'register_meta_box_cb' => array('Class_Site', 'site_metaboxes'),
                )
        );
}
add_action( 'init', 'register_site' );
function ctg_rewrite_flush1() {
    register_site();
    flush_rewrite_rules();
}
