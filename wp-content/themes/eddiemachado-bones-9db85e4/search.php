<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="m-all t-2of3 d-5of7 cf" role="main">
					


									<div class="container no-res-cont" style="height:0;">
										<div class="row">
											<div class="col-xs-12 cent">
												<h1 id="nores"><?php
													$search_count = 0;

													$search = new WP_Query("s=$s & showposts=-1");
													if($search->have_posts()) : while($search->have_posts()) : $search->the_post();	
													$search_count++;
													endwhile; endif;

													echo $search_count;
													?> resultats
												</h1>
											</div>	
										</div>
										<div class="row">
											<div class="col-xs-12 cent">
												<h1 id="has-searched">Has cercat «<?php the_search_query(); ?>»</h1>
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

										<div class="image-wrapper col-xs-8 col-xs-offset-2">
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">

											<?php 

											$image = the_post_thumbnail('medium');

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

					</div><!--post container-------->

								<?php bones_page_navi(); ?>

							<?php else : ?>



							<?php endif; ?>

						</main>

							

					</div>

			</div>

<?php get_footer(); ?>
