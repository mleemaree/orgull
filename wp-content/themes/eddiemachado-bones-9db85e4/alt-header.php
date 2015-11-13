<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' />

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


		<!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bower_components/bootstrap/dist/css/bootstrap.min.css">

		<!-- Optional theme -->
		<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/library/bower_components/bootstrap/dist/css/bootstrap-theme.min.css">

		<!--fullpage.jks ======-->

		

		<!-- Latest compiled and minified JavaScript -->
		<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/jquery/dist/jquery.min.js"></script>
		<script src=" <?php echo get_template_directory_uri(); ?>/library/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
		<!--<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/alton/jquery.alton.js"></script>-->
		<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/skrollr/dist/skrollr.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	</head>

	<body <?php body_class(); ?>>

		<div id="menu-container">

				<div id="inner-header">
				<div class="social-icons">
			        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook-im.svg" type="image/svg+xml"></object></a>
			        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" >
			                <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
			                     width="17.01px" height="13.819px" viewBox="0 0 17.01 13.819" enable-background="new 0 0 17.01 13.819" xml:space="preserve">
			                <g>
			                    <path fill="#333333" d="M14.841,2.299c0.743-0.452,1.24-1.083,1.492-1.889c-0.667,0.403-1.385,0.68-2.153,0.831
			                        c-0.668-0.717-1.499-1.076-2.493-1.076c-0.932,0.012-1.732,0.346-2.399,1.001C8.621,1.821,8.288,2.62,8.288,3.565
			                        c0,0.252,0.031,0.509,0.094,0.773C6.972,4.276,5.662,3.931,4.453,3.3C3.245,2.671,2.211,1.833,1.355,0.788
			                        c-0.315,0.529-0.472,1.095-0.472,1.7c0,0.604,0.138,1.152,0.415,1.643C1.576,4.622,1.946,5.025,2.414,5.34
			                        C1.858,5.315,1.342,5.17,0.865,4.906v0.037c0,0.831,0.258,1.556,0.774,2.173C2.154,7.733,2.81,8.123,3.603,8.287
			                        C3.3,8.362,2.999,8.4,2.696,8.4c-0.189,0-0.403-0.012-0.642-0.038c0.226,0.693,0.629,1.253,1.208,1.681
			                        c0.58,0.429,1.241,0.655,1.984,0.681c-1.234,0.97-2.645,1.454-4.231,1.454c-0.302,0-0.573-0.019-0.812-0.057
			                        c1.574,1.021,3.311,1.53,5.213,1.53c1.221,0.024,2.361-0.164,3.419-0.567c1.057-0.402,1.964-0.919,2.719-1.549
			                        c0.756-0.629,1.404-1.366,1.946-2.21c0.541-0.843,0.944-1.718,1.209-2.625c0.264-0.907,0.396-1.82,0.396-2.739V3.527
			                        c0.668-0.491,1.234-1.077,1.7-1.757C16.15,2.047,15.497,2.224,14.841,2.299"/>
			                </g>
			                </svg>
			        </a>
			        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" type="image/svg+xml"></object></a>       
			    </div>

					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo get_option('home'); ?>" id="mc-log" class="has-svg">
						<object id="menu-logo" class="menu-logo pull-left" data="<?php echo get_template_directory_uri(); ?>/library/images/menu-logo.svg" type="image/svg+xml"></object>
					</a>


					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>


					<nav class="nav pull-right menu-lines" role="navigation">


						<?php    /**
							* Displays a navigation menu
							* @param array $args Arguments
							*/
							$args = array(
								'theme_location' => '',
								'menu' => '',
								'container' => 'nav',
								'container_id' => 'main-menu',
								'menu_class' => 'menu',
								'menu_id' => 'main',
								'fallback_cb' => 'wp_page_menu',
								'depth' => 0
							);
						
							wp_nav_menu( $args ); ?>

					</nav>

				</div>
				</div>




