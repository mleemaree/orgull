
              <?php
                /*
                 * This is the default post format.
                 *
                 * So basically this is a regular post. if you don't want to use post formats,
                 * you can just copy ths stuff in here and replace the post format thing in
                 * single.php.
                 *
                 * The other formats are SUPER basic so you can style them as you like.
                 *
                 * Again, If you want to remove post formats, just delete the post-formats
                 * folder and replace the function below with the contents of the "format.php" file.
                */
              ?>
<div class="single-post-wrapper container">

              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-sm-offset-2">
                    <?php 

                    $image = get_field('image');

                    if( !empty($image) ): ?>

                      <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                    <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-7 col-sm-offset-3">
                    <p class="post-text"><?php the_field("text_area") ?></p>
                  </div>

                <div class="second-image col-xs-12 col-sm-7 col-sm-offset-2">
                  <?php 

                  $image = get_field('second_image');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

                  <?php endif; ?>
                </div>


                </header> <?php // end article header ?>

                <section class="entry-content cf" itemprop="articleBody">
                  <?php
                    // the content (pretty self explanatory huh)
                    the_content();

                    /*
                     * Link Pages is used in case you have posts that are set to break into
                     * multiple pages. You can remove this if you don't plan on doing that.
                     *
                     * Also, breaking content up into multiple pages is a horrible experience,
                     * so don't do it. While there are SOME edge cases where this is useful, it's
                     * mostly used for people to get more ad views. It's up to you but if you want
                     * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
                     *
                     * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
                     *
                    */
                    wp_link_pages( array(
                      'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'bonestheme' ) . '</span>',
                      'after'       => '</div>',
                      'link_before' => '<span>',
                      'link_after'  => '</span>',
                    ) );
                  ?>
                </section> <?php // end article section ?>

                <footer class="single-post-footer">

                  <div class="navigation row">
                    <div class="links previous-post-link col-xs-6 pull-left">
                      <?php next_post_link('%link', 'Anterior', TRUE); ?> 
                    </div> 
                    <div class="links next-post-link col-xs-6 pull-right">   
                      <?php previous_post_link('%link', 'Següent', TRUE); ?>
                    </div>
                  </div>

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>

</div>
