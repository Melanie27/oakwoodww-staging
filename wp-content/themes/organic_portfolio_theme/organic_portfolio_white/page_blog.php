<?php
/*
Template Name: Blog
*/
?>

<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
							
			<?php $page = (get_query_var('paged')) ? get_query_var('paged') : 1; query_posts("cat=".ot_option('blog_cat')."&showposts=".ot_option('blog_cat_num')."&paged=$page"); while ( have_posts() ) : the_post() ?>
            
			<div id="blogtitle">
            	<h3><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h3>
            </div>
				
            <div class="postauthor">
            	<p><?php _e("Posted by", 'organicthemes'); ?> <?php the_author_posts_link(); ?> <?php _e("on", 'organicthemes'); ?> <?php the_time('F j, Y'); ?> &middot; <a href="<?php the_permalink(); ?>#comments"><?php comments_number('Leave a Comment', '1 Comment', '% Comments'); ?></a>&nbsp;<?php edit_post_link('(Edit)', '', ''); ?></p>   
            </div>
				
			<!--The blog page is currently using the Limit Post funtion and is currently set to display 400 characters. You can increase this or decreas it as you wish.-->
            
            <?php the_content_limit(400, "Read More"); ?><div style="clear:both;"></div>
            				
			<div class="postmeta">
				<p>
                <?php _e("Tags:", 'organicthemes'); ?> <?php the_tags('') ?>
                </p>
			</div>
							
			<?php endwhile; ?>
            
            <div id="prevLink"><p><?php previous_posts_link(); ?></p></div>
			<div id="nextLink"><p><?php next_posts_link(); ?></p></div>
		
		</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>