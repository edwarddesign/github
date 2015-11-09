



<?php get_header(); ?>


  <div class="col-xs-12">
      <div class="row main_image ">
        <img src="<?php the_field('head_image');?>" alt="" data-speed="10" class="img-responsive">
      </div>
    </div>








<div class="container">
    <div class="col-xs-10">

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

      <h1><?php the_title(); ?></h1>
      <?php echo get_the_date(); ?> by <?php the_author(); ?>

     <?php the_content(); ?>
      <p>
        Category: 
        <?php the_category(', ') . " " . the_tags(__('Tags: '), ', ', ' | ') . edit_post_link(__('Edit'), ''); ?>
      </p>











  <?php endwhile; else: ?>
    <p>Sorry, no posts matched your criteria.</p>
<?php endif; ?>
    </div>








<div class="col-xs-2">
 
  <?php
    $args = array(
      'post_type'=>'ads',
      'posts_per_page'=>'4',
      'orderby'=>'rand'
      );
   $ads = new WP_Query($args);


    if($ads->have_posts()): while ($ads->have_posts()) : $ads->the_post(); ?>
     <a href="<?php the_field('link'); ?>" target="_blank">
       <img src="<?php the_field('image'); ?>" alt="" class="img-responsive">
      </a>  
  <?php endwhile; endif; ?>

  






</div>
</div>
<?php get_footer(); ?>




