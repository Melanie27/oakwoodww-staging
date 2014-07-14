<?php get_header(); ?>

<div id="contenthome">

	<div id="homepagetop">
    
        <?php include(TEMPLATEPATH."/includes/slider.php");?>

    </div>

    <div id="homepage">
            
    	<div class="homepagebox_01">
            <div class="homebox">
                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1"); while($recent->have_posts()) : $recent->the_post();?>
                <?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
                <?php else: ?>	
                <?php endif; ?>				
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <div class="homeboxinfo">
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
            </div>
		</div>
        
        <div class="homepagebox_02">
            <div class="homebox">
                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=1"); while($recent->have_posts()) : $recent->the_post();?>
                <?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
                <?php else: ?>
                <?php endif; ?>	
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <div class="homeboxinfo">
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
            </div>
		</div>
        
        <div class="homepagebox_03">			
            <div class="homebox">
                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=2"); while($recent->have_posts()) : $recent->the_post();?>
                <?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>	
                <?php else: ?>	
                <?php endif; ?>				
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <div class="homeboxinfo">
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
            </div>
		</div>

        <div class="homepagebox_04">
            <div class="homebox">
                <?php $recent = new WP_Query("cat=".ot_option('hp_bottom_cat')."&showposts=1&offset=3"); while($recent->have_posts()) : $recent->the_post();?>
                <?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>	
                <?php else: ?>	
                <?php endif; ?>				
                <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_post_thumbnail( 'home-thumbnail' ); ?></a>
                <div class="homeboxinfo">
                    <h4><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                <?php endwhile; ?>
            </div>
		</div>
        
	</div>

</div>

<?php get_footer(); ?>