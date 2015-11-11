

    

<button style="z-index:50;" id="sf-btn" type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-fullscreen">
    <a href='#' id="search-icono" class="has-svg" onClick='menu1.togglemenu(); return false'><object data="<?php echo get_template_directory_uri(); ?>/library/images/small-search.svg" type="image/svg+xml"></object></a>
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
    <ul class="social-icons ment">
        <li><a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook-im.svg" type="image/svg+xml"></object></a></li>
        <li><a href="<?php _e('','bonestheme'); ?>" class="has-svg" >
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
        <li><a href="<?php _e('','bonestheme'); ?>" class="has-svg" ><object data="<?php echo get_template_directory_uri(); ?>/library/images/instagram.svg" type="image/svg+xml"></object></a></li>    
    </ul>
    <?php $img = plugins_url('../images/close.png', __FILE__);?>
    <div class="navcontent">
        <div ><a id="close-icono" class='animateddrawer' href='#' onClick='menu1.togglemenu(); return false'><span class="on"></span></a></div>
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


