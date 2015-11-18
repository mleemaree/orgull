<div class="search-cont">
<div class="align">
    <div class="social-icons">
        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook-im.svg" type="image/svg+xml"></object></a>
        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/twitter-im.svg" type="image/svg+xml"></object></a>
        <a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" type="image/svg+xml"></object></a>       
    </div>
    <div class="navcontent">
       
    
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
		    	<div class="col-xs-8 col-sm-10 col-md-11">
			        <label for="s" class="screen-reader-text"><?php _e('','bonestheme'); ?></label>
			        <input type="search" id="s" class="" name="s" value="" autocomplete="off" autofocus />

			    </div>
			    <div class="col-xs-4 col-sm-2 col-md-1 eglass">
			        <button type="submit" id="searchsubmit" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/search.svg" type="image/svg+xml"></object></button>
                </div>
		    </div>
	    </form>
    </div>
</div>
</div>

<script>
     $(document).ready(function () {
            setTimeout("$('#s').focus();", 500);

        });
</script>