<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->
<!--[if lt IE 9]>
    <script src="<?php echo get_template_directory_uri(); ?>/library/js/html5shiv.js"></script>
<![endif]-->

	<head>
		<meta charset="utf-8">
		<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> -->
		<!-- <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet"> -->
		<?php // force Internet Explorer to use the latest rendering engine available ?>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">

		<title><?php wp_title(''); ?></title>

		<?php // mobile meta (hooray!) ?>
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1"/>

		<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<?php // or, set /favicon.ico for IE10 win ?>
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">
        <meta name="theme-color" content="#121212">

		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php // wordpress head functions ?>
		<?php wp_head(); ?>
		<?php // end of wordpress head ?>

		<?php // drop Google Analytics Here ?>
		<?php // end analytics ?>

	</head>

	<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<!-- Skyrocket Wrapper -->		
	<div class="skyrocket-wrapper">

		<header id="mainHead" class="header-skyrocket" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div class="container">

				<div class="row">
					
					<div class="col-md-3">

						 <div class="skyrocket-logo">
	                		
							<a href="<?php echo site_url() ?>"><?php themezero_get_logo() ?></a>

		                </div>

					</div>

					<div class="col-md-7">

							<div class="skyrocket-tagline">

								<h1><span style="color:#808080;">Discover How To Get More Sales, Enhance Your</span></h1>
								<h2><span style="color:#009dcd;">Brand and Stop Customers Hanging Up On You</span></h2>

							</div>

					</div>

					<div class="col-md-2">
						
						<div class="cta-btn">
							
							<div class="skyrocket-callnow">

								<i class="fa fa-phone-square"></i> CALL US NOW

							</div>

							<div class="skyrocket-numb">

								<a href="tel:+61731170700" rel="nofollow">1300 467 646</a>

							</div>

						</div>
							

					</div>

				</div>

			</div>

		</header>
