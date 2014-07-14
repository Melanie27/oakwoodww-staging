<?php
/*
Plugin Name: Press Releases
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW press releases
Version: 1.0
Author: Melanie McGanney
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_press_release' );
add_action( 'admin_init', 'my_admin_press_release' );
add_action( 'save_post', 'add_press_release_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_pr', 1 );
add_action( 'init', 'create_my_taxonomies_pr', 0 );

function create_press_release() {
    register_post_type( 'press_releases',
        array(
            'labels' => array(
                'name' => 'Press Releases',
                'singular_name' => 'Press Release',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Press Release',
                'edit' => 'Edit',
                'edit_item' => 'Edit Press Release',
                'new_item' => 'New Press Release',
                'view' => 'View',
                'view_item' => 'View Press Release',
                'search_items' => 'Search Press Releases',
                'not_found' => 'No Press Releases found',
                'not_found_in_trash' => 'No Press Releases found in Trash',
                'parent' => 'Parent Press Release'
            ),
            
       
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'press-releases' ),
        )
    );
}
function my_admin_press_release() {
     add_meta_box( 'press_release_meta_box',
        'Press Release Details',
        'display_press_release_meta_box',
        'press_releases', 'normal', 'high'
    );
}
?>
<?php
function display_press_release_meta_box( $press_release) {
    // Retrieve current name of the Director and Movie Rating based on review ID
    $press_release_subhead = esc_html( get_post_meta( $press_release->ID, 'press_release_subhead', true ) );
    $photo_caption = esc_html( get_post_meta( $press_release->ID, 'photo_caption', true ) );
    $press_release_blurb = esc_html( get_post_meta( $press_release->ID, 'press_release_blurb', true ) );
    $press_release_sticky = esc_html( get_post_meta( $press_release->ID, 'press_release_sticky', true ) );
    $press_release_sticky_story = esc_html( get_post_meta( $press_release->ID, 'press_release_sticky_story', true ) );
    
   
    ?>
    <table>
        <tr>
            <td style="width: 100%">Sub Header</td>
            <td><input type="text" size="80" name="press_release_subhead_name" value="<?php echo $press_release_subhead; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Photo Caption</td>
            <td><input type="text" size="80" name="press_release_caption_name" value="<?php echo $photo_caption; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Blurb</td>
            <td><input type="text" size="80" name="press_release_blurb_name" value="<?php echo $press_release_blurb; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Sticky Story (Yes)</td>
            <td><input type="text" size="80" name="press_release_sticky_name" value="<?php echo $press_release_sticky; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Sticky Story Intro</td>
            <td><input type="text" size="80" name="press_release_sticky_story_name" value="<?php echo $press_release_sticky_story; ?>" /></td>
        </tr>
            </table>
    <?php
}
?>
<?php
function add_press_release_fields( $press_release_id, $press_release ) {
    // Check post type for movie reviews
    if ( $press_release->post_type == 'press_releases' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['press_release_subhead_name'] ) && $_POST['press_release_subhead_name'] != '' ) {
            update_post_meta( $press_release_id, 'press_release_subhead', $_POST['press_release_subhead_name'] );
        }
        if ( isset( $_POST['press_release_caption_name'] ) && $_POST['press_release_caption_name'] != '' ) {
            update_post_meta( $press_release_id, 'photo_caption', $_POST['press_release_caption_name'] );
        }
        if ( isset( $_POST['press_release_blurb_name'] ) && $_POST['press_release_blurb_name'] != '' ) {
            update_post_meta( $press_release_id, 'press_release_blurb', $_POST['press_release_blurb_name'] );
        }
        if ( isset( $_POST['press_release_sticky_name'] ) && $_POST['press_release_sticky_name'] != '' ) {
            update_post_meta( $press_release_id, 'press_release_sticky', $_POST['press_release_sticky_name'] );
        }
        if ( isset( $_POST['press_release_sticky_story_name'] ) && $_POST['press_release_sticky_story_name'] != '' ) {
            update_post_meta( $press_release_id, 'press_release_sticky_story', $_POST['press_release_sticky_story_name'] );
        }

    }
}
?>
<?php
function include_template_function_pr( $template_path ) {
    if ( get_post_type() == 'press_releases' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-press_releases.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-press_releases.php';
            }
        }
        
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-press_releases.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-press_releases.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_pr() {
    register_taxonomy(
        'press_releases_tags',
        'press_releases',
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