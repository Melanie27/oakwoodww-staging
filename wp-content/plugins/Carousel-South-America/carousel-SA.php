<?php
/*
Plugin Name: Carousel Global South America
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW carousel for Global Section South America
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_sa_slide' );
add_action( 'admin_init', 'my_admin_sa_slide' );
add_action( 'save_post', 'add_sa_slide_fields', 10, 2 );

function create_sa_slide() {
    register_post_type( 'sa_slides',
        array(
            'labels' => array(
                'name' => 'Global South America Carousel',
                'singular_name' => 'South America Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New South America Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit South America Slide',
                'new_item' => 'New South America Slide',
                'view' => 'View',
                'view_item' => 'View South America Slide',
                'search_items' => 'Search South America Slides',
                'not_found' => 'No South America Slides found',
                'not_found_in_trash' => 'No South America Slides found in Trash',
                'parent' => 'Parent South America Slides'
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
function my_admin_sa_slide() {
    add_meta_box( 'sa_slide_meta_box',
        'South America Slides Details',
        'display_sa_slide_meta_box',
        'sa_slides', 'normal', 'high'
    );
}
?>
<?php
function display_sa_slide_meta_box( $sa_slide ) {
    // Retrieve current blurb based on case study ID
    $sa_slide_blurb = esc_html( get_post_meta( $sa_slide->ID, 'sa_slide_blurb', true ) );
    $sa_slide_photo =esc_html( get_post_meta( $sa_slide->ID, 'sa_slide_photo', true ) );
    $sa_slide_position =esc_html( get_post_meta( $sa_slide->ID, 'sa_slide_position', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="sa_slide_blurb_name" value="<?php echo $sa_slide_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="sa_slide_photo_name" value="<?php echo $sa_slide_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="sa_slide_position_name" value="<?php echo $sa_slide_position; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_sa_slide_fields( $sa_slide_id, $sa_slide ) {
    // Check post type for movie reviews
    if ( $sa_slide->post_type == 'sa_slides' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['sa_slide_blurb_name'] ) && $_POST['sa_slide_blurb_name'] != '' ) {
            update_post_meta( $sa_slide_id, 'sa_slide_blurb', $_POST['sa_slide_blurb_name'] );
        }
        if ( isset( $_POST['sa_slide_photo_name'] ) && $_POST['sa_slide_photo_name'] != '' ) {
            update_post_meta( $sa_slide_id, 'sa_slide_photo', $_POST['sa_slide_photo_name'] );
        }
        if ( isset( $_POST['sa_slide_position_name'] ) && $_POST['sa_slide_position_name'] != '' ) {
            update_post_meta( $sa_slide_id, 'sa_slide_position', $_POST['sa_slide_position_name'] );
        }
    }
}
?>