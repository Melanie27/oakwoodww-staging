<?php
/*
Plugin Name: Case Studies
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW case studies
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_case_study' );
add_action( 'admin_init', 'my_admin_case_study' );
add_action( 'save_post', 'add_case_study_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_cs', 1 );
add_action( 'init', 'create_my_taxonomies_cs', 0 );

function create_case_study() {
    register_post_type( 'case_studies',
        array(
            'labels' => array(
                'name' => 'Case Studies',
                'singular_name' => 'Case Study',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Case Study',
                'edit' => 'Edit',
                'edit_item' => 'Edit Case Study',
                'new_item' => 'New Case Study',
                'view' => 'View',
                'view_item' => 'View Case Study',
                'search_items' => 'Search Case Studies',
                'not_found' => 'No Case Studies found',
                'not_found_in_trash' => 'No Case Studies found in Trash',
                'parent' => 'Parent Case Study'
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
function my_admin_case_study() {
    add_meta_box( 'case_study_meta_box',
        'Case Study Details',
        'display_case_study_meta_box',
        'case_studies', 'normal', 'high'
    );
}
?>
<?php
function display_case_study_meta_box( $case_study ) {
    // Retrieve current blurb based on case study ID
    $case_study_blurb = esc_html( get_post_meta( $case_study->ID, 'case_study_blurb', true ) );
    $case_study_industry =esc_html( get_post_meta( $case_study->ID, 'case_study_industry', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Case Study Blurb</td>
            <td><input type="text" size="80" name="case_study_blurb_name" value="<?php echo $case_study_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Industry Type</td>
            <td><input type="text" size="80" name="case_study_industry_name" value="<?php echo $case_study_industry; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_case_study_fields( $case_study_id, $case_study ) {
    // Check post type for movie reviews
    if ( $case_study->post_type == 'case_studies' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['case_study_blurb_name'] ) && $_POST['case_study_blurb_name'] != '' ) {
            update_post_meta( $case_study_id, 'case_study_blurb', $_POST['case_study_blurb_name'] );
        }
        if ( isset( $_POST['case_study_industry_name'] ) && $_POST['case_study_industry_name'] != '' ) {
            update_post_meta( $case_study_id, 'case_study_industry', $_POST['case_study_industry_name'] );
        }
    }
}
?>
<?php
function include_template_function_cs( $template_path ) {
    if ( get_post_type() == 'case_studies' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-case-studies.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-case-studies.php';
            }
        }
         elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-case-studies.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-case-studies.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_cs() {
    register_taxonomy(
        'case_studies_industry_type',
        'case_studies',
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
