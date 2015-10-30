<?php /* Template Name: Contacte */ ?>

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
<div class="container contact-cont">
	<div class="row pads">
		<div class="col-xs-12 col-sm-8 col-sm-offset-2 cent">
		<h2 class="cont-title">Per a qualsevol dubte o consulta, estarem agraïts que ens ho comuniquis omplint les teves dades de contacte.</h2>
		</div>
	</div>
	<div class="col-xs-12 col-sm-6 col-sm-offset-3">
		<form class="contact">
			<div class="row">
				<div class="col-xs-12 col-sm-6"><input type="text" name="nom" placeholder="Nom" required /></div>
				<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Població"></div>
			</div>
			<div class="row">
				<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Correu electrònic" required /></div>
				<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Telèfon"></div>
			</div>	
			<div class="row">
				<div class="col-xs-12">
					<textarea name="poblacio" placeholder="El teu comentari" required></textarea>
				</div>	
			</div>
			<div class="row">
				<div class="col-xs-12 cent accept">
					<input id="czech" type="checkbox" name="accept-legal" required />
					<p class=>He llegit i accepto les condicions legals.</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 cent aq">
					<p><span class="red">*</span>Aquests camps son obligatoris</p>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12 cent">
					<input id="cont-submit" type="submit" placeholder="Enviar">
				</div>
			</div>
		</form>
	</div>	
</div>





</div>			




<?php get_footer(); ?>