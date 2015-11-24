<?php /* Template Name: Quí Som */ ?>

<?php get_header(); ?>

<div class="container" id="skrollr-body">
<!--<div id="orig" class="skrollable skrollable-between" data-180-top="left:-70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
	<div class="row title qs top">
		<div class="words col-xs-12 col-md-8 col-md-offset-1 col-md-7 col-md-offset-1">
			<h1 class="titulo tit">
				<?php the_field("titulo", 118); ?>
			</h1>
		</div>
	</div>
	<div class="row tit-tex">
		<div class="tex col-xs-12 col-md-5 col-md-offset-1 col-md-5 col-md-offset-1">
			<span class="seguent tex">
				<?php the_field("sequent", 118); ?>
			</span>
		</div>
		<!--less offset-->
	<!--	<div class="hidden-xs col-md-3 col-md-8"></div>
	</div>
</div>
<div class="skrollable skrollable-between" data-50-bottom="left:70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
	<div class="row title-2 qs top skrollable skrollable-between">
		<div class="words col-xs-12 col-md-8 col-md-offset-3 col-md-6 col-md-offset-5">
			<h1 class="titulo-2 tit">
				<?php the_field("titulo_2", 118); ?>
			</h1>
		</div>
		<!-- less offset -->
<!--		<div class="hidden-xs col-md-1"></div>
	</div>
	<div class="row tit-tex">
		<div class="tex col-xs-12 col-md-6 col-md-offset-3 col-md-5 col-md-offset-5">
			<span class="seguent tex">
				<?php the_field("siguent", 118); ?>
			</span>
		</div>
	</div>
</div>-->
	
<?php if( have_rows('prod') ): ?>

<?php $i= 0; ?>
	<!--ODD YUMMM!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<?php while( have_rows('prod') ): the_row();?>
<?php if($i%2 == 0) : ?>
<div class="qs-wrap">
	<div class="row qs">
		<div id="<?php the_sub_field('id');?>-img" class="rqs image-qs col-xs-12 col-sm-5 col-sm-push-6 col-md-4 col-md-push-8 pull-right" data-100-bottom="left:70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
			<img class="prod-imag right img" src="<?php the_sub_field('imagen');?>" />
		</div>
		<div id="<?php the_sub_field('id');?>-words" class="words col-xs-11 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-sm-pull-4 col-sm-offset-1 col-md-5 col-md-pull-4 col-md-offset-1"  data-100-bottom="left:-70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
			<h1 id="<?php the_sub_field('id');?>-tit" class="tit pull-left">
				<?php the_sub_field('titulo');?>
			</h1>
			<span id="<?php the_sub_field('id');?>-tex" class="seguent tex pull-right">
				<?php the_sub_field('seguent');?>
			</span>
		</div>
		<!-- less offset -->
		<div class="hidden-xs hidden-sm col-md-2"></div>
		
	</div>
</div>

<?php else : ?>
	<!--EVEN!!!!!!!!!!!!!!!!!!!!!!!!!!!-->
<div class="qs-wrap">
	<div class="row qs">
	<div id="<?php the_sub_field('id');?>-img" class="lqs image-qs col-xs-12 col-sm-6 col-sm-offset-0 col-md-4 col-md-offset-1"  data-100-bottom="left:-70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
			<img class="prod-imag left img" src="<?php the_sub_field('imagen');?>" />
		</div>
		<!-- less offset -->
		<div class="hidden-xs hidden-sm col-md-1"></div>
		<div id="<?php the_sub_field('id');?>-words" class="words col-xs-11 col-xs-offset-1 col-sm-5  col-md-5 col-md-offset-1" data-100-bottom="left:70px; opacity:0.5;" data-180-center="left:0; opacity:1;">
			<h1 id="<?php the_sub_field('id');?>-tit" class="tit pull-right trit">
				<?php the_sub_field('titulo');?>
			</h1>
			<span id="<?php the_sub_field('id');?>-tex" class="seguent tex pull-left">
				<?php the_sub_field('seguent');?>
			</span>
		</div>
	</div>
</div>
<?php endif; ?>

<?php $i++; ?>

<?php endwhile; ?>

<?php endif; ?>

</div><!--end qui som container-->
<script src="<?php echo get_template_directory_uri(); ?>/library/bower_components/skrollr/dist/skrollr.min.js"></script>
<script>
	//SKROLLR INIT


if ($(window).width() > 767) {
          var s = skrollr.init();
        }
</script>
<?php get_footer(); ?>