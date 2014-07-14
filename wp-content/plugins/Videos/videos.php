<?php
/*
Plugin Name: Videos
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW videos
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_video' );
add_action( 'admin_init', 'my_admin_video' );
add_action( 'save_post', 'add_video_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_v', 1 );

function create_video() {
    register_post_type( 'videos',
        array(
            'labels' => array(
                'name' => 'Videos',
                'singular_name' => 'Video',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Video',
                'edit' => 'Edit',
                'edit_item' => 'Edit Video',
                'new_item' => 'New Video',
                'view' => 'View',
                'view_item' => 'View Video',
                'search_items' => 'Search Video',
                'not_found' => 'No Videos found',
                'not_found_in_trash' => 'No Videos found in Trash',
                'parent' => 'Parent Video'
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
function my_admin_video() {
    add_meta_box( 'video_meta_box',
        'Video Details',
        'display_video_meta_box',
        'videos', 'normal', 'high'
    );
}
?>
<?php
function display_video_meta_box( $video ) {
    // Retrieve current blurb based on video ID
    $video_blurb = esc_html( get_post_meta( $video->ID, 'video_blurb', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Video Blurb</td>
            <td><input type="text" size="80" name="video_blurb_name" value="<?php echo $video_blurb; ?>" /></td>
        </tr>
     </table>
    <?php
}
?>
<?php
function add_video_fields( $video_id, $video ) {
    // Check post type for white papers
    if ( $video->post_type == 'videos' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['video_blurb_name'] ) && $_POST['video_blurb_name'] != '' ) {
            update_post_meta( $video_id, 'video_blurb', $_POST['video_blurb_name'] );
        }
    }
}
?>
<?php
function include_template_function_v( $template_path ) {
    if ( get_post_type() == 'videos' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-videos.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-videos.php';
            }
        }
         elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-videos.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-videos.php';
 
            }
        }
    }
    return $template_path;
}
?>
