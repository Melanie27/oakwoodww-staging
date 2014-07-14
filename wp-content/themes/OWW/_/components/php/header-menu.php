

<header>
	<div class="navbar navbar-default navbar-fixed-top" role="navigation" id="main-nav">
      <section class="container navigation">
        <div class="navbar-header">      
          	<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            	<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		  	<a class="btn find-housing" href="<?php bloginfo('url'); ?>/find-housing/">Find Housing</a>
		  	<a href="<?php bloginfo('url'); ?>" id="logo">
			  	<img src="<?php bloginfo( 'template_directory' ); ?>/images/sitewide/logo-oww.jpg" alt="Oakwood Worldwide Logo"/>
			</a>		
        </div>
        <div class="navbar-collapse collapse in">
			<?php
			wp_nav_menu( array(
				'menu'				=> 'primary',
				'theme_location'	=> 'primary',
				'depth'				=> 3,
				'container'			=> 'div',
				'container_class'	=> '',
				'menu_class'		=> 'nav navbar-nav',
				'fallback_cb'		=> 'wp_bootstrap_navwalker::fallback',
				'walker'			=> new wp_bootstrap_navwalker())
			);
		?>
        </div><!--/.nav-collapse -->
      </section>
    </div><!--navbar-->
</header><!-- header -->

						  
