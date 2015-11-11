
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

<?php
    if(get_next_post() == 0) {?>
        <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-sm-7 col-sm-offset-2">
                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <object id="compartir" data="<?php echo get_template_directory_uri(); ?>/library/images/compartir.svg" type="image/svg+xml"></object>


 
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
                    <div class="links next-post-link col-xs-12 pull-right">   
                      <?php previous_post_link('%link', 'Següent', TRUE); ?>
                    </div>
                  </div>

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>



</div>
  <?php } elseif (get_previous_post() == 0) {?>
   <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-sm-7 col-sm-offset-2">
                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <object id="compartir" data="<?php echo get_template_directory_uri(); ?>/library/images/compartir.svg" type="image/svg+xml"></object>


 
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
                    <div class="links next-post-link col-xs-12 pull-right">   
                      <?php next_post_link('%link', 'Anterior', TRUE); ?>
                    </div>
                  </div>

                </footer> <?php // end article footer ?>

              </article> <?php // end article ?>
     <?php   }else{?>


              <article id="post-<?php the_ID(); ?>" <?php post_class('cf'); ?> role="article" itemscope itemprop="blogPost" itemtype="http://schema.org/BlogPosting">

                <header class="article-header entry-header">
                <div class="row">
                  <div class="col-xs-12 col-sm-6 col-sm-offset-2">
                    <h1 class="single-title" itemprop="headline" rel="bookmark"><?php the_title(); ?></h1>
                  </div>
                  <div id="image" class="col-xs-12 col-sm-7 col-sm-offset-2">
                    <?php 

                  $image =  the_post_thumbnail('');

                  if( !empty($image) ): ?>

                    <img class="img img-responsive single-post-img" src="<?php echo $image['url']; ?>" />

                  <?php endif; ?>
                  </div>
                  <div class="col-xs-12 col-sm-3 hers">
                  <div id="obj">
                    <h4 id="comp-word">Compartir</h4>
                    <svg version="1.1" id="compartir" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       width="27.027px" height="27.917px" viewBox="0 0 27.027 27.917" style="enable-background:new 0 0 27.027 27.917;"
                       xml:space="preserve">
                    <g>
                      <defs>
                        <rect id="SVGID_1_" x="0" y="0" width="27.027" height="27.917"/>
                      </defs>
                      <clipPath id="SVGID_2_">
                        <use xlink:href="#SVGID_1_"  style="overflow:visible;"/>
                      </clipPath>
                      <g style="clip-path:url(#SVGID_2_);">
                        <path style="fill:#333333;" d="M21.699,27.917c-2.935,0-5.322-2.389-5.322-5.324c0-0.541,0.081-1.063,0.231-1.556l-7.125-3.758
                          c-0.977,1.221-2.479,2.003-4.16,2.003C2.388,19.282,0,16.894,0,13.957c0-2.936,2.388-5.324,5.323-5.324
                          c1.681,0,3.183,0.782,4.16,2.002l7.125-3.755c-0.15-0.492-0.231-1.015-0.231-1.556C16.377,2.388,18.765,0,21.699,0
                          c2.938,0,5.327,2.388,5.327,5.324c0,2.937-2.39,5.325-5.327,5.325c-1.68,0-3.18-0.782-4.155-2.001l-7.125,3.755
                          c0.15,0.492,0.231,1.014,0.231,1.554s-0.081,1.062-0.231,1.555l7.125,3.758c0.976-1.22,2.476-2.002,4.155-2.002
                          c2.938,0,5.327,2.389,5.327,5.325C27.026,25.528,24.637,27.917,21.699,27.917z M21.699,19.268c-1.832,0-3.322,1.491-3.322,3.325
                          c0,1.833,1.49,3.324,3.322,3.324c1.835,0,3.327-1.491,3.327-3.324C25.026,20.759,23.534,19.268,21.699,19.268z M5.323,10.633
                          C3.491,10.633,2,12.124,2,13.957c0,1.834,1.491,3.325,3.323,3.325c1.834,0,3.327-1.491,3.327-3.325
                          C8.65,12.124,7.157,10.633,5.323,10.633z M21.699,2c-1.832,0-3.322,1.491-3.322,3.324c0,1.833,1.49,3.325,3.322,3.325
                          c1.835,0,3.327-1.492,3.327-3.325C25.026,3.491,23.534,2,21.699,2z"/>
                      </g>
                    </g>
                    </svg>
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

<?php }?>

