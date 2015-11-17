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
									        $count = 0;
											if( $tags ) : ?>
											  <p class="tags">
											  <?php foreach( $tags as $tag ) { 
											  	$count++;
												if ($count <= 3 ) {?>

											   <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
											  <?php }} ?>
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


<div id="cookies" class="container-fluid">
	<div class="inner-cook">
			<div class="hidden-xs col-sm-2"></div>
				<div class="col-xs-1 dd">
					<object data="<?php echo get_template_directory_uri(); ?>/library/images/eye.svg" type="image/svg+xml"></object>
				</div>
			<div class="cookie-text col-xs-10 col-sm-6">
			<span>
				En aquest web fem servir galetes pròpies i de tercers per millorar els nostres 
				serveis i mostrar-vos informació relacionada amb les vostres preferències mitjançant 
				l’anàlisi dels vostres hàbits de navegació.  Si continueu navegant, considerem que 
				n’accepteu l’ús. podeu canviar la configuració o obtenir més informació <a id="cookie-link" href="<?php echo get_page_link(194); ?>">aquí.</a>
			</span></div>
			<div class="col-xs-3"></div>
	</div>
	<div id="cookie-close">
				<svg version="1.1" id="cookcls" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 width="19.843px" height="19.842px" viewBox="0 0 19.843 19.842" enable-background="new 0 0 19.843 19.842" xml:space="preserve">
				<g>
					
						<rect x="-1.475" y="8.922" transform="matrix(0.7071 0.7071 -0.7071 0.7071 9.9215 -4.109)" fill="#333333" width="22.791" height="2"/>
					
						<rect x="8.921" y="-1.476" transform="matrix(0.7071 0.7071 -0.7071 0.7071 9.9212 -4.1096)" fill="#333333" width="2" height="22.793"/>
				</g>
				</svg>

		</div>
	
</div>

<script type="text/javascript">
var cookie = document.cookie;
if (cookie.indexOf('visited=', 0) == -1) {
    var expiration = new Date();
    expiration.setDate(expiration.getDate()+1);
    document.cookie = 'visited=1;expires=' + expiration + ';path=/';

    var element = document.getElementById('cookies');
    element.style.display = 'table';
}
</script>


<?php get_footer(); ?>


