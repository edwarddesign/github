<?php get_header(); ?>






<div class="container">
	<div class="row">



<?php if(have_posts()): while (have_posts()) : the_post(); ?>


		<div class="col-sm-6 col-md-4 col-lg-3">
	  		<h1><?php the_title(); ?></h1>
		<?php 
		if ( has_post_thumbnail() ) : 
			//echo get_post(get_post_thumbnail_id())->post_excerpt;
			//echo get_post(get_post_thumbnail_id())->post_content;
			?>
			<a href="<?php the_permalink(); ?>"  title="<?php the_title_attribute(); ?>">
			<img src="<?php the_field('main_image'); ?>" class="img-responsive" alt="">
			
			</a>
		<?php endif; ?> 
		</div>

<!--		<div class="col-xs-3">
	  	
	 	
	 		<img src="<?php the_field('main_image'); ?>" class="img-responsive" alt="">
	 		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
		
		</div>-->




<?php endwhile; endif; ?>



</div>
</div>
<?php get_footer(); ?>