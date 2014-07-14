<?php
/*
Plugin Name: Carousel Global APAC
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW carousel for Global Section Asia and the Pacific
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_apac_slide' );
add_action( 'admin_init', 'my_admin_apac_slide' );
add_action( 'save_post', 'add_apac_slide_fields', 10, 2 );

function create_apac_slide() {
    register_post_type( 'apac_slides',
        array(
            'labels' => array(
                'name' => 'Global APAC Carousel',
                'singular_name' => 'APAC Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New APAC Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit APAC Slide',
                'new_item' => 'New APAC Slide',
                'view' => 'View',
                'view_item' => 'View APAC Slide',
                'search_items' => 'Search APAC Slides',
                'not_found' => 'No APAC Slides found',
                'not_found_in_trash' => 'No APAC Slides found in Trash',
                'parent' => 'Parent APAC Slides'
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
function my_admin_apac_slide() {
    add_meta_box( 'apac_slide_meta_box',
        'APAC Slides Details',
        'display_apac_slide_meta_box',
        'apac_slides', 'normal', 'high'
    );
}
?>
<?php
function display_apac_slide_meta_box( $apac_slide ) {
    // Retrieve current blurb based on case study ID
    $apac_slide_blurb = esc_html( get_post_meta( $apac_slide->ID, 'apac_slide_blurb', true ) );
    $apac_slide_photo =esc_html( get_post_meta( $apac_slide->ID, 'apac_slide_photo', true ) );
    $apac_slide_position =esc_html( get_post_meta( $apac_slide->ID, 'apac_slide_position', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="apac_slide_blurb_name" value="<?php echo $apac_slide_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="apac_slide_photo_name" value="<?php echo $apac_slide_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="apac_slide_position_name" value="<?php echo $apac_slide_position; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_apac_slide_fields( $apac_slide_id, $apac_slide ) {
    // Check post type for movie reviews
    if ( $apac_slide->post_type == 'apac_slides' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['apac_slide_blurb_name'] ) && $_POST['apac_slide_blurb_name'] != '' ) {
            update_post_meta( $apac_slide_id, 'apac_slide_blurb', $_POST['apac_slide_blurb_name'] );
        }
        if ( isset( $_POST['apac_slide_photo_name'] ) && $_POST['apac_slide_photo_name'] != '' ) {
            update_post_meta( $apac_slide_id, 'apac_slide_photo', $_POST['apac_slide_photo_name'] );
        }
        if ( isset( $_POST['apac_slide_position_name'] ) && $_POST['apac_slide_position_name'] != '' ) {
            update_post_meta( $apac_slide_id, 'apac_slide_position', $_POST['apac_slide_position_name'] );
        }
    }
}
?>