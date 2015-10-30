
<div class="social-icons">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="facebook">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" alt="twitter">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="instagram">
    </div>
    <?php $img = plugins_url('../images/close.png', __FILE__);?>
    <div class="navcontent">
        <div ><a href='#' id="close-icono" data-dismiss="modal"><img src="<?php echo get_template_directory_uri(); ?>/library/images/close.png" class="cimg"/></a></div>
        <?php
        $menu_list = '<ul id="menu-' . $menu_id . '" class="nav-menu">';
        
        foreach ( (array) $menu_items as $key => $menu_item ) {
            $title = $menu_item->title;
            $url = $menu_item->url;
            $menu_list .= '<li><a href="' . $url . '">' . $title . '</a></li>';
        }
        echo $menu_list .= '</ul>';
        ?>
    </div>
    <div id="searching" class="container pads">
		<form role="search" method="get" id="searchform" class="searchform" action="<?php echo home_url( '/' ); ?>">
	    	<div id="svert" class="row">
		    	<div class="col-xs-11">
			        <label for="s" class="screen-reader-text"><?php _e('','bonestheme'); ?></label>
			        <input type="search" id="s" class="" name="s" value="" />

			    </div>
			    <div class="col-xs-1">
			        <button type="submit" id="searchsubmit" ><img class="" src="" alt="search-icon"><a href="<?php _e('','bonestheme'); ?>"><object data="<?php echo get_template_directory_uri(); ?>/library/images/search.svg" type="image/svg+xml"></object></a></button>
		        </div>
		    </div>
	    </form>
    </div>
<script>$(document).ready(function () {$('#s').focus(); });</script>