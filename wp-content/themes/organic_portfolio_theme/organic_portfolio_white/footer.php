<!-- begin footer -->

<div style="clear:both;"></div>

	<div id="footer">

    	<div class="footerright">
			<a href="http://www.organicthemes.com" target="_blank"><img style="margin-bottom: 3px;" src="<?php bloginfo('template_url'); ?>/images/footer_logo.png" alt="<?php _e("Organic Themes",'organicthemes'); ?>" /></a>
        </div>

		<div class="footertop">

			<p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("All Rights Reserved", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>

		</div>

		<div class="footerbottom">

			<p><a href="http://www.organicthemes.com/themes/portfolio-theme/" target="_blank"><?php _e("Portfolio Theme", 'organicthemes'); ?></a> <?php _e("by", 'organicthemes'); ?> <a href="http://www.organicthemes.com" target="_blank"><?php _e("Organic Themes", 'organicthemes'); ?></a> &middot; <a href="<?php bloginfo('rss2_url'); ?>" target="_blank">RSS Feed</a> &middot; <?php wp_loginout(); ?></p>

		</div>	

	</div>
    
</div>

<?php do_action('wp_footer'); ?>

<?php echo stripslashes(ot_option('tracking')); // tracking code ?>
</body>

</html>