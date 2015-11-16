

    

<button style="z-index:50;" id="sf-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-fullscreen">
    <a href='#' id="search-icono" class="has-svg" onClick='menu1.togglemenu(); return false'><object data="<?php echo get_template_directory_uri(); ?>/library/images/small-search.svg" type="image/svg+xml"></object></a>
</button>
<a id="back-icono" class="has-svg"><object data="<?php echo get_template_directory_uri(); ?>/library/images/back-arrow.svg" type="image/svg+xml"></object></a>


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

    <nav id="under-menu" class="navbar navbar-default col-xs-12">
        <ul id="um">
           <li id="mc">Contacte</li>
           <li id="mn">Newsletter</li>
           <li id="mnl">Notes legals</li>
        </ul>

    </nav>
    
    <!--contact form

    <div class="container contact-cont">
        <div class="align">
            <div class="row pads">
                <div class="col-xs-12 col-md-8 col-md-offset-2 cent">
                <h2 class="cont-title">Per a qualsevol dubte o consulta, estarem agraïts que ens ho comuniquis omplint les teves dades de contacte.</h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <form class="contact" action="<?php echo get_page_link(197); ?>">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="text" name="nom" placeholder="Nom" class="required form-control" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Població"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="email" name="poblacio" placeholder="Correu electrònic" class="required" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="tel" name="poblacio" placeholder="Telèfon" autocomplete="off"></div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea name="poblacio" placeholder="El teu comentari" class="required" autocomplete="off"required></textarea>
                        </div>  
                    </div>
                    <div class="row">
                        <div class="col-xs-12 cent accept">
                            <input id="czech" type="checkbox" name="accept-legal" class="required" required />
                            <label for="czech"><span></span></label>
                            <p>He llegit i accepto les condicions legals.</p>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 cent aq">
                            <p><span style="color:rgba(243,160,171,1);">*</span>Aquests camps son obligatoris</p>
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
    </div>-->

    <?php include('contacte.php'); ?>

    <!--NEWSLETTER-->

    <?php include('newsletter.php'); ?>


    <!--LEgAL NOTES -->

    <?php include('noteslegals.php') ?>







</div> <!--container-->





</div> <!-- full screen menu-->


