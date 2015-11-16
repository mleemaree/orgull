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
		<script src=" <?php echo get_template_directory_uri(); ?>/library/bower_components/bootstrap/dist/js/bootstrap.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.18.0/TweenMax.min.js"></script>
		<!--<script src="<?php echo get_template_directory_uri(); ?>/library/js/libs/alton/jquery.alton.js"></script>-->
		<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/waypoints/lib/jquery.waypoints.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/skrollr/dist/skrollr.min.js"></script>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

	</head>

	<body <?php body_class(); ?>>

		<div id="menu-container">

			<div id="inner-header">
				<ul class="social-icons ment">
			        <li id="facebook"><a href="https://www.facebook.com/orgullpages/">
			        	<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
							 width="8.301px" height="16px" viewBox="0 0 8.301 16" style="enable-background:new 0 0 8.301 16;" xml:space="preserve">
						<g>
							<defs>
								<rect id="SVGID_1_" x="0" width="8.301" height="16"/>
							</defs>
							<clipPath id="SVGID_2_">
								<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
							</clipPath>
							<path style="clip-path:url(#SVGID_2_);fill:#333333;" d="M6.114,0C5,0,4.11,0.327,3.444,0.982C2.778,1.636,2.446,2.561,2.446,3.755
								v2.101H0v2.842h2.446V16h2.945V8.698h2.445l0.379-2.842H5.391V4.03c0-0.459,0.097-0.803,0.292-1.033
								c0.196-0.23,0.569-0.345,1.12-0.345h1.498V0.121C7.785,0.04,7.055,0,6.114,0"/>
						</g>
						</svg>
			        </a></li>
			        <li id="twitter"><a href="https://www.facebook.com/orgullpages-t/" >
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
			        </a></li>
			        <li><a href="https://www.facebook.com/orgullpages-i/" class="has-svg"><object data="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" type="image/svg+xml"></object></a></li>    
			    </ul>
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

				<!-- Modal fullscreen -->
<div class="modal modal-fullscreen fade bottom" id="modal-fullscreen" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-body search-body">
        <?php get_search_form(); ?>
      </div>
  </div>
</div>

<div id="cookies" class="container-fluid">
	<div class="row">
			<div class="eye pull-left">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="31.748px" height="31.748px" viewBox="0 0 31.748 31.748" enable-background="new 0 0 31.748 31.748" xml:space="preserve">
				<g>
					<path fill="#333333" d="M15.874,31.374c-8.547,0-15.5-6.953-15.5-15.5s6.953-15.5,15.5-15.5s15.5,6.953,15.5,15.5
						S24.421,31.374,15.874,31.374z M15.874,1.374c-7.995,0-14.5,6.505-14.5,14.5s6.505,14.5,14.5,14.5s14.5-6.505,14.5-14.5
						S23.869,1.374,15.874,1.374z"/>
					<path fill="#333333" d="M15.874,23.938c-5.012,0-9.531-3.172-11.244-7.894l-0.062-0.17l0.062-0.17
						c1.713-4.722,6.232-7.894,11.245-7.894c5.011,0,9.529,3.172,11.243,7.894l0.062,0.17l-0.062,0.17
						C25.404,20.766,20.886,23.938,15.874,23.938z M5.634,15.874c1.616,4.233,5.708,7.064,10.24,7.064c4.532,0,8.624-2.831,10.24-7.064
						c-1.616-4.233-5.708-7.064-10.239-7.064C11.342,8.809,7.25,11.64,5.634,15.874z M15.875,18.874c-1.654,0-3-1.346-3-3s1.346-3,3-3
						s3,1.346,3,3S17.529,18.874,15.875,18.874z M15.875,13.874c-1.103,0-2,0.897-2,2s0.897,2,2,2s2-0.897,2-2
						S16.978,13.874,15.875,13.874z"/>
				</g>
				</svg>

			</div>
			<div class="text"><span>
				En aquest web fem servir galetes pròpies i de tercers per millorar els nostres 
				serveis i mostrar-vos informació relacionada amb les vostres preferències mitjançant 
				l’anàlisi dels vostres hàbits de navegació.  Si continueu navegant, considerem que 
				n’accepteu l’ús. podeu canviar la configuració o obtenir més informació <a href="">aquí.</a>
			</span></div>
			<div id="cookie-close pull-right">
				<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="19.843px" height="19.842px" viewBox="0 0 19.843 19.842" enable-background="new 0 0 19.843 19.842" xml:space="preserve">
				<g>
					
						<rect x="-1.475" y="8.922" transform="matrix(0.7071 0.7071 -0.7071 0.7071 9.9215 -4.109)" fill="#333333" width="22.791" height="2"/>
					
						<rect x="8.921" y="-1.476" transform="matrix(0.7071 0.7071 -0.7071 0.7071 9.9212 -4.1096)" fill="#333333" width="2" height="22.793"/>
				</g>
				</svg>

		</div>
	</div>
	
</div>

