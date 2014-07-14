<?php
/*
Plugin Name: White Papers
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW white papers
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_white_paper' );
add_action( 'admin_init', 'my_admin_white_paper' );
add_action( 'save_post', 'add_white_paper_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_wp', 1 );
add_action( 'init', 'create_my_taxonomies_wp', 0 );

function create_white_paper() {
    register_post_type( 'white_papers',
        array(
            'labels' => array(
                'name' => 'White Papers',
                'singular_name' => 'White Paper',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New White Paper',
                'edit' => 'Edit',
                'edit_item' => 'Edit White Paper',
                'new_item' => 'New White Paper',
                'view' => 'View',
                'view_item' => 'View White Paper',
                'search_items' => 'Search White Papers',
                'not_found' => 'No White Papers found',
                'not_found_in_trash' => 'No White Papers found in Trash',
                'parent' => 'Parent White Paper'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
?>
<?php
function my_admin_white_paper() {
    add_meta_box( 'white_paper_meta_box',
        'White Paper Details',
        'display_white_paper_meta_box',
        'white_papers', 'normal', 'high'
    );
}
?>
<?php
function display_white_paper_meta_box( $white_paper ) {
    // Retrieve current blurb based on white paper ID
    $white_paper_blurb = esc_html( get_post_meta( $white_paper->ID, 'white_paper_blurb', true ) );
    $white_paper_industry =esc_html( get_post_meta( $white_paper->ID, 'white_paper_industry', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">White Paper Blurb</td>
            <td><input type="text" size="80" name="white_paper_blurb_name" value="<?php echo $white_paper_blurb; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Industry Type</td>
            <td><input type="text" size="80" name="white_paper_industry_name" value="<?php echo $white_paper_industry; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_white_paper_fields( $white_paper_id, $white_paper ) {
    // Check post type for white papers
    if ( $white_paper->post_type == 'white_papers' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['white_paper_blurb_name'] ) && $_POST['white_paper_blurb_name'] != '' ) {
            update_post_meta( $white_paper_id, 'white_paper_blurb', $_POST['white_paper_blurb_name'] );
        }
        if ( isset( $_POST['white_paper_industry_name'] ) && $_POST['white_paper_industry_name'] != '' ) {
            update_post_meta( $white_paper_id, 'white_paper_industry', $_POST['white_paper_industry_name'] );
        }
    }
}
?>
<?php
function include_template_function_wp( $template_path ) {
    if ( get_post_type() == 'white_papers' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-white-papers.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-white-papers.php';
            }
        }
         elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-white-papers.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-white-papers.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_wp() {
    register_taxonomy(
        'white_papers_industry_type',
        'white_papers',
        array(
            'labels' => array(
                'name' => 'Industry Type',
                'add_new_item' => 'Add New Industry Type',
                'new_item_name' => "New Industry Type"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
?>
