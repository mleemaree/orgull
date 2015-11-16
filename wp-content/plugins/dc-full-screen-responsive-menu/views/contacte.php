<div class="container contact-cont">
        <div class="align">
            <div class="row pads">
                <div class="col-xs-12 col-md-8 col-md-offset-2 cent">
                <h2 class="cont-title">Per a qualsevol dubte o consulta, estarem agraïts que ens ho comuniquis omplint les teves dades de contacte.</h2>
                </div>
            </div>
            <div class="col-xs-12 col-md-6 col-md-offset-3">
                <form id="ajax-contact" class="contact" method="post" action="<?php echo get_template_directory_uri(); ?>/mailer.php">
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="text" id="nom" name="nom" placeholder="Nom" class="required form-control" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="text" id="poblacio" name="poblacio" placeholder="Població"></div>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-6"><input type="email" id="email" name="email" placeholder="Correu electrònic" class="required" autocomplete="off" required /></div>
                        <div class="col-xs-12 col-sm-6"><input type="tel" id="tel" name="tel" placeholder="Telèfon" autocomplete="off"></div>
                    </div>  
                    <div class="row">
                        <div class="col-xs-12">
                            <textarea id="comentari" name="comentari" placeholder="El teu comentari" class="required" autocomplete="off"required></textarea>
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
                <!--error messages-->
                <div id="form-messages"></div>
            </div>  
        </div>
    </div>
 <!--success message-->
                <div class="conf-cont container">
                    <div class="align">
                        <div class="row pads">
                            <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-md-4 col-md-offset-4">
                                <h2 class="conf-title cent">Gràcies per confiar en nosaltres!
                    Ens posarem en contacte amb tu al més aviat possible.</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xs-12 col-md-2 col-md-offset-5" style="text-align:center;">
                                <button type="button" id="conf-accept" onclick="location.href='http://orgullpages.wp#main-anchor'">Aceptar</button>
                            </div>
                        </div>
                    </div>
                </div><!--container-->