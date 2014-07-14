<?php
/*
Plugin Name: Industry Affiliations
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW Industry Affiliations
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_affiliation' );
add_action( 'admin_init', 'my_admin_affiliation' );
add_action( 'save_post', 'add_affiliation_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_a', 1 );
function create_affiliation() {
    register_post_type( 'affiliations',
        array(
            'labels' => array(
                'name' => 'Affiliations',
                'singular_name' => 'Affiliation',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Affiliation',
                'edit' => 'Edit',
                'edit_item' => 'Edit Affiliation',
                'new_item' => 'New Affiliation',
                'view' => 'View',
                'view_item' => 'View Affiliation',
                'search_items' => 'Search Affiliations',
                'not_found' => 'No Affiliations found',
                'not_found_in_trash' => 'No Affiliations found in Trash',
                'parent' => 'Parent Affiliations'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
function my_admin_affiliation() {
    add_meta_box( 'affiliation_meta_box',
        'Affiliations Details',
        'display_affiliation_meta_box',
        'affiliations', 'normal', 'high'
    );
}
?>
<?php
function display_affiliation_meta_box( $affiliation ) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $affiliation_blurb = esc_html( get_post_meta( $affiliation->ID, 'affiliation_blurb', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Blurb</td>
            <td><input type="text" size="80" name="affiliation_blurb_name" value="<?php echo $affiliation_blurb; ?>" /></td>
        </tr>
    </table>
    <?php
}
?>
<?php
function add_affiliation_fields( $affiliation_id, $affiliation ) {
    // Check post type for movie reviews
    if ( $affiliation->post_type == 'affiliations' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['affiliation_blurb_name'] ) && $_POST['affiliation_blurb_name'] != '' ) {
            update_post_meta( $affiliation_id, 'affiliation_blurb', $_POST['affiliation_blurb_name'] );
        }
    }
}
?>
<?php
function include_template_function_a( $template_path ) {
    if ( get_post_type() == 'affiliations' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-affiliations.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-affiliations.php';
            }
        }
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-affiliations.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-affiliations.php';
 
            }
        }
    }
    return $template_path;
}?>