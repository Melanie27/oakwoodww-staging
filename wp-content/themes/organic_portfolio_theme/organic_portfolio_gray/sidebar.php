<!-- begin right sidebar -->

<div id="sidebar">

	<?php if(ot_option('side_feedburner') == 'Yes') { ?>

    <div class="subscribe">
        <h4><?php _e("Subscribe", 'organicthemes'); ?></h4>
        <p><?php _e("Receive news and updates from us.", 'organicthemes'); ?></p><form style="border:1px solid #ccc;padding:5px;text-align:center;" action="http://feedburner.google.com/fb/a/mailverify" method="post" target="popupwindow" onsubmit="window.open('http://feedburner.google.com/fb/a/mailverify?uri=HiTechStudiosOfGreatNeck', 'popupwindow', 'scrollbars=yes,width=550,height=520');return true"><p>Enter your email address:</p><p><input type="text" style="width:140px;margin:5px" name="email"/></p><input type="hidden" value="HiTechStudiosOfGreatNeck" name="uri"/><input type="hidden" name="loc" value="en_US"/><input type="submit" value="Subscribe" /></form>
    </div>
    
    <?php } else { ?>
    <?php } ?>
 
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar') ) : ?>
    	
		<div class="widget">
            <h4>Widget Area</h4>
            <p>This section is widgetized. To add widgets here, go to the <a href="<?php echo admin_url(); ?>widgets.php">Widgets</a> panel in your WordPress admin, and add the widgets you would like to <strong>Sidebar</strong>.</p>
            <p><small>*This message will be overwritten after widgets have been added</small></p>
        </div>
		
	<?php endif; ?>
    
</div>

<!-- end right sidebar -->