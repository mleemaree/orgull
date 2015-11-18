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

										<div class="image-wrapper col-xs-12 col-sm-8 col-sm-offset-2">
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

											</a>
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

											   <span class="tag <?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
											  <?php }} ?>
											</p>
											
											

<?php endif; ?>
						

						
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
<?php echo(single_tag_title( '', false ) ); ?>
				
			</div>

			<script>
			$(function(){

      if($('.tag').hasClass('<?php echo(single_tag_title( '', false ) ); ?>')){
        $('.<?php echo(single_tag_title( '', false ) ); ?>').addClass('active-tag');
        $('.<?php echo(single_tag_title( '', false ) ); ?> a').prepend('<span class="eliminate"><object id="tagx" data="<?php echo get_template_directory_uri(); ?>/library/images/tag-x.svg" type="image/svg+xml"></object></span>');
        $('.active-tag').on('click', function() {
           window.location.href = 'http://orgullpages.wp#main-anchor';
            return false;
        });

      };
      
      });
			</script>

<?php get_footer(); ?>
