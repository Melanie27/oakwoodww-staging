<?php
/*
Plugin Name: Landing Pages
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW press releases
Version: 1.0
Author: Melanie McGanney
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_landing_page' );
add_action( 'admin_init', 'my_admin_landing_page' );
add_action( 'save_post', 'add_landing_page_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_lp', 1 );
add_action( 'init', 'create_my_taxonomies_lp', 0 );

function create_landing_page() {
    register_post_type( 'landing_pages',
        array(
            'labels' => array(
                'name' => 'Landing Pages',
                'singular_name' => 'Landing Page',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Content Block',
                'edit' => 'Edit',
                'edit_item' => 'Edit Content Block',
                'new_item' => 'New Content Block',
                'view' => 'View',
                'view_item' => 'View Content Block',
                'search_items' => 'Search Content Block',
                'not_found' => 'No Content Blocks found',
                'not_found_in_trash' => 'No Content Blocks found in Trash',
                'parent' => 'Parent Content Block'
            ),
            
       
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
function my_admin_landing_page() {
     add_meta_box( 'landing_page_meta_box',
        'Landing Page Details',
        'display_landing_page_meta_box',
        'landing_pages', 'normal', 'high'
    );
}
?>
<?php
function display_landing_page_meta_box($landing_page) {
    
    $landing_page_subhead = esc_html( get_post_meta( $landing_page->ID, 'landing_page_subhead', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Sub Header</td>
            <td><input type="text" size="80" name="landing_page_subhead_name" value="<?php echo $landing_page_subhead; ?>" /></td>
        </tr>
        
        
            </table>
    <?php
}
?>
<?php
function add_press_release_fields( $landing_page_id, $landing_page ) {
    // Check post type for movie reviews
    if ( $landing_page->post_type == 'landing_pages' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['landing_page_subhead_name'] ) && $_POST['landing_page_subhead_name'] != '' ) {
            update_post_meta( $landing_page_id, 'landing_page_subhead', $_POST['landing_page_subhead_name'] );
        }

    }
}
?>
<?php
function include_template_function_lp( $template_path ) {
    if ( get_post_type() == 'landing_pages' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-landing_pages.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-landing_pages.php';
            }
        }
        
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-landing_pages.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-landing_pages.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_lp() {
    register_taxonomy(
        'landing_pages_tags',
        'landing_pages',
        array(
            'labels' => array(
                'name' => 'Tags',
                'add_new_item' => 'Add New Tag',
                'new_item_name' => "New Tag"
            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true
        )
    );
}
?>