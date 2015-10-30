<?php /* Template Name: Quí Som */ ?>

<?php get_header(); ?>

<div class="container">
	<div class="row title qs">
		<div class="words col-xs-12 col-sm-8 col-sm-offset-1 col-md-7 col-md-offset-1">
			<h1 class="titulo tit">
				<?php the_field("titulo", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("sequent", 118); ?>
			</span>
		</div>
		<!--less offset-->
		<div class="hidden-xs col-sm-3 col-md-8"></div>
	</div>

	<div class="row title-2 qs">
		<div class="words col-xs-12 col-sm-8 col-sm-offset-3 col-md-6 col-md-offset-5">
			<h1 class="titulo-2 tit">
				<?php the_field("titulo_2", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("siguent", 118); ?>
			</span>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-1"></div>
	</div>

	<!--FUET YUMMM!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

	<div class="row fuet qs">
		<div class="words col-xs-12 col-sm-5 col-sm-offset-1">
			<h1 class="tit">
				<?php the_field("titulo_fuet", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("siguent_fuet", 118); ?>
			</span>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-2"></div>
		<div id="fuet-img" class="image col-xs-12 col-sm-4 pull-right">
			<?php 

			$image = get_field('image_fuet');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
	</div>

	<!--CAMINS!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

	<div class="row camins qs">
	<div id="camins-img" class="image col-xs-12 col-sm-4 col-sm-offset-1">
			<?php 

			$image = get_field('imagen_camins');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-1"></div>
		<div class="words col-xs-12 col-sm-5 col-sm-offset-1">
			<h1 class="tit">
				<?php the_field("titulo_camins", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("siguent_camins", 118); ?>
			</span>
		</div>
	</div>

	<!--PA YUMMM!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!-->

	<div class="row pa qs">
		<div class="pa-palab col-xs-12 col-sm-5 col-sm-offset-1">
			<h1 class="tit">
				<?php the_field("titulo_pa", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("siguent_pa", 118); ?>
			</span>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-2"></div>
		<div id="pa-img" class="pa-img col-xs-12 col-sm-4 pull-right">
			<?php 

			$image = get_field('imagen_pa');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
	</div>

	<!-- LLET ============================= -->

	<div class="row llet qs">
	<div id="llet-img" class="image col-xs-12 col-sm-4 col-sm-offset-1">
			<?php 

			$image = get_field('imagen_llet');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-1"></div>
		<div class="words col-xs-12 col-sm-5 col-sm-offset-1">
			<h1 class ="tit">
				<?php the_field("titulo_llet", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("seguent_llet", 118); ?>
			</span>
		</div>
	</div>

	<!-- OLI ========================= -->

	<div class="row oli qs">
		<div class="words col-xs-12 col-sm-5 col-sm-offset-1">
			<h1 class="tit">
				<?php the_field("titulo_loli", 118); ?>
			</h1>
			<span class="seguent tex">
				<?php the_field("seguent_loli", 118); ?>
			</span>
		</div>
		<!-- less offset -->
		<div class="hidden-xs col-sm-2"></div>
		<div id="oli-img" class="image col-xs-12 col-sm-4 pull-right">
			<?php 

			$image = get_field('imagen_loli');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>
		</div>
	</div>





</div><!--end qui som container-->

<?php get_footer(); ?>