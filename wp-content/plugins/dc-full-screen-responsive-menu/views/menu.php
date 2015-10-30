

    

<button style="z-index:50;" id="sf-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-fullscreen">
    <img id="search-icono" class="" src="<?php echo get_template_directory_uri(); ?>/library/images/search-icono.png" alt="search-icon">
</button>



<?php 
$link = get_post_meta(1,'dc_fullscreen_menu_option',true);
$effect = $link['menu_effect'];
$menu_id = $link['menu_id'];
if($effect == ''){
    $effect = 'top';
}
$menu_items = wp_get_nav_menu_items($menu_id);
?>
<div class="container fullscreenmenu <?php echo $effect;?>" id="dc-menu">
    <div class="social-icons">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/facebook.png" alt="facebook">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/twitter.png" alt="twitter">
        <img class="social-icon" src="<?php echo get_template_directory_uri(); ?>/library/images/instagram.png" alt="instagram">
    </div>
    <?php $img = plugins_url('../images/close.png', __FILE__);?>
    <div class="navcontent">
        <div ><a href='#' id="close-icono" onClick='menu1.togglemenu(); return false'><img src="<?php echo $img;?>" class="cimg"/></a></div>
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

    <nav id="under-menu" class="navbar navbar-default col-xs-12">
        <ul id="um">
           <a href="index.php?page_id=164"><li>Contacte</li></a>
           <a href="index.php?page_id=171"><li>Newsletter</li></a>
           <a href="index.php?page_id=188"><li>Notes legals</li></a>
        </ul>

    </nav>


</div> <!-- full screen menu-->


