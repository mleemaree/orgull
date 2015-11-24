<?php get_header(); ?>

			<div id="content">

				<div id="inner-content" class="wrap cf">

					<main id="main" class="main-search" role="main">
					


									<div class="container no-res-cont" style="height:0;">
										<div class="row">
											<div class="col-xs-12 cent">
												<h1 id="nores"><?php
													$search_count = 0;

													$search = new WP_Query("s=$s & showposts=-1");
													if($search->have_posts() && ($post->post_type=='post')) : while($search->have_posts()) : $search->the_post();	
															$search_count++;
													

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
					
							<?php if ($search->have_posts() && ($post->post_type=='post')) : while ($search->have_posts()) : $search->the_post(); ?>
		
							<article id="post-<?php the_ID(); ?>" class="post-wrapper searchie <?php if (get_field("important")){echo "imp";} ?>"<?php post_class( 'cf' ); ?> role="article">

								<header class="article-header">

									<div class="row title">
										<div class="title-wrapper col-xs-12">
											<h1 class="entry-title"><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
										</div>
									</div>
									<div class="row image">

										<div class="image-wrapper col-xs-12 col-sm-8 col-sm-offset-2">
											<div class="post-vid">
																								<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="16.609px" height="33.219px" viewBox="0 0 16.609 33.219" style="enable-background:new 0 0 16.609 33.219;"
													 xml:space="preserve">
												<polygon style="fill:#FAFAFA;" points="0,0 0,33.219 16.609,16.61 "/>
												</svg>

													


											</div>
											<a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>">
											<div class="post-vid">
												<svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
													 width="16.609px" height="33.219px" viewBox="0 0 16.609 33.219" style="enable-background:new 0 0 16.609 33.219;"
													 xml:space="preserve">
												<polygon style="fill:#FAFAFA;" points="0,0 0,33.219 16.609,16.61 "/>
												</svg>
												<svg class="vid-cr">
												  <circle cx="60" cy="60" r="50" stroke="rgba(250,250,250,1)" stroke-width="4" fill-opacity="0"/>
												</svg>

													


											</div>
											<?php if(get_field('video') || !empty($image)){
												 $image =  the_post_thumbnail('');?>
													<script>
														$('.post-vid').show();

													</script>
							                  <?php }else{?>

							                    <?php 

							                  $image =  the_post_thumbnail('');

							                  if( !empty($image) ): ?>

							                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

							                  <?php endif; ?>
							                  <?php  }; ?></a>
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
												if ($count <= 5 ) {?>

											   <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
											  <?php }} ?>
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
