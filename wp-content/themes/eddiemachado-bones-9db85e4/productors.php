<?php /* Template Name: Productors */ ?>

<?php get_header(); ?>

<?php if( have_rows('productor') ): ?>
<div class="row ddd">
    <div>
        <h1 id="prod-header">Productors</h1>
    </div>
</div>

  <div class="container prod-cont">

    <?php while( have_rows('productor') ): the_row(); ?>

	<div class="col-xs-12 col-sm-6 col-md-4 productor">
        <div class="row prod-img">
        	<div class="col-xs-12">
        		<img class="prod-imag" src="<?php the_sub_field('imagen');?>" />
                <div class="hover-elem">
                    <object data="<?php echo get_template_directory_uri(); ?>/library/images/plus.svg" class="prod-plus" type="image/svg+xml"></object>
                    <p class="prod-entre">Veure entrevista</p>
                </div>
            </div>
        </div>
        <div class="row prod-nom">
        	<div class="col-xs-9">
        		<h3 class="prod-nem"><?php the_sub_field('nom'); ?></h3>
        	</div>
        	<div class="col-xs-3 arrow">
             <?php $taglink = the_sub_field('tag',202) ?>
             <?php the_permalink($taglink); ?>
        		<a href="<?php get_term_link($taglink); ?>" class="has-svg">
					<object class="pull-left prod-arrow" data="<?php echo get_template_directory_uri(); ?>/library/images/prod-arrow.svg" type="image/svg+xml"></object>
                </a>
        	</div>
        </div>
		<div class="row prod-emp">
        	<div class="col-xs-12">
        		<p class="prod-emp"><?php the_sub_field('empresa'); ?></p>
        	</div>
        </div>
        <div class="row prod-prof">
        	<div class="col-xs-12">
        		<p class="prod-prof"><?php the_sub_field('professio'); ?></p>
        	</div>
        </div>
      </div>
        <?php 
        
        
        // do something with $sub_field_3
        
        ?>
        
    <?php endwhile; ?>
 </div>
 

 
<?php endif; ?>

<script>
    $('.productor').mouseenter(function(){
        $(this).find('.prod-emp, .prod-prof, .prod-nem,.prod-imag').css('opacity', '0.2');
        $(this).find('.hover-elem').css('opacity','1');
    });
    $('.productor').mouseleave(function(){
        $(this).find('.prod-emp, .prod-prof, .prod-nem,.prod-imag').css('opacity', '1');
        $(this).find('.hover-elem').css('opacity','0');
    });
</script>


<?php get_footer(); ?>