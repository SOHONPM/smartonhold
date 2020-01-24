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

		<div id="container">

			<!-- <header id="mainHead" class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

				<div id="inner-header" class="wrap cf">
                    <div class="d-1of2 t-1of2 m-all">
                        <div class="logo-con">
                            <a href="<?php echo home_url(); ?>" rel="nofollow"><img src="http://sc.smartonhold.com.au/wp-content/uploads/2015/11/SOHO-Website-Header-November-2015-Part4-02.png"></a>
                        </div>
                    </div>
                    <div class="d-1of2 t-1of2 m-all">
                        <div class="call-con">
                            <a href="tel:+61731170700" rel="nofollow"><img src="http://sc.smartonhold.com.au/wp-content/uploads/2015/11/SOHO-Website-Header-November-2015-Part-02-300x76.png"></a>
                        </div>
                   </div>
				</div>
                <div class="nav-faux">
                   <div class="nav-con" id="nav-con">
                    <div class="wrap cf">
                        <nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
													<div id="bar">
													</div>
                            <?php wp_nav_menu(array(
                                    'container' => false,                           // remove nav container
                                    'container_class' => 'menu cf',                 // class of container (should you choose to use it)
                                    'menu' => __( 'The Main Menu', 'smartonholdtheme' ),  // nav name
                                    'menu_class' => 'nav top-nav cf',               // adding custom nav class
                                    'theme_location' => 'main-nav',                 // where it's located in the theme
                                    'before' => '',                                 // before the menu
                                    'after' => '',                                  // after the menu
                                    'link_before' => '',                            // before each link
                                    'link_after' => '',                             // after each link
                                    'depth' => 0,                                   // limit the depth of the nav
                                    'fallback_cb' => ''                             // fallback function (if there is one)
                            )); ?>

								<div class="searchButton" id="search">
									<a href="#" onclick="navigation.showSearch();" id="searchBut">
									<i class="fa fa-search"></i>
									</a>
								</div>

                        </nav>

                    </div>

                  </div>
									<div class="searchbar" id="searchbar">
										<div class="wrap cf">
											<form method="get" id="searchform" action="<?php bloginfo('home'); ?>/" >
											<div class="form">	<i class="fa fa-search"></i><input type="text" size="18" value="<?php echo wp_specialchars($s, 1); ?>" name="s" id="s" placeholder="Type keywords..." onfocus="this.placeholder =''" onblur="this.placeholder = 'Type keywords...'"/>

											</div>
											</form>
										</div>
									</div>
                  </div>


			</header> -->
