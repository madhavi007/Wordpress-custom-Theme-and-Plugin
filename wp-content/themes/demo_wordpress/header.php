<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Demo_wordpress
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'demo_wordpress' ); ?></a>

	<header id="masthead" class="site-header">
		<div>
		<div class="logo">
            <a href="http://demo_wordpress.test/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.jpg"/></a>
			<button type="button"
                    class="navbar-toggle offcanvas-toggle"
                    data-toggle="offcanvas"
                    data-target="#js-bootstrap-offcanvas"
                    style="float:left;">
                <span class="sr-only">Toggle Button</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
		<div class="site-name"> Demo Wordpress</div>
		<div class="menu">
        <nav id="site-navigation" class="main-navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'demo_wordpress' ); ?></button>
			<?php
			wp_nav_menu( array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			) );
			?>
		</nav>
		</div>
		</div>
	</header><!-- #masthead -->

	<div id="content" class="site-content">
