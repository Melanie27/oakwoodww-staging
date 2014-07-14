<?php
/*
Plugin Name: Carousel Government
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW carousel for the Government Page
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_emea_slide' );
add_action( 'admin_init', 'my_admin_emea_slide' );
add_action( 'save_post', 'add_emea_slide_fields', 10, 2 );

function create_emea_slide() {
    register_post_type( 'emea_slides',
        array(
            'labels' => array(
                'name' => 'Government Carousel',
                'singular_name' => 'Government Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Government Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Government Slide',
                'new_item' => 'New Government Slide',
                'view' => 'View',
                'view_item' => 'View Government Slide',
                'search_items' => 'Search Government Slides',
                'not_found' => 'No Government Slides found',
                'not_found_in_trash' => 'No Government Slides found in Trash',
                'parent' => 'Parent Government Slides'
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
function my_admin_emea_slide() {
    add_meta_box( 'emea_slide_meta_box',
        'EMEA Slides Details',
        'display_emea_slide_meta_box',
        'emea_slides', 'normal', 'high'
    );
}
?>
<?php
function display_emea_slide_meta_box( $emea_slide ) {
    // Retrieve current blurb based on case study ID
    $emea_slide_blurb = esc_html( get_post_meta( $emea_slide->ID, 'emea_slide_blurb', true ) );
    $emea_slide_photo =esc_html( get_post_meta( $emea_slide->ID, 'emea_slide_photo', true ) );
    $emea_slide_position =esc_html( get_post_meta( $emea_slide->ID, 'emea_slide_position', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="emea_slide_blurb_name" value="<?php echo $emea_slide_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="emea_slide_photo_name" value="<?php echo $emea_slide_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="emea_slide_position_name" value="<?php echo $emea_slide_position; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_emea_slide_fields( $emea_slide_id, $emea_slide ) {
    // Check post type for movie reviews
    if ( $emea_slide->post_type == 'emea_slides' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['emea_slide_blurb_name'] ) && $_POST['emea_slide_blurb_name'] != '' ) {
            update_post_meta( $emea_slide_id, 'emea_slide_blurb', $_POST['emea_slide_blurb_name'] );
        }
        if ( isset( $_POST['emea_slide_photo_name'] ) && $_POST['emea_slide_photo_name'] != '' ) {
            update_post_meta( $emea_slide_id, 'emea_slide_photo', $_POST['emea_slide_photo_name'] );
        }
        if ( isset( $_POST['emea_slide_position_name'] ) && $_POST['emea_slide_position_name'] != '' ) {
            update_post_meta( $emea_slide_id, 'emea_slide_position', $_POST['emea_slide_position_name'] );
        }
    }
}
?>