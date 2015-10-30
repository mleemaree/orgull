<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>
<style>
#menu-container{
	display:none;
}
</style>
	<div class="social-icons">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="facebook">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" alt="twitter">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="instagram">
    </div>
    <?php $img = plugins_url('../images/close.png', __FILE__);?>
    <div class="navcontent">
        <div ><a href='#' id="close-icono" onClick='menu1.togglemenu(); return false'><img src="<?php echo get_template_directory_uri(); ?>/library/images/close.png" class="cimg"/></a></div>
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
<div class="news-cont container">
	<div class="row pads">
		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			<h2 class="news-title cent">Rep al teu mail les últimes notícies d’Orgull Pagès</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-4 col-sm-offset-4">
			<input type="text" placeholder="El teu correu electrònic">
		</div>
	</div>
	<div class="row">
		<div class="col-xs-12 col-sm-2 col-sm-offset-5">
			<button type="submit" id="news-submit">Subscriure</button>
		</div>
	</div>


</div><!--container-->

<?php get_footer(); ?>