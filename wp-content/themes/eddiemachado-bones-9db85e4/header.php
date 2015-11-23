<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?> class="no-js"><!--<![endif]-->

	<head>
		<meta charset="utf-8">
		<meta name='viewport' content='width=device-width, initial-scale=1, maximum-scale=1'/>

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
			        <li id="twitter"><a href="https://twitter.com/orgullpages" >
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
			        <li id="instagram" onclick="location.href = 'https://instagram.com/orgullpages/'">
			        	<a id="i-link" style ="display:block; z-index:6;" href="https://instagram.com/orgullpages/">
			        		<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
								 width="14.231px" height="14.247px" viewBox="0 0 14.231 14.247" style="enable-background:new 0 0 14.231 14.247;"
								 xml:space="preserve">
							<g>
								<defs>
									<rect id="SVGID_1_" x="0" y="0" width="14.231" height="14.247"/>
								</defs>
								<clipPath id="SVGID_2_">
									<use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
								</clipPath>
								<path style="clip-path:url(#SVGID_2_);fill:#333333;" d="M13.699,0.548C13.334,0.183,12.902,0,12.404,0H1.827
									C1.318,0.011,0.886,0.194,0.532,0.548C0.178,0.903,0.001,1.329,0.001,1.827V12.42c-0.011,0.488,0.166,0.914,0.531,1.279
									s0.797,0.548,1.295,0.548h10.577c0.509-0.011,0.941-0.194,1.295-0.548s0.532-0.78,0.532-1.279V1.827
									C14.242,1.34,14.065,0.914,13.699,0.548 M12.437,4.218C12.315,4.34,12.166,4.4,11.989,4.4h-1.627c-0.177,0-0.327-0.06-0.448-0.182
									C9.792,4.096,9.731,3.941,9.731,3.753V2.225c0-0.177,0.061-0.326,0.183-0.448c0.121-0.122,0.271-0.183,0.448-0.183h1.627
									c0.177-0.011,0.326,0.05,0.448,0.183c0.122,0.133,0.183,0.282,0.183,0.448v1.528C12.62,3.941,12.559,4.096,12.437,4.218 M9.15,9.05
									C8.596,9.592,7.921,9.863,7.124,9.863c-0.764,0-1.434-0.271-2.009-0.813C4.539,8.507,4.257,7.854,4.268,7.09
									c0.011-0.763,0.293-1.416,0.847-1.959c0.553-0.542,1.223-0.814,2.009-0.814S8.585,4.589,9.15,5.131
									C9.714,5.674,9.997,6.327,9.997,7.09C9.985,7.854,9.703,8.507,9.15,9.05 M12.454,12.437c-0.111,0.111-0.244,0.166-0.398,0.166
									H2.159c-0.166,0-0.304-0.055-0.415-0.166s-0.166-0.243-0.166-0.398V6.028H2.89C2.768,6.415,2.707,6.819,2.707,7.24
									c0,1.184,0.432,2.197,1.295,3.038c0.864,0.842,1.904,1.262,3.122,1.262c0.808,0,1.55-0.193,2.225-0.581
									c0.675-0.387,1.212-0.907,1.611-1.561c0.398-0.653,0.597-1.372,0.597-2.158c0-0.421-0.061-0.825-0.182-1.212h1.245v6.011
									C12.62,12.194,12.565,12.326,12.454,12.437"/>
							</g>
							<g>
								<defs>
									<rect id="SVGID_3_" x="0" y="0" width="14.231" height="14.247"/>
								</defs>
								<clipPath id="SVGID_4_">
									<use xlink:href="#SVGID_3_"  style="overflow:visible;"/>
								</clipPath>
								<path style="clip-path:url(#SVGID_4_);fill:#333333;" d="M13.699,0.548C13.334,0.183,12.902,0,12.404,0H1.827
									C1.318,0.011,0.886,0.194,0.532,0.548C0.178,0.903,0.001,1.329,0.001,1.827V12.42c-0.011,0.488,0.166,0.914,0.531,1.279
									s0.797,0.548,1.295,0.548h10.577c0.509-0.011,0.941-0.194,1.295-0.548s0.532-0.78,0.532-1.279V1.827
									C14.242,1.34,14.065,0.914,13.699,0.548 M12.437,4.218C12.315,4.34,12.166,4.4,11.989,4.4h-1.627c-0.177,0-0.327-0.06-0.448-0.182
									C9.792,4.096,9.731,3.941,9.731,3.753V2.225c0-0.177,0.061-0.326,0.183-0.448c0.121-0.122,0.271-0.183,0.448-0.183h1.627
									c0.177-0.011,0.326,0.05,0.448,0.183c0.122,0.133,0.183,0.282,0.183,0.448v1.528C12.62,3.941,12.559,4.096,12.437,4.218 M9.15,9.05
									C8.596,9.592,7.921,9.863,7.124,9.863c-0.764,0-1.434-0.271-2.009-0.813C4.539,8.507,4.257,7.854,4.268,7.09
									c0.011-0.763,0.293-1.416,0.847-1.959c0.553-0.542,1.223-0.814,2.009-0.814S8.585,4.589,9.15,5.131
									C9.714,5.674,9.997,6.327,9.997,7.09C9.985,7.854,9.703,8.507,9.15,9.05 M12.454,12.437c-0.111,0.111-0.244,0.166-0.398,0.166
									H2.159c-0.166,0-0.304-0.055-0.415-0.166s-0.166-0.243-0.166-0.398V6.028H2.89C2.768,6.415,2.707,6.819,2.707,7.24
									c0,1.184,0.432,2.197,1.295,3.038c0.864,0.842,1.904,1.262,3.122,1.262c0.808,0,1.55-0.193,2.225-0.581
									c0.675-0.387,1.212-0.907,1.611-1.561c0.398-0.653,0.597-1.372,0.597-2.158c0-0.421-0.061-0.825-0.182-1.212h1.245v6.011
									C12.62,12.194,12.565,12.326,12.454,12.437"/>
							</g>
							</svg>

			        	</a>
			        </li>    
			    </ul>
    		</div>


					<?php // to use a image just replace the bloginfo('name') with your img src and remove the surrounding <p> ?>
					<a href="<?php echo get_option('home'); ?>" id="mc-log" class="has-svg">
						<object id="menu-logo" class="menu-logo pull-left" data="<?php echo get_template_directory_uri(); ?>/library/images/menu-logo.svg" type="image/svg+xml"></object>
					</a>


					<?php // if you'd like to use the site description you can un-comment it below ?>
					<?php // bloginfo('description'); ?>
					<div class="nav-content">
						<button style="z-index:50;" id="sf-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#search-fullscreen">
						    <a href='#search-fullscreen' id="search-icono" class="has-svg" onClick='menu1.togglemenu(); return false'><object data="<?php echo get_template_directory_uri(); ?>/library/images/small-search.svg" type="image/svg+xml"></object></a>
						</button>
						<a id="back-icono" class="has-svg"><object data="<?php echo get_template_directory_uri(); ?>/library/images/back-arrow.svg" type="image/svg+xml"></object></a>
						<div class="ml"><a href='#menu-fullscreen' data-toggle="modal" data-target="#menu-fullscreen" class='animateddrawer'><span></span></a></div>


						<nav class="nav pull-right menu-lines" role="navigation">
					</div>

					</nav>

				</div>
				</div>

				<!-- Modal fullscreen -->
<div class="modal modal-fullscreen bottom fade in" id="search-fullscreen" role="dialog" aria-labelledby="search">
  <div class="modal-dialog">
      <div class="modal-body search-body">
        <?php get_search_form(); ?>
      </div>
  </div>
</div>

<div class="modal modal-fullscreen fade in" id="menu-fullscreen" role="dialog" aria-labelledby="menu">
  <div class="modal-dialog menu-dialog">
      <div class="modal-body menu-body">
        

							<?php 
							$link = get_post_meta(1,'menu_option',true);
							if($effect == ''){
							    $effect = 'top';
							}
							$menu_items = wp_get_nav_menu_items($menu_id);
							?>
							<div class="container fullscreenmenu <?php echo $effect;?>" id="menu">
    

    <div class="navcontent">
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
    </div>

    <nav id="under-menu" class="navbar navbar-default col-xs-12">
        <ul id="um">
           <li id="mc">Contacte</li>
           <li id="mn">Newsletter</li>
           <li id="mnl">Notes legals</li>
        </ul>

    </nav>
    
    

    <?php include('contacte.php'); ?>

    <!--NEWSLETTER-->

    <?php include('newsletter.php'); ?>


    <!--LEgAL NOTES -->

    <?php include('noteslegals.php') ?>







</div> <!--container-->

      </div>
  </div>
</div>



