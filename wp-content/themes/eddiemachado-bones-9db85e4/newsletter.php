<?php /* Template Name: Newsletter */ ?>

<?php get_header(); ?>
<style>
#menu-container{
	display:none;
}
</style>
	<?php include('inside-menu.php') ?>
<div class="news-cont container">
<div class="align">
	<form action="<?php echo get_page_link(200); ?>" method="POST" accept-charset="utf-8">
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
	</form>

</div>
</div><!--container-->

<?php get_footer(); ?>