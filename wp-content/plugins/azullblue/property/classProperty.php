<?php
/* The class used to define property custom post type and associated taxonomy
 * @package:wordpress
 * @subpackage:azull
 */

defined('ABSPATH') or die("No script kiddies please!");

function register_property() {
  $labels = array(
        'name'               => __( 'Properties', 'azull' ),
        'all_items'          => __( 'Properties', 'azull' ),
        'singular_name'      => __( 'Property', 'azull' ),
        'add_new'            => __( 'Add Property', 'azull' ),
        'add_new_item'       => __( 'Add New Property', 'azull' ),
        'edit_item'          => __( 'Edit Property', 'azull' ),
        'new_item'           => __( 'New Property', 'azull' ),
        'view_item'          => __( 'View Property', 'azull' ),
        'search_items'       => __( 'Search Properties', 'azull' ),
        'not_found'          => __( 'No properties found', 'azull' ),
        'not_found_in_trash' => __( 'No properties found in Trash', 'azull' ),
        'parent_item_colon'  => '',
     );
$args = array(
  'labels'        => $labels,
  'description'   => 'Holds Azull Property and property related data.',
  'public'        => true,
  'menu_position' => 5,
  'supports'      => array( 'title', 'editor', 'thumbnail','comments'),
  'menu_icon' => 'dashicons-admin-home',
  'has_archive'   => true,
);
register_post_type('property', $args );
$labels = array(
 'name'              => __( 'Category','azull' ),
 'singular_name'     => __( 'Category','azull' ),
 'search_items'      => __( 'Search Property Category', 'azull' ),
 'all_items'         => __( 'All Category', 'azull' ),
 'parent_item'       => __( 'Parent Category', 'azull' ),
 'parent_item_colon' => __( 'Parent Category', 'azull' ),
 'edit_item'         => __( 'Edit Category', 'azull' ),
 'update_item'       => __( 'Update Category', 'azull' ),
 'add_new_item'      => __( 'Add New  Category', 'azull' ),
 'new_item_name'     => __( 'New Category', 'azull' ),
 'menu_name'         => __( 'Category', 'azull' ),
 'popular_items' => NULL,
);
$args = array(
 'labels' => $labels,
 'hierarchical' => true,
 'query_var'    => 'categories',
 'query_var'	  => false,
 'rewrite'      => array( 'slug' => 'categories' )
);
register_taxonomy( 'category', array('property','post'), $args);
$args = array(
     'hierarchical' => false,
     'show_in_nav_menus'=>false,
     'show_tagcloud'=>false,
     'label'        => _x( 'Property Locality', 'taxonomy general name', 'azull' ),
     'labels'       => array(
       'name'              => __( 'Property Locality','azull' ),
       'singular_name'     => __( 'Property Locality','azull' ),
       'search_items'      => __( 'Search Property Locality', 'azull' ),
       'all_items'         => __( 'All Property Locality', 'azull' ),
       'parent_item'       => __( 'Parent Property Locality', 'azull' ),
       'parent_item_colon' => __( 'Parent Property Locality', 'azull' ),
       'edit_item'         => __( 'Edit Property Locality', 'azull' ),
       'update_item'       => __( 'Update Property Locality', 'azull' ),
       'add_new_item'      => __( 'Add New  Locality', 'azull' ),
       'new_item_name'     => __( 'New Locality Name', 'azull' ),
       'menu_name'         => __( 'Locality', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'locality',
      'public'        => true,
     'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'locality' )
   );
register_taxonomy( 'locality', 'property', $args );

$args = array(
     'hierarchical' => false,
     'label'        => _x( 'Status', 'taxonomy general name', 'azull' ),
     'labels'       => array(
       'name'              => __( 'Status','azull' ),
       'singular_name'     => __( 'Status','azull' ),
       'search_items'      => __( 'Search Property Status', 'azull' ),
       'all_items'         => __( 'All Property Status', 'azull' ),
       'parent_item'       => __( 'Parent Property Status', 'azull' ),
       'parent_item_colon' => __( 'Parent Property Status', 'azull' ),
       'edit_item'         => __( 'Edit Property Status', 'azull' ),
       'update_item'       => __( 'Update Property Status', 'azull' ),
       'add_new_item'      => __( 'Add New Property Status', 'azull' ),
       'new_item_name'     => __( 'New Property Status Name', 'azull' ),
       'menu_name'         => __( 'Status', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'status',
      'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'status' )
   );
register_taxonomy( 'status', 'property', $args );

$args = array(
     'hierarchical' => false,
     'show_in_nav_menus'=>false,
     'show_tagcloud'=>false,
     'label'        => _x( 'Banner', 'taxonomy general name', 'azull' ),
     'labels'       => array(
       'name'              => __( 'Banner','azull' ),
       'singular_name'     => __( 'Banner','azull' ),
       'search_items'      => __( 'Search Property Banner', 'azull' ),
       'all_items'         => __( 'All Property Banner', 'azull' ),
       'parent_item'       => __( 'Parent Property Banner', 'azull' ),
       'parent_item_colon' => __( 'Parent Property Banner', 'azull' ),
       'edit_item'         => __( 'Edit Property Banner', 'azull' ),
       'update_item'       => __( 'Update Property Banner', 'azull' ),
       'add_new_item'      => __( 'Add New Property Banner', 'azull' ),
       'new_item_name'     => __( 'New Property Banner Name', 'azull' ),
       'menu_name'         => __( 'Banner', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'banner',
      'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'banner' )
   );
register_taxonomy( 'banner', 'property', $args );

 $args = array(

     'hierarchical' => false,
     'show_in_nav_menus'=>false,
     'show_tagcloud'=>false,
     'label'        => _x( 'Features', 'taxonomy general name', 'azull' ),
     'labels'       => array(
       'name'              => __( 'Features','azull' ),
       'singular_name'     => __( 'Feature','azull' ),
       'search_items'      => __( 'Search Feature', 'azull' ),
       'all_items'         => __( 'All Property Feature', 'azull' ),
       'parent_item'       => __( 'Parent Property Feature', 'azull' ),
       'parent_item_colon' => __( 'Parent Property Feature', 'azull' ),
       'edit_item'         => __( 'Edit Property Feature', 'azull' ),
       'update_item'       => __( 'Update Property Feature', 'azull' ),
       'add_new_item'      => __( 'Add New Property Feature', 'azull' ),
       'new_item_name'     => __( 'New Feature Name', 'azull' ),
       'menu_name'         => __( 'Feature', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'feature',
      'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'feature' )

               );
 register_taxonomy( 'feature', 'property', $args );

$args = array(
     'hierarchical' => false,
     'show_in_nav_menus'=>false,
     'show_tagcloud'=>false,
     'label'        => _x( 'Orientation', 'taxonomy general name', 'azull' ),
     'labels'       => array(
       'name'              => __( 'Orientation','azull' ),
       'singular_name'     => __( 'Orientation','azull' ),
       'search_items'      => __( 'Search Property Orientation', 'azull' ),
       'all_items'         => __( 'All Property Orientation', 'azull' ),
       'parent_item'       => __( 'Parent Property Orientation', 'azull' ),
       'parent_item_colon' => __( 'Parent Property Orientation', 'azull' ),
       'edit_item'         => __( 'Edit Property Orientation', 'azull' ),
       'update_item'       => __( 'Update Property Orientation', 'azull' ),
       'add_new_item'      => __( 'Add New Property Orientation', 'azull' ),
       'new_item_name'     => __( 'New Property Orientation Name', 'azull' ),
       'menu_name'         => __( 'Orientation', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'orientation',
      'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'orientation' )
   );

register_taxonomy( 'orientation', 'property', $args );

$args = array(
     'hierarchical' => false,
     'show_in_nav_menus'=>false,
     'show_tagcloud'=>false,
     'label'        => __( 'View', 'azull' ),
     'labels'       => array(
       'name'              => __( 'View','azull' ),
       'singular_name'     => __( 'View', 'azull' ),
       'search_items'      => __( 'Search Property View', 'azull' ),
       'all_items'         => __( 'All Property View', 'azull' ),
       'parent_item'       => __( 'Parent Property View', 'azull' ),
       'parent_item_colon' => __( 'Parent Property View', 'azull' ),
       'edit_item'         => __( 'Edit Property View', 'azull' ),
       'update_item'       => __( 'Update Property View', 'azull' ),
       'add_new_item'      => __( 'Add New Property View', 'azull' ),
       'new_item_name'     => __( 'New Property View Name', 'azull' ),
       'menu_name'         => __( 'View', 'azull' ),
       'popular_items' => NULL,
     ),
     'query_var'    => 'view',
      'query_var'	  => false,
     'rewrite'      => array( 'slug' => 'view' )
   );
register_taxonomy( 'view', 'property', $args );
$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'label'        => __( 'Exterior','azull' ),
    'labels'       => array(
      'name'              => __( 'Exterior', 'azull' ),
      'singular_name'     => __( 'Exterior', 'azull' ),
      'search_items'      => __( 'Search Property Exterior', 'azull' ),
      'all_items'         => __( 'All Property Exterior', 'azull' ),
      'parent_item'       => __( 'Parent Property Exterior', 'azull' ),
      'parent_item_colon' => __( 'Parent Property Exterior', 'azull' ),
      'edit_item'         => __( 'Edit Property Exterior', 'azull' ),
      'update_item'       => __( 'Update Property Exterior', 'azull' ),
      'add_new_item'      => __( 'Add New Property Exterior', 'azull' ),
      'new_item_name'     => __( 'New Property Exterior Name', 'azull' ),
      'menu_name'         => __( 'Exterior', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'exterior',
     'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'exterior' )
  );
register_taxonomy( 'exterior', 'property', $args );
$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'label'        => __( 'Interior','azull' ),
    'labels'       => array(
      'name'              => __( 'Interior','azull' ),
      'singular_name'     => __( 'Interior','azull' ),
      'search_items'      => __( 'Search Property Interior', 'azull' ),
      'all_items'         => __( 'All Property Interior', 'azull' ),
      'parent_item'       => __( 'Parent Property Interior', 'azull' ),
      'parent_item_colon' => __( 'Parent Property Interior', 'azull' ),
      'edit_item'         => __( 'Edit Property Interior', 'azull' ),
      'update_item'       => __( 'Update Property Interior', 'azull' ),
      'add_new_item'      => __( 'Add New Property Interior', 'azull' ),
      'new_item_name'     => __( 'New Property Interior Name', 'azull' ),
      'menu_name'         => __( 'Interior', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'interior',
     'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'interior' )
  );
register_taxonomy( 'interior', 'property', $args );

$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'depth' => 0,
    'label'        => _x( 'Proprietors', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Proprietor','azull' ),
      'singular_name'     => __( 'Proprietors','azull' ),
      'search_items'      => __( 'Search Proprietors', 'azull' ),
      'all_items'         => __( 'All Proprietors', 'azull' ),
      'parent_item'       => __( 'Parent Proprietors', 'azull' ),
      'parent_item_colon' => __( 'ParentProprietors', 'azull' ),
      'edit_item'         => __( 'Edit Proprietors', 'azull' ),
      'update_item'       => __( 'Update Proprietors', 'azull' ),
      'add_new_item'      => __( 'Add New Proprietors', 'azull' ),
      'new_item_name'     => __( 'New Proprietors Name', 'azull' ),
      'menu_name'         => __( 'Proprietors', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'proprietor',

    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'proprietor' )
  );
register_taxonomy( 'proprietor','property', $args);
//add project submenu
$args = array(
   'hierarchical' => false,
   'show_in_nav_menus'=>false,
   'show_tagcloud'=>false,
   //'depth' => 0,
   'label'  => _x( 'Projects', 'taxonomy general name', 'azull' ),
   'labels' => array(
         'name'              => __( 'Project','azull' ),
         'singular_name'     => __( 'Projects','azull' ),
         'search_items'      => __( 'Search Projects', 'azull' ),
         'all_items'         => __( 'All Projects', 'azull' ),
         'parent_item'       => __( 'Parent Projects', 'azull' ),
         'parent_item_colon' => __( 'ParentProjects', 'azull' ),
         'edit_item'         => __( 'Edit Project', 'azull' ),
         'update_item'       => __( 'Update Project', 'azull' ),
         'add_new_item'      => __( 'Add New Project', 'azull' ),
         'new_item_name'     => __( 'New Project Name', 'azull' ),
         'menu_name'         => __( '&nbsp;&nbsp;&nbsp;&nbsp;Projects', 'azull' ),
         'popular_items' => NULL,
         ),
    'query_var'    => 'project',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'project' )
  );
 register_taxonomy('project','property', $args);

$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'label'        => _x( 'Agent', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Agents', 'azull' ),
      'singular_name'     => __( 'Agent','azull' ),
      'search_items'      => __( 'Search Property Agent', 'azull' ),
      'all_items'         => __( 'All Property Agent', 'azull' ),
      'parent_item'       => __( 'Parent Property Agent', 'azull' ),
      'parent_item_colon' => __( 'Parent Property Agent', 'azull' ),
      'edit_item'         => __( 'Edit Property Agent', 'azull' ),
      'update_item'       => __( 'Update Property Agent', 'azull' ),
      'add_new_item'      => __( 'Add New Property Agent', 'azull' ),
      'new_item_name'     => __( 'New Property Agent Name', 'azull' ),
      'menu_name'         => __( 'Agent', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'agent',
     'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'agent' )
  );
register_taxonomy( 'agent', 'property', $args );

$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'label'        => _x( 'Property Distances', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Distances', 'azull' ),
      'singular_name'     => __( 'Distances','azull' ),
      'search_items'      => __( 'Search Property Distances', 'azull' ),
      'all_items'         => __( 'All Property Distances', 'azull' ),
      'parent_item'       => __( 'Parent Property Distances', 'azull' ),
      'parent_item_colon' => __( 'Parent Property Distances', 'azull' ),
      'edit_item'         => __( 'Edit Property Distances', 'azull' ),
      'update_item'       => __( 'Update Property Distances', 'azull' ),
      'add_new_item'      => __( 'Add New Property Distances', 'azull' ),
      'new_item_name'     => __( 'New Property Distances Name', 'azull' ),
      'menu_name'         => __( 'Distances', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'walkscores',
     'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'walkscores' )
  );
register_taxonomy( 'walkscores', 'property', $args );

$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'label'        => _x( 'Property Dimension', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Dimensions','azull' ),
      'singular_name'     => __( 'Dimension','azull' ),
      'search_items'      => __( 'Search Property Dimensions', 'azull' ),
      'all_items'         => __( 'All Property Dimensions', 'azull' ),
      'parent_item'       => __( 'Parent Property Dimensions', 'azull' ),
      'parent_item_colon' => __( 'Parent Property Dimensions', 'azull' ),
      'edit_item'         => __( 'Edit Property Dimensions', 'azull' ),
      'update_item'       => __( 'Update Property Dimensions', 'azull' ),
      'add_new_item'      => __( 'Add New Property Dimensions', 'azull' ),
      'new_item_name'     => __( 'New Property Dimensions Name', 'azull' ),
      'menu_name'         => __( 'Dimensions', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'dimensions',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'dimensions' )
  );

register_taxonomy( 'dimensions', 'property', $args );

    $args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'show_ui'=>true,
    'label'        => _x( 'Country', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Country', 'azull' ),
      'singular_name'     => __( 'Country','azull' ),
      'search_items'      => __( 'Search  Country', 'azull' ),
      'all_items'         => __( 'All Country', 'azull' ),
      'parent_item'       => __( 'Parent Country', 'azull' ),
      'parent_item_colon' => __( 'Parent Country', 'azull' ),
      'edit_item'         => __( 'Edit  Country', 'azull' ),
      'update_item'       => __( 'Update Country', 'azull' ),
      'add_new_item'      => __( 'Add  Country', 'azull' ),
      'new_item_name'     => __( 'New Country Name', 'azull' ),
      'menu_name'         => __( 'Country', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'country',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'country' )
  );
register_taxonomy( 'country', 'property', $args );

$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'show_ui'=>true,
    'label'        => _x( 'Region', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Region', 'azull' ),
      'singular_name'     => __( 'Region','azull' ),
      'search_items'      => __( 'Search Region', 'azull' ),
      'all_items'         => __( 'All Region', 'azull' ),
      'parent_item'       => __( 'Parent Region', 'azull' ),
      'parent_item_colon' => __( 'Parent Region', 'azull' ),
      'edit_item'         => __( 'Edit Region', 'azull' ),
      'update_item'       => __( 'Update Region', 'azull' ),
      'add_new_item'      => __( 'Add New Region', 'azull' ),
      'new_item_name'     => __( 'New Region Name', 'azull' ),
      'menu_name'         => __( 'Region', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'region',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'region' )
  );
register_taxonomy( 'region', 'property', $args );
$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'show_ui'=>true,
    'label'        => _x( 'Provinces', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Provinces','azull' ),
      'singular_name'     => __( 'Provinces','azull' ),
      'search_items'      => __( 'Search Provinces', 'azull' ),
      'all_items'         => __( 'All Provinces', 'azull' ),
      'parent_item'       => __( 'Parent Provinces', 'azull' ),
      'parent_item_colon' => __( 'Parent Provinces', 'azull' ),
      'edit_item'         => __( 'Edit Provinces', 'azull' ),
      'update_item'       => __( 'Update Provinces', 'azull' ),
      'add_new_item'      => __( 'Add New Provinces', 'azull' ),
      'new_item_name'     => __( 'New Provinces', 'azull' ),
      'menu_name'         => __( 'Provinces', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'provinces',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'provinces' )
  );
register_taxonomy( 'provinces', 'property', $args );
$args = array(
    'hierarchical' => false,
    'show_in_nav_menus'=>false,
    'show_tagcloud'=>false,
    'show_ui'=>true,
    'label'        => _x( 'Place', 'taxonomy general name', 'azull' ),
    'labels'       => array(
      'name'              => __( 'Place', 'azull' ),
      'singular_name'     => __( 'Place','azull' ),
      'search_items'      => __( 'Search Place', 'azull' ),
      'all_items'         => __( 'All Place', 'azull' ),
      'parent_item'       => __( 'Parent Place', 'azull' ),
      'parent_item_colon' => __( 'Parent Place', 'azull' ),
      'edit_item'         => __( 'Edit Place', 'azull' ),
      'update_item'       => __( 'Update Place', 'azull' ),
      'add_new_item'      => __( 'Add New Place', 'azull' ),
      'new_item_name'     => __( 'New Place Name', 'azull' ),
      'menu_name'         => __( 'Place', 'azull' ),
      'popular_items' => NULL,
    ),
    'query_var'    => 'place',
    'query_var'	  => false,
    'rewrite'      => array( 'slug' => 'place' )
  );
register_taxonomy( 'place', 'property', $args );
}
add_action( 'init', 'register_property' );
function ctg_rewrite_flush() {
    register_property();
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'ctg_rewrite_flush' );
