<?php
/*
Plugin Name: Carousel Global US
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW carousel for Global Section U.S.
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_us_slide' );
add_action( 'admin_init', 'my_admin_us_slide' );
add_action( 'save_post', 'add_us_slide_fields', 10, 2 );

function create_us_slide() {
    register_post_type( 'us_slides',
        array(
            'labels' => array(
                'name' => 'Global US Carousel',
                'singular_name' => 'US Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New US Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit US Slide',
                'new_item' => 'New US Slide',
                'view' => 'View',
                'view_item' => 'View US Slide',
                'search_items' => 'Search US Slides',
                'not_found' => 'No US Slides found',
                'not_found_in_trash' => 'No US Slides found in Trash',
                'parent' => 'Parent US Slides'
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
function my_admin_us_slide() {
    add_meta_box( 'us_slide_meta_box',
        'US Slides Details',
        'display_us_slide_meta_box',
        'us_slides', 'normal', 'high'
    );
}
?>
<?php
function display_us_slide_meta_box( $us_slide ) {
    // Retrieve current blurb based on case study ID
    $us_slide_blurb = esc_html( get_post_meta( $us_slide->ID, 'us_slide_blurb', true ) );
    $us_slide_photo =esc_html( get_post_meta( $us_slide->ID, 'us_slide_photo', true ) );
    $us_slide_position =esc_html( get_post_meta( $us_slide->ID, 'us_slide_position', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="us_slide_blurb_name" value="<?php echo $us_slide_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="us_slide_photo_name" value="<?php echo $us_slide_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="us_slide_position_name" value="<?php echo $us_slide_position; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_us_slide_fields( $us_slide_id, $us_slide ) {
    // Check post type for movie reviews
    if ( $us_slide->post_type == 'us_slides' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['us_slide_blurb_name'] ) && $_POST['us_slide_blurb_name'] != '' ) {
            update_post_meta( $us_slide_id, 'us_slide_blurb', $_POST['us_slide_blurb_name'] );
        }
        if ( isset( $_POST['us_slide_photo_name'] ) && $_POST['us_slide_photo_name'] != '' ) {
            update_post_meta( $us_slide_id, 'us_slide_photo', $_POST['us_slide_photo_name'] );
        }
        if ( isset( $_POST['us_slide_position_name'] ) && $_POST['us_slide_position_name'] != '' ) {
            update_post_meta( $us_slide_id, 'us_slide_position', $_POST['us_slide_position_name'] );
        }
    }
}
?>