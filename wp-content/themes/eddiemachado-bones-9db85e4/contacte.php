<?php /* Template Name: Contacte */ ?>

<?php get_header(); ?>
<style>
#menu-container{
	display:none;
}
</style>
	<?php include('inside-menu.php') ?>
    </div>

<div class="container contact-cont">
	<div class="align">
		<div class="row pads">
			<div class="col-xs-12 col-sm-8 col-sm-offset-2 cent">
			<h2 class="cont-title">Per a qualsevol dubte o consulta, estarem agraïts que ens ho comuniquis omplint les teves dades de contacte.</h2>
			</div>
		</div>
		<div class="col-xs-12 col-sm-6 col-sm-offset-3">
			<form class="contact" action="<?php echo get_page_link(197); ?>">
				<div class="row">
					<div class="col-xs-12 col-sm-6"><input type="text" name="nom" placeholder="Nom" class="required form-control" required /></div>
					<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Població"></div>
				</div>
				<div class="row">
					<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Correu electrònic" class="required" required /></div>
					<div class="col-xs-12 col-sm-6"><input type="text" name="poblacio" placeholder="Telèfon"></div>
				</div>	
				<div class="row">
					<div class="col-xs-12">
						<textarea name="poblacio" placeholder="El teu comentari" class="required" required></textarea>
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
</div>			




<?php get_footer(); ?>