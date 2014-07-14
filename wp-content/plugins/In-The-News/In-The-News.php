<?php
/*
Plugin Name: In The News
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW articles in the news.
Version: 1.0
Author: Melanie McGanney
Author URI: http://wp.tutsplus.com/
License: GPLv2
*/
add_action( 'init', 'create_in_the_news' );
add_action( 'admin_init', 'my_admin_in_the_news' );
add_action( 'save_post', 'add_in_the_news_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_itn', 1 );
add_action( 'init', 'create_my_taxonomies_itn', 0 );

function create_in_the_news() {
    register_post_type( 'in_the_news',
        array(
            'labels' => array(
                'name' => 'In The News',
                'singular_name' => 'In The News Article',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New In The News Article',
                'edit' => 'Edit',
                'edit_item' => 'Edit In The News Article',
                'new_item' => 'New In The News Article',
                'view' => 'View',
                'view_item' => 'View In The News Article',
                'search_items' => 'Search In The News',
                'not_found' => 'No In The News found',
                'not_found_in_trash' => 'No In The News found in Trash',
                'parent' => 'Parent In The News Article'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'in-the-news' ),
        )
    );
}
function my_admin_in_the_news() {
    add_meta_box( 'in_the_news_meta_box',
        'In The News Article Details',
        'display_in_the_news_meta_box',
        'in_the_news', 'normal', 'high'
    );
}
?>
<?php
function display_in_the_news_meta_box( $in_the_news ) {
    // Retrieve article link
    $article_link = esc_html( get_post_meta( $in_the_news->ID, 'article_link', true ) );
    $source_name = esc_html( get_post_meta( $in_the_news->ID, 'source_name', true ) );
    $article_subhead = esc_html( get_post_meta( $in_the_news->ID, 'article_subhead', true ) );
    $in_the_news_blurb = esc_html( get_post_meta( $in_the_news->ID, 'in_the_news_blurb', true ) );
    $in_the_news_sticky = esc_html( get_post_meta( $in_the_news->ID, 'in_the_news_sticky', true ) );
    $in_the_news_sticky_story = esc_html( get_post_meta( $in_the_news->ID, 'in_the_news_sticky_story', true ) );
    
    ?>
    <table>
        <tr>
            <td style="width: 100%">Article Link</td>
            <td><input type="text" size="80" name="article_link_name" value="<?php echo $article_link; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Source Name</td>
            <td><input type="text" size="80" name="source_name_name" value="<?php echo $source_name; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Article Subhead</td>
            <td><input type="text" size="80" name="article_subhead_name" value="<?php echo $article_subhead; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Blurb</td>
            <td><input type="text" size="80" name="in_the_news_blurb_name" value="<?php echo $in_the_news_blurb; ?>" /></td>
        </tr>
         <tr>
            <td style="width: 100%">Sticky Story (yes)</td>
            <td><input type="text" size="80" name="in_the_news_sticky_name" value="<?php echo $in_the_news_sticky; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Sticky Story Intro</td>
            <td><input type="text" size="80" name="in_the_news_sticky_story_name" value="<?php echo $in_the_news_sticky_story; ?>" /></td>
        </tr>
        
    </table>
    <?php
}
?>
<?php
function add_in_the_news_fields( $in_the_news_id, $in_the_news ) {
    // Check post type for movie reviews
    if ( $in_the_news->post_type == 'in_the_news' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['article_link_name'] ) && $_POST['article_link_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'article_link', $_POST['article_link_name'] );
        }
        if ( isset( $_POST['source_name_name'] ) && $_POST['source_name_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'source_name', $_POST['source_name_name'] );
        }
        if ( isset( $_POST['article_subhead_name'] ) && $_POST['article_subhead_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'article_subhead', $_POST['article_subhead_name'] );
        }
        if ( isset( $_POST['in_the_news_blurb_name'] ) && $_POST['in_the_news_blurb_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'in_the_news_blurb', $_POST['in_the_news_blurb_name'] );
        }
        if ( isset( $_POST['in_the_news_sticky_name'] ) && $_POST['in_the_news_sticky_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'in_the_news_sticky', $_POST['in_the_news_sticky_name'] );
        }
        if ( isset( $_POST['in_the_news_sticky_story_name'] ) && $_POST['in_the_news_sticky_story_name'] != '' ) {
            update_post_meta( $in_the_news_id, 'in_the_news_sticky_story', $_POST['in_the_news_sticky_story_name'] );
        }
    }
}
?>
<?php
function include_template_function_itn( $template_path ) {
    if ( get_post_type() == 'in_the_news' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-in-the-news.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-in-the-news.php';
            }
        }
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-in-the-news.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-in-the-news.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_itn() {
    register_taxonomy(
        'in_the_news_years',
        'in_the_news',
        array(
            'labels' => array(
                'name' => 'Year Published',
                'add_new_item' => 'Add New Year',
                'new_item_name' => "New Year"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
?>