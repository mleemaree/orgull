<?php /* Template Name: Post */ ?>

<?php get_header(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>

<h1 class="entry-title"><a title="Permanent link to <?php the_title_attribute(); ?>" rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>

<div class="entry-content">
<?php
the_content( __( 'Continued&amp;hellip;' ) );
wp_link_pages();
?>
</div>
<?php 

			$image = get_field('image');

			if( !empty($image) ): ?>

				<img class="img img-responsive" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />

			<?php endif; ?>

<?php the_tags(); ?>

<?php the_category(); ?>

<address class="vcard author">
<span class="n"><?php the_author(); ?></span>
</address>

<abbr class="published" title="<?php the_time( 'Y-m-d\TH:i' ); ?>"><?php the_date(); ?> @ <?php the_time(); ?></abbr>

<a href="<?php trackback_url(); ?>"><?php _e( 'Trackback URL' ); ?></a>

<?php comments_popup_link(); ?>

<?php edit_post_link(); ?>
</div>


<?php get_footer(); ?>