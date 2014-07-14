<!-- begin footer -->

<div style="clear:both;"></div>

	<div id="footer">

    	

		<div class="footertop">

			<p><?php _e("Copyright", 'organicthemes'); ?> &copy; <?php echo date('Y'); ?> &middot; <?php _e("Oakwood Worldwide / The most trusted name in temporary housing. SM", 'organicthemes'); ?> &middot; <?php bloginfo('name'); ?></p>

		</div>

		<div class="footerbottom">

			<p><a href="<?php bloginfo('rss2_url'); ?>" target="_blank">RSS Feed</a> &middot; <?php wp_loginout(); ?></p>

		</div>	

	</div>
    
</div>

<?php do_action('wp_footer'); ?>

<?php echo stripslashes(ot_option('tracking')); // tracking code ?>
</body>

</html>