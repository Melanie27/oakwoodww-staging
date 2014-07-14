<?php
/*
Plugin Name: Awards Page Carousel
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying the awards page carousel
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_carousel_award' );
add_action( 'admin_init', 'my_admin_carousel_award' );
add_action( 'save_post', 'add_carousel_award_fields', 10, 2 );
function create_carousel_award() {
    register_post_type( 'carousel_awards',
        array(
            'labels' => array(
                'name' => 'Awards Carousel Slides',
                'singular_name' => 'Award Slide',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Award Slide',
                'edit' => 'Edit',
                'edit_item' => 'Edit Award Slide',
                'new_item' => 'New Award Slide',
                'view' => 'View',
                'view_item' => 'View Award Slide',
                'search_items' => 'Search Award Slide',
                'not_found' => 'No Award Slides found',
                'not_found_in_trash' => 'No Award Slides found in Trash',
                'parent' => 'Parent Award Slide'
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
function my_admin_carousel_award() {
    add_meta_box( 'carousel_award_meta_box',
        'Carousel Award Details',
        'display_carousel_award_meta_box',
        'carousel_awards', 'normal', 'high'
    );
}
?>
<?php
function display_carousel_award_meta_box( $carousel_award ) {
    // Retrieve current blurb based on case study ID
    $carousel_award_blurb = esc_html( get_post_meta( $carousel_award->ID, 'carousel_award_blurb', true ) );
    $carousel_award_photo =esc_html( get_post_meta( $carousel_award->ID, 'carousel_award_photo', true ) );
    $carousel_award_position =esc_html( get_post_meta( $carousel_award->ID, 'carousel_award_position', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="carousel_award_blurb_name" value="<?php echo $carousel_award_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="carousel_award_photo_name" value="<?php echo $carousel_award_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Image Position (1 or 2)</td>
            <td><input type="text" size="80" name="carousel_award_position_name" value="<?php echo $carousel_award_position; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_carousel_award_fields( $carousel_award_id, $carousel_award ) {
    // Check post type for movie reviews
    if ( $carousel_award->post_type == 'carousel_awards' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['carousel_award_blurb_name'] ) && $_POST['carousel_award_blurb_name'] != '' ) {
            update_post_meta( $carousel_award_id, 'carousel_award_blurb', $_POST['carousel_award_blurb_name'] );
        }
        if ( isset( $_POST['carousel_award_photo_name'] ) && $_POST['carousel_award_photo_name'] != '' ) {
            update_post_meta( $carousel_award_id, 'carousel_award_photo', $_POST['carousel_award_photo_name'] );
        }
        if ( isset( $_POST['carousel_award_position_name'] ) && $_POST['carousel_award_position_name'] != '' ) {
            update_post_meta( $carousel_award_id, 'carousel_award_position', $_POST['carousel_award_position_name'] );
        }
    }
}
?>