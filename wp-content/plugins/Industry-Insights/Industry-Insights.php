<?php
/*
Plugin Name: Industry Insights
Plugin URI: http://oakwoodworldwide.com/
Description: Declares a plugin that will create a custom post type displaying OWW Industry Insights articles
Version: 1.0
Author: Melanie McGanney
Author URI: http://oakwoodworldwide.com/
License: GPLv2
*/
add_action( 'init', 'create_industry_insight' );
add_action( 'admin_init', 'my_admin_industry_insight' );
add_action( 'save_post', 'add_industry_insight_fields', 10, 2 );
add_filter( 'template_include', 'include_template_function_ii', 1 );
add_action( 'init', 'create_my_taxonomies_ii', 0 );

function create_industry_insight() {
    register_post_type( 'industry_insights',
        array(
            'labels' => array(
                'name' => 'Industry Insights',
                'singular_name' => 'Industry Insight',
                'add_new' => 'Add New',
                'add_new_item' => 'Add New Industry Insight',
                'edit' => 'Edit',
                'edit_item' => 'Edit Industry Insight',
                'new_item' => 'New Industry Insight',
                'view' => 'View',
                'view_item' => 'View Industry Insight',
                'search_items' => 'Search Industry Insights',
                'not_found' => 'No Industry Insights found',
                'not_found_in_trash' => 'No Industry Insights found in Trash',
                'parent' => 'Parent Industry Insights'
            ),
 
            'public' => true,
            'supports' => array( 'title', 'editor', 'comments', 'thumbnail', 'custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'oww-dashboard.png', __FILE__ ),
            'has_archive' => true,
            'rewrite' => array( 'slug' => 'industry-insights' )
        )
    );
}
function my_admin_industry_insight() {
    add_meta_box( 'industry_insight_meta_box',
        'Industry Insight Details',
        'display_industry_insight_meta_box',
        'industry_insights', 'normal', 'high'
    );
}
?>
<?php
function display_industry_insight_meta_box( $industry_insight ) {
    $industry_insight_blurb = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_blurb', true ) );
    $industry_insight_photo_caption = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_photo_caption', true ) );
    $industry_insight_sticky_story = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_story', true ) );
    $industry_insight_sticky_photo = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_photo', true ) );
    $industry_insight_sticky = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky', true ) );
    $industry_insight_sticky_relocation = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_relocation', true ) );
    $industry_insight_sticky_entertainment = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_entertainment', true ) );
    $industry_insight_sticky_government = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_government', true ) );
    $industry_insight_sticky_individual = esc_html( get_post_meta( $industry_insight->ID, 'industry_insight_sticky_individual', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Blurb</td>
            <td><input type="text" size="80" name="industry_insight_blurb_name" value="<?php echo $industry_insight_blurb; ?>" /></td>
        </tr>
        <tr>
            <td style="width: 100%">Photo Caption</td>
            <td><input type="text" size="80" name="industry_insight_photo_caption_name" value="<?php echo $industry_insight_photo_caption; ?>" /></td>
        </tr>
         <tr>
            <td style="width:100%" height="50px;">Hero Intro</td>
            <td><input type="text" size="80" name="industry_insight_sticky_story_name" value="<?php echo $industry_insight_sticky_story; ?>" /></td>
        </tr>
        <tr>
            <td style="width:100%" height="50px;">Hero Photo</td>
            <td><input type="text" size="80" name="industry_insight_sticky_photo_name" value="<?php echo $industry_insight_sticky_photo; ?>" /></td>
        </tr>
        <tr>
            <td style="width:100%" height="50px;">Is it Sticky?</td>
            <td><input type="text" size="80" name="industry_insight_sticky_name" value="<?php echo $industry_insight_sticky; ?>" /></td>
        </tr>
         <tr>
            <td style="width:100%" height="50px;">Relocation?</td>
            <td><input type="text" size="80" name="industry_insight_sticky_relocation_name" value="<?php echo $industry_insight_sticky_relocation; ?>" /></td>
        </tr>
         <tr>
            <td style="width:100%" height="50px;">Entertainment?</td>
            <td><input type="text" size="80" name="industry_insight_sticky_entertainment_name" value="<?php echo $industry_insight_sticky_entertainment; ?>" /></td>
        </tr>
        <tr>
            <td style="width:100%" height="50px;">Government?</td>
            <td><input type="text" size="80" name="industry_insight_sticky_government_name" value="<?php echo $industry_insight_sticky_government; ?>" /></td>
        </tr>
         <tr>
            <td style="width:100%" height="50px;">Individual?</td>
            <td><input type="text" size="80" name="industry_insight_sticky_individual_name" value="<?php echo $industry_insight_sticky_individual; ?>" /></td>
        </tr>
        
    </table>
    <?php
}
?>
<?php
function add_industry_insight_fields( $industry_insight_id, $industry_insight ) {
    // Check post type for industry insights
    if ( $industry_insight->post_type == 'industry_insights' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['industry_insight_blurb_name'] ) && $_POST['industry_insight_blurb_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_blurb', $_POST['industry_insight_blurb_name'] );
        }
        if ( isset( $_POST['industry_insight_photo_caption_name'] ) && $_POST['industry_insight_photo_caption_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_photo_caption', $_POST['industry_insight_photo_caption_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_story_name'] ) && $_POST['industry_insight_sticky_story_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_story', $_POST['industry_insight_sticky_story_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_photo_name'] ) && $_POST['industry_insight_sticky_photo_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_photo', $_POST['industry_insight_sticky_photo_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_name'] ) && $_POST['industry_insight_sticky_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky', $_POST['industry_insight_sticky_name'] );
        }
         if ( isset( $_POST['industry_insight_sticky_relocation_name'] ) && $_POST['industry_insight_sticky_relocation_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_relocation', $_POST['industry_insight_sticky_relocation_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_entertainment_name'] ) && $_POST['industry_insight_sticky_entertainment_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_entertainment', $_POST['industry_insight_sticky_entertainment_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_government_name'] ) && $_POST['industry_insight_sticky_government_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_government', $_POST['industry_insight_sticky_government_name'] );
        }
        if ( isset( $_POST['industry_insight_sticky_individual_name'] ) && $_POST['industry_insight_sticky_individual_name'] != '' ) {
            update_post_meta( $industry_insight_id, 'industry_insight_sticky_individual', $_POST['industry_insight_sticky_individual_name'] );
        }
    }
}
?>
<?php
function include_template_function_ii( $template_path ) {
    if ( get_post_type() == 'industry_insights' ) {
        if ( is_single() ) {
            // checks if the file exists in the theme first,
            // otherwise serve the file from the plugin
            if ( $theme_file = locate_template( array ( 'single-industry_insights.php' ) ) ) {
                $template_path = $theme_file;
            } else {
                $template_path = plugin_dir_path( __FILE__ ) . '/single-industry_insights.php';
            }
        }
        elseif ( is_archive() ) {
            if ( $theme_file = locate_template( array ( 'archive-industry_insights.php' ) ) ) {
                $template_path = $theme_file;
            } else { $template_path = plugin_dir_path( __FILE__ ) . '/archive-industry_insights.php';
 
            }
        }
    }
    return $template_path;
}
?>
<?php
function create_my_taxonomies_ii() {
    register_taxonomy(
        'industry_insights_industry_type',
        'industry_insights',
        array(
            'labels' => array(
                'name' => 'Industry Type',
                'add_new_item' => 'Add New Industry Type',
                'new_item_name' => "New Industry Type"
            ),
            'show_ui' => true,
            'show_tagcloud' => false,
            'hierarchical' => true
        )
    );
}
?>