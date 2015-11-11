<?php get_header(); ?>

			<div id="content" class="container">


				<div id="inner-content" class="wrap cf">

						<main id="main-tag" class="m-all t-2of3 d-5of7 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php
							the_archive_description( '<div class="taxonomy-description">', '</div>' );
							?>
		<div class="posts">				
							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


							<article id="post-<?php the_ID(); ?>" class="tag-post-wrapper post-wrapper <?php if (get_field("important")){echo "imp";} ?>"<?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<div class="row title">
										<div class="title-wrapper">
											<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										</div>
									</div>
									<div class="row image">

										<div class="image-wrapper col-xs-8 col-xs-offset-2">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<?php 

											$image = the_post_thumbnail('medium');

											if( !empty($image) ): ?>

												<img class="post-img img img-responsive"  src="<?php echo $image['url']; ?>" />

											<?php endif; ?>
											</a>
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
</div>	
									<?php bones_page_navi(); ?>

							<?php else : ?>

									<div class="container fourohfour">
										<div class="row four-pad">
											<div class="col-xs-12 cent">
												<h1 id="ups">Ups! :(</h1>
											</div>	
										</div>
										<div class="row">
											<div class="col-xs-12 col-sm-6 col-sm-offset-3 cent">
												<h2 id="cant">No hem trobat el que estaves buscant. 
									Però pots fer una recerca o tornar a l’inici.</h2>
											</div>	
										</div>
									</div>
									<style>
										.posts{
											height:0;
											padding:0;
										}

										#main-tag{
											margin:0;
										}
									</style>
																
							<?php endif; ?>

						</main>


				</div>

				
			</div>

			<script>
			$(function(){

      if($('.tag').hasClass('<?php echo(single_tag_title( '', false ) ); ?>')){
        $('.<?php echo(single_tag_title( '', false ) ); ?>').addClass('active-tag');
        $('.<?php echo(single_tag_title( '', false ) ); ?> a').prepend('<span class="eliminate"><object data="<?php echo get_template_directory_uri(); ?>/library/images/tag-x.svg" type="image/svg+xml"></object></span>');
        $('.active-tag a').click(function() {
           window.location.href = 'http://orgullpages.wp#main-anchor';
            return false;
        });
      };
      
      });
			</script>

<?php get_footer(); ?>
