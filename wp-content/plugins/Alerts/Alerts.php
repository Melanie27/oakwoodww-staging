<?php
/*
Plugin Name: Alerts
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW press releases
Version: 1.0
Author: Melanie McGanney
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_alert' );
add_action( 'admin_init', 'my_admin_alert' );
add_action( 'save_post', 'add_alert_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_al', 1 );
add_action( 'init', 'create_my_taxonomies_al', 0 );

function create_alert() {
    register_post_type( 'alerts',
        array(
            'labels' => array(
                'name' => 'Alerts',
                'singular_name' => 'Alert',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Alert',
                'edit' => 'Edit',
                'edit_item' => 'Edit Alert',
                'new_item' => 'New Alert',
                'view' => 'View',
                'view_item' => 'View Alert',
                'search_items' => 'Search Alert',
                'not_found' => 'No Alerts found',
                'not_found_in_trash' => 'No Alerts found in Trash',
                'parent' => 'Parent Alert'
            ),
            
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true
        )
    );
}
function my_admin_alert() {
     add_meta_box( 'alert_meta_box',
        'Alert Details',
        'display_alert_meta_box',
        'alerts', 'normal', 'high'
    );
}
?>
<?php
function display_alert_meta_box( $alert) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $alert_subhead = esc_html( get_post_meta( $alert->ID, 'alert_subhead', true ) );
    $photo_caption = esc_html( get_post_meta( $alert->ID, 'photo_caption', true ) );
    $alert_blurb = esc_html( get_post_meta( $alert->ID, 'alert_blurb', true ) );
    $alert_sticky = esc_html( get_post_meta( $alert->ID, 'alert_sticky', true ) );
    $alert_sticky_story = esc_html( get_post_meta( $alert->ID, 'alert_sticky_story', true ) );
    
   
    ?>
    <table>
        <tr>
            <td style="width: 100%">Sub Header</td>
            <td><input type="text" size="80" name="alert_subhead_name" value="<?php echo $alert_subhead; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Photo Caption</td>
            <td><input type="text" size="80" name="alert_caption_name" value="<?php echo $photo_caption; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Blurb</td>
            <td><input type="text" size="80" name="alert_blurb_name" value="<?php echo $alert_blurb; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Sticky Story (Yes)</td>
            <td><input type="text" size="80" name="alert_sticky_name" value="<?php echo $alert_sticky; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Sticky Story Intro</td>
            <td><input type="text" size="80" name="alert_sticky_story_name" value="<?php echo $alert_sticky_story; ?>" /></td>
        </tr>
            </table>
    <?php
}
?>
<?php
function add_alert_fields( $alert_id, $alert ) {
    // Check post type for movie reviews
    if ( $alert->post_type == 'alerts' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['alert_subhead_name'] ) && $_POST['alert_subhead_name'] != '' ) {
            update_post_meta( $alert_id, 'alert_subhead', $_POST['alert_subhead_name'] );
        }
        if ( isset( $_POST['alert_caption_name'] ) && $_POST['alert_caption_name'] != '' ) {
            update_post_meta( $alert_id, 'photo_caption', $_POST['alert_caption_name'] );
        }
        if ( isset( $_POST['alert_blurb_name'] ) && $_POST['alert_blurb_name'] != '' ) {
            update_post_meta( $alert_id, 'alert_blurb', $_POST['alert_blurb_name'] );
        }
        if ( isset( $_POST['alert_sticky_name'] ) && $_POST['alert_sticky_name'] != '' ) {
            update_post_meta( $alert_id, 'alert_sticky', $_POST['alert_sticky_name'] );
        }
        if ( isset( $_POST['alert_sticky_story_name'] ) && $_POST['alert_sticky_story_name'] != '' ) {
            update_post_meta( $alert_id, 'alert_sticky_story', $_POST['alert_sticky_story_name'] );
        }

    }
}
?>
<?php
function include_template_function_al( $template_path ) {
    if ( get_post_type() == 'alerts' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-alerts.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-alerts.php';
            }
        }
        
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-alerts.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-alerts.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_al() {
    register_taxonomy(
        'alerts_tags',
        'alerts',
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