<?php /* Template Name: Home */ ?>

<?php get_header(); ?>

<head>
	<style>
		.main-logo{
			background: url(<?php 

			$image = get_field('image',15);

			if( !empty($image) ): ?>

				<?php echo $image['url'];?>

			<?php endif; ?>)


		}
	</style>

</head>
	<div class="main-menu">
		<?php menu ?>
	</div>



	<div class="container landings">

		<div class="row logo-wrapper">
			<div class="col-xs-12">
				<div id="logo">
				<a href="<?php echo get_option('home'); ?>" class="svg">
					<object data="<?php echo get_template_directory_uri(); ?>/library/images/orgull-logo.svg" type="image/svg+xml"></object>
				</a>
			</div>
		</div>

		<?php do_shortcode('[wpupg-grid id="posts-home"]', $ignore_html = false ); ?>


		<div class="row">
			<div class="main-logo col-xs-10 col-xs-offset-1 skrollable skrollable-between" style="background-size:115%;
		background-position:50% 47%;" data-top="opacity:1" data--600-start="opacity:1;" data-800="opacity:0;">
				<h1 class="hashtag">#donesapagès</h1>
			</div>
		</div>
	</div>



<div class="container posts">




						
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="post-wrapper <?php if (get_field("important")){echo "imp";} ?>"<?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<div class="row title">
										<div class="title-wrapper col-xs-12">
											<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										</div>
									</div>
									<div class="row image">
										<div class="col-xs-2"></div>
										<div class="image-wrapper col-xs-8">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php 

											$image = get_field('image');

											if( !empty($image) ): ?>

												<img class="post-img img img-responsive" style="width:100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

											<?php endif; ?></a>
										</div>
										<div class="col-xs-2"></div>
									</div>

								</header>


								<footer class="article-footer cf">


                  					

									        <?php $tags = get_the_tags();
											if( $tags ) : ?>
											  <p class="tags">
											  <?php foreach( $tags as $tag ) { ?>
											   <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
											  <?php } ?>
											</p>
											
											<?php endif; ?>


								</footer>

							</article>

						
						<?php endwhile; ?>

					</div><!--post container-------->


									<?php bones_page_navi(); ?>

							<?php else : ?>

									<article id="post-not-found" class="hentry cf">
											<header class="article-header">
												<h1><?php _e( 'Oops, Post Not Found!', 'bonestheme' ); ?></h1>
										</header>
											<section class="entry-content">
												<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'bonestheme' ); ?></p>
										</section>
										<footer class="article-footer">
												<p><?php _e( 'This is the error message in the index.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>




<script type="text/javascript">
    $(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});

</script>

<?php get_footer(); ?>


