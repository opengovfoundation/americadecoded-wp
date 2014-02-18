<!doctype html>
<!--                           _             _____                      _          _
     /\                       (_)           |  __ `.                   | |        | |
    /  \   _ __ ___   ___ _ __ _  ___ __ _  | |  | | ___  ___  ___   __| | ___  __| |
   / /\ \ | `_ ` _ `./ _ \ `__| |/ __/ _` | | |  | |/ _ \/ __.' _ `./ _` |/ _ \/ _` |
  / ____ \| | | | | |  __/ |  | | (_| (_| | | |__| |  __/ (_ | (_) | (_| |  __/ (_| |
 /_/    \_\_| |_| |_|\___|_|  |_|\___\__,_| |_____,'\___'\___'.___.'\__,_|\___|\__,_| -->

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">

		<?php // Google Chrome Frame for IE ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

		<script>var urlbase = '<?php print get_stylesheet_directory_uri() . '/static/' ?>';</script>



	</head>

	<body <?php body_class(); ?>>

	<header id="main-nav1" class="main-header navbar navbar-fixed-top" role="banner">
		<div class="container">
			<div class="navbar-header">
				<a href="/">
					<hgroup class="navbar-brand">
						<h1>America <span class="dec">Decoded</span></h1>
					</hgroup>
				</a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav navbar-right social-links">
					<li class="facebook-link">
							<a href=""><i class="fa fa-facebook"></i>Facebook</a>
					</li>
					<li class="twitter-link">
						<a href=""><i class="fa fa-twitter"></i>Twitter</a>
					</li>
					<li class="tumblr-link">
						<a href=""><i class="fa fa-tumblr"></i>Tumblr</a>
					</li>
				</ul>
				<ul class="nav navbar-nav navbar-right site-nav">
					<?php wp_nav_menu(array('theme_location' => 'main-nav', 'items_wrap' => '%3$s', 'container' => '')) ?>
				</ul>
			</nav>
		</div>
	</header>
	<div class="main">
