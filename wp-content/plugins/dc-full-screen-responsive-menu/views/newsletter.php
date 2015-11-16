<div class="news-cont container">
    <div class="align">
        <form id="email-form" method="post" action="<?php echo get_template_directory_uri(); ?>/subscribe.php" accept-charset="utf-8">
            <div class="row pads">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <h2 class="news-title cent">Rep al teu mail les últimes notícies d’Orgull Pagès</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                    <input id="em" type="email" placeholder="El teu correu electrònic">
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                    <button type="submit" id="news-submit">Subscriure</button>
                </div>
            </div>
        </form>

    </div>
</div><!--container-->

<!-- SUCCESS-->
<div class="conf-news container">
    <div class="align">
        <div class="row pads">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <h2 class="conf-title cent">Bé!<br>
    Pots confirmar la subscripció a la bústia d’entrada del teu correu electrònic</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                <button type="button" onclick="location.href='http://orgullpages.wp#main-anchor'" id="conf-news">Aceptar</button>
            </div>
        </div>
    </div>
</div><!--container-->
