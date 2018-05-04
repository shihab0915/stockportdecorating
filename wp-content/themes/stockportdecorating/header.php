<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>

<header class="site-header">
	<nav class="navbar navbar-default">
	  <div class="container">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="<?php echo site_url(); ?>"><?php bloginfo('name'); ?></a>
	    </div>
	    
		<?php
			wp_nav_menu( array(
			    'theme_location'    => 'primary',
			    'depth'             => 2,
			    'container'         => 'div',
			    'container_class'   => 'collapse navbar-collapse',
			    'container_id'      => 'bs-example-navbar-collapse-1',
			    'menu_class'        => 'nav navbar-nav',
			    'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
			    'walker'            => new WP_Bootstrap_Navwalker(),
			) );
		?>
	    
	  </div><!-- /.container -->
	</nav>
</header>


