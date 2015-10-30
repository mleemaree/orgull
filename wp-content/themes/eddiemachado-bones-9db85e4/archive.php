<?php get_header(); ?>

			<div id="content" class="container">


				<div id="inner-content" class="wrap cf">

						<main id="main-tag" class="m-all t-2of3 d-5of7 cf container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
							
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


							<article id="post-<?php the_ID(); ?>" class="tag-post-wrapper <?php if (get_field("important")){echo "imp";} ?>"<?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<div class="row title">
										<div class="title-wrapper">
											<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										</div>
									</div>
									<div class="row image">
										<div class="image-wrapper col-xs-8 col-xs-offset-2">
											<?php 

											$image = get_field('image');

											if( !empty($image) ): ?>

												<img class="post-img img img-responsive" style="width:100%;" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

											<?php endif; ?>
										</div>
									</div>

								</header>





								<footer class="article-footer cf">


                  					<?php if( has_tag() ) { ?>
                  				


									         <?php $tags = get_the_tags();
											if( $tags ) : ?>
											  <p class="tags">
											  <?php foreach( $tags as $tag ) { ?>
											   <span class="tag <?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
											   <?php //find tag needs to exist here?>
											  <?php } ?>
											</p>
											<?php endif; ?>

<?php echo $cat->$slug; ?>

									   
									<?php } ?>
									 </footer>
							</article>


							<?php endwhile; ?>

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
												<p><?php _e( 'This is the error message in the archive.php template.', 'bonestheme' ); ?></p>
										</footer>
									</article>

							<?php endif; ?>

						</main>


				</div>

				
			</div>

			<script>
			$(function(){

			if($('.tag').hasClass('<?php echo(single_tag_title( '', false ) ); ?>')){
				$('.<?php echo(single_tag_title( '', false ) ); ?>').addClass('active-tag');
				$('.<?php echo(single_tag_title( '', false ) ); ?> a').prepend('<span class="eliminate">x</span>');
				$('.active-tag a').click(function() {
				   window.location.href = 'http://orgullpages.wp';
				    return false;
				});
			};
			
			});
			</script>

<?php get_footer(); ?>
