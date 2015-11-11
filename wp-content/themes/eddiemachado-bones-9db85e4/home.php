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

		#menu-container{
			display:none;
		}
	</style>

</head>
	<div class="main-menu">
		<?php menu ?>
	</div>

<div id="wayward-down" style="position:relative; top:2px;"></div>

<script>
	$('#wayward-down').waypoint(function(direction) {
  		if (direction === 'down') {
    	 $('html,body').animate({scrollTop: ($('#wayward-up')).offset().top}, 'slow');
  		}
	});



</script>

<div id="home">
<div id="cursor">
	<section class="container landings header">
		<div class="row logo-wrapper">
			<div class="col-xs-12">
				<div id="logo">
					<object data="<?php echo get_template_directory_uri(); ?>/library/images/orgull-logo.svg" type="image/svg+xml"></object>
				</div>
			</div>
		</div>

		<?php do_shortcode('[wpupg-grid id="posts-home"]', $ignore_html = false ); ?>


		<div class="row">
		<a href="<?php the_field ('link', 15); ?>">
			<div class="main-logo col-xs-10 col-xs-offset-1" style="background-size:115%;
		background-position:50% 47%;">
			
			<?php 
					$term = get_field('tax', 15);
					if( $term ): ?>
				
				<div class="hashtag-wrap">
					<h1 class="hashtag">#<?php echo $term[0]->name; ?></h1>
				</div>

			<?php endif; ?>
				
			</div>
		</a>
	</section>

</div>
<div class="pageWrapper" style="height:250px;" id="waypoint"></div>
<script>
	$('.arrow-wrapper').click(function(){
		$('#menu-container').fadeIn("slow");
	});

			(function($) {
				/*$(document).ready(function() {
				    $(document).alton({
				        bodyContainer: 'pageWrapper',
				        scrollMode: 'headerScroll'
				    });
				});*/

				var waypoint = new Waypoint({
				  element: document.getElementById('waypoint'),
				  handler: function() {
				    $('#menu-container').fadeToggle(400, function() {
					    // Animation complete.
					  });
				  }
				});
			})(jQuery);
</script>

<div id="wayward-up" style="height:50px;"></div>

<section class="container posts" id="main-anchor">




							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" class="post-wrapper infinite-item <?php if (get_field("important")){echo "imp";} ?>"<?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<div class="row title">
										<div class="title-wrapper col-xs-12">
											<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										</div>
									</div>
									<div class="row image">

										<div class="image-wrapper col-xs-8 col-xs-offset-2">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

											<?php 

											$image = the_post_thumbnail('large');

											if( !empty($image) ): ?>

												<img class="post-img img img-responsive"  src="<?php echo $image['url']; ?>" />

											<?php endif; ?></a>
										</div>

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

					</section><!--post container-------->
</div><!--FULLPAGE END -->

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





<?php get_footer(); ?>


