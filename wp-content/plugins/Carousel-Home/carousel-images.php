<?php
/*
Plugin Name: Carousel Homepage
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW case studies
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_carousel_image' );
add_action( 'admin_init', 'my_admin_carousel_image' );
add_action( 'save_post', 'add_carousel_image_fields', 10, 2 );

function create_carousel_image() {
    register_post_type( 'carousel_images',
        array(
            'labels' => array(
                'name' => 'Home Page Carousel',
                'singular_name' => 'Carousel Image',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Carousel Image',
                'edit' => 'Edit',
                'edit_item' => 'Edit Carousel Image',
                'new_item' => 'New Carousel Image',
                'view' => 'View',
                'view_item' => 'View Carousel Image',
                'search_items' => 'Search Carousel Images',
                'not_found' => 'No Carousel Images found',
                'not_found_in_trash' => 'No Carousel Images found in Trash',
                'parent' => 'Parent Carousel Image'
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
function my_admin_carousel_image() {
    add_meta_box( 'carousel_image_meta_box',
        'Carousel Image Details',
        'display_carousel_image_meta_box',
        'carousel_images', 'normal', 'high'
    );
}
?>
<?php
function display_carousel_image_meta_box( $carousel_image ) {
    // Retrieve current blurb based on case study ID
    $carousel_image_blurb = esc_html( get_post_meta( $carousel_image->ID, 'carousel_image_blurb', true ) );
    $carousel_image_photo =esc_html( get_post_meta( $carousel_image->ID, 'carousel_image_photo', true ) );
    $carousel_image_position =esc_html( get_post_meta( $carousel_image->ID, 'carousel_image_position', true ) );
    $_article_link = esc_html( get_post_meta( $carousel_image->ID, 'article_link', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Carousel Image Blurb</td>
            <td><input type="text" size="80" name="carousel_image_blurb_name" value="<?php echo $carousel_image_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Carousel Image</td>
            <td><input type="text" size="80" name="carousel_image_photo_name" value="<?php echo $carousel_image_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="carousel_image_position_name" value="<?php echo $carousel_image_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Number (1, 2 or 3)</td>
            <td><input type="text" size="80" name="carousel_image_position_name" value="<?php echo $carousel_image_position; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Slide Link</td>
            <td><input type="text" size="80" name="article_link_name" value="<?php echo $article_link; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_carousel_image_fields( $carousel_image_id, $carousel_image ) {
    // Check post type for movie reviews
    if ( $carousel_image->post_type == 'carousel_images' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['carousel_image_blurb_name'] ) && $_POST['carousel_image_blurb_name'] != '' ) {
            update_post_meta( $carousel_image_id, 'carousel_image_blurb', $_POST['carousel_image_blurb_name'] );
        }
        if ( isset( $_POST['carousel_image_photo_name'] ) && $_POST['carousel_image_photo_name'] != '' ) {
            update_post_meta( $carousel_image_id, 'carousel_image_photo', $_POST['carousel_image_photo_name'] );
        }
        if ( isset( $_POST['carousel_image_position_name'] ) && $_POST['carousel_image_position_name'] != '' ) {
            update_post_meta( $carousel_image_id, 'carousel_image_position', $_POST['carousel_image_position_name'] );
        }
        if ( isset( $_POST['article_link_name'] ) && $_POST['article_link_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'article_link', $_POST['article_link_name'] );
        }
    }
}
?>