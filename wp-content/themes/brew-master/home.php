<?php /* Template Name: Home */ ?>

<?php get_header(); ?> 

<div class="container">
	<div class="row">
		<div class="col-xs-2 col-xs-offset-5">
			<h1><?php the_field("Title", 15); ?></h1>
		</div>
	</div>
	<div class= "row">
		<div class="col-xs-6"></div>
		<div class="col-xs-6">
			<?php echo "yedkhdah" ?>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-10 col-sm-offset-1">

			<?php 

			$image = get_field('image');

			if( !empty($image) ): 

				// vars
				$url = $image['url'];
				$title = $image['title'];
				$alt = $image['alt'];
				$caption = $image['caption'];

				// thumbnail
				$size = 'thumbnail';
				$thumb = $image['sizes'][ $size ];
				$width = $image['sizes'][ $size . '-width' ];
				$height = $image['sizes'][ $size . '-height' ];

				if( $caption ): ?>

					<div class="wp-caption">

				<?php endif; ?>

				<a href="<?php echo $url; ?>" title="<?php echo $title; ?>">

					<img class="img img-responsive" style="width:100%" aria-label="main-image" src="<?php echo $thumb; ?>" alt="<?php echo $alt; ?>" width="<?php echo $width; ?>" height="<?php echo $height; ?>" />

				</a>

				<?php if( $caption ): ?>

						<p class="wp-caption-text"><?php echo $caption; ?></p>

					</div>

				<?php endif; ?>

			<?php endif; ?>
		</div>
	</div>

</div>