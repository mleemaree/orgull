      

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


<div class="single-post-wrapper">

<?php
    if(get_next_post() == 0) {?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-md-7 col-md-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-md-7 col-md-offset-2">
                  <?php if(get_field('video')){
                   the_field('video');
                   }else{?>

                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  <?php  }; ?>

                  </div>
                  <div class="col-xs-12 col-sm-3">
                  <div class="hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <object id="compartir" data="<?php echo get_template_directory_uri(); ?>/library/images/compartir.svg" type="image/svg+xml"></object>

 <div class="white-block"></div>
 
                    <ul id="social-iconos">
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/twitter.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/mail.svg" type="image/svg+xml"></object>
                      </li>
                    </ul>
                   </div>
                  </div> 
                  </div>
                </div><!--row-->
<div class="hide"></div>




                </header> <?php // end article header ?>

                <section class="entry-content cf col-xs-12 col-sm-7 col-sm-offset-3" itemprop="articleBody">
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
              <div class="article-footer single-foot col-xs-12 col-sm-7 col-sm-offset-2">
                 <?php $tags = get_the_tags();
                      if( $tags ) : ?>
                        <p class="tags">
                        <?php foreach( $tags as $tag ) { ?>
                         <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
                        <?php } ?>
                      </p>
                      
                  <?php endif; ?>
                </div>

                <footer class="single-post-footer">

                  <div class="navigation row">
                    <div class="links next-post-link col-xs-12">   
                      <?php previous_post_link('%link', 'Següent', FALSE); ?>
                    </div>
                  </div>

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>



</div>
  <?php } elseif (get_previous_post() == 0) {?>
   <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-md-7 col-md-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-md-7 col-md-offset-2">
                  <?php if(get_field('video')){
                   the_field('video');
                   }else{?>

                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  <?php  }; ?>
                </div>
                  <div class="col-xs-12 col-sm-3 hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <object id="compartir" data="<?php echo get_template_directory_uri(); ?>/library/images/compartir.svg" type="image/svg+xml"></object>

 <div class="white-block"></div>
 
                    <ul id="social-iconos">
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/twitter.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/mail.svg" type="image/svg+xml"></object>
                      </li>
                    </ul>
                   </div> 
                </div><!--row-->
<div class="hide"></div>




                </header> <?php // end article header ?>

                <section class="entry-content cf col-xs-12 col-sm-7 col-sm-offset-3" itemprop="articleBody">
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
              <div class="article-footer single-foot col-xs-12 col-sm-7 col-sm-offset-2">
                 <?php $tags = get_the_tags();
                      if( $tags ) : ?>
                        <p class="tags">
                        <?php foreach( $tags as $tag ) { ?>
                         <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
                        <?php } ?>
                      </p>
                      
                  <?php endif; ?>
                </div>

                <footer class="single-post-footer">

                  <div class="navigation row">
                    <div class="links next-post-link col-xs-12">   
                      <?php next_post_link('%link', 'Anterior', FALSE); ?>
                    </div>
                  </div>

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>
     <?php   }else{?>


              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-md-7 col-md-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-md-7 col-md-offset-2">
                     <?php if(get_field('video')){
                   the_field('video');
                   }else{?>

                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  <?php  }; ?>
                </div>
                  <div class="col-xs-12 col-sm-3 hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <object id="compartir" data="<?php echo get_template_directory_uri(); ?>/library/images/compartir.svg" type="image/svg+xml"></object>
                  </div>

                  <div class="white-block"></div>
 
                    <ul id="social-iconos">
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/facebook.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/twitter.svg" type="image/svg+xml"></object>
                      </li>
                      <li class="soc">
                          <object data="<?php echo get_template_directory_uri(); ?>/library/images/mail.svg" type="image/svg+xml"></object>
                      </li>
                    </ul>
                   </div> 
                </div><!--row-->





                </header> <?php // end article header ?>

                <section class="entry-content cf col-xs-12 col-sm-7 col-sm-offset-3" itemprop="articleBody">
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
              <div class="article-footer single-foot col-xs-12 col-sm-7 col-sm-offset-2">
                 <?php $tags = get_the_tags();
                      if( $tags ) : ?>
                        <p class="tags">
                        <?php foreach( $tags as $tag ) { ?>
                         <span class="<?php echo $tag->slug; ?>"><a href="<?php echo get_tag_link($tag->term_id); ?>"><?php echo $tag->name; ?></a></span>
                        <?php } ?>
                      </p>
                      
                  <?php endif; ?>
                </div>





<?php if (!isset($_GET['isProductor']) || !$_GET['isProductor'] ) {
  ?>
  <footer class="single-post-footer">
                  <div class="navigation row">
                    <div class="links previous-post-link col-xs-6 pull-left">
                      <?php next_post_link('%link', 'Anterior', FALSE); ?> 
                    </div> 
                    <div class="links next-post-link col-xs-6 pull-right">   
                      <?php previous_post_link('%link', 'Següent', FALSE); ?>
                    </div>
                  </div>

                </footer> 
<?php
}?>

                <?php // end article footer ?>

              </article> <?php // end article ?>



</div>

<?php }?>

