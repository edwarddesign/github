<div class="header">
    <div class="container">
        <div class="col-xs-2"></div>
        <div class="col-xs-4">
            <div class="row logo">
                <a href="<?php the_field('link'); ?>" target="_blank">
                <img src="<?php the_field('logo');?>" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-xs-1">
            <div class="row facebook">
                <a href="<?php the_field('link_to_facebook'); ?>" target="_blank">
                <img src="<?php the_field('facebook');?>" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-xs-1">
            <div class="row twitter">
                <a href="<?php the_field('link_to_twitter'); ?>" target="_blank">
                <img src="<?php the_field('twitter');?>" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-xs-1">
            <div class="row youtube">
                <a href="<?php the_field('link_to_youtube'); ?>" target="_blank">
                <img src="<?php the_field('youtube');?>" alt="" class="img-responsive">
            </div>
        </div>
         <div class="col-xs-1">
            <div class="row vimeo">
                <a href="<?php the_field('link_to_vimeo'); ?>" target="_blank">
                <img src="<?php the_field('vimeo');?>" alt="" class="img-responsive">
            </div>
        </div>
        <div class="col-xs-2"></div>
    </div>
</div>


<?php get_header();
/*
Template Name: Contact Page
*/
?>

<!--
<section data-speed="10" data-type="background" id="box2"  style=" height:600px; background-image:url(<?php the_field('top_image');?>); img-responsive;">
    <div class="col-xs-12" >
        <div class="row top_image">
            <img src="" alt="" class="img-responsive">
        </div>
    </div>
</section>
-->



<div class="parallax-image-wrapper parallax-image-wrapper-100" data-anchor-target="#top + .gap" data-bottom-top="transform:translate3d(0px, 200%, 0px)" data-top-bottom="transform:translate3d(0px, 0%, 0px)">
    <div class="parallax-image parallax-image-100"style="background-image:url(<?php the_field('top_image');?>)" data-anchor-target="#top + .gap" data-bottom-top="transform: translate3d(0px, -80%, 0px);" data-top-bottom="transform: translate3d(0px, 80%, 0px);"> 
    </div>
    <!--the +/-80% translation can be adjusted to control the speed difference of the image-->
</div>

<div id="skrollr-body">
    <div  id="top"></div>
    <div class="gap gap-100" style="background-image:url(<?php the_field('top_image');?>);"></div>
</div>




<?php if (have_posts()) : while (have_posts()) : the_post(); ?>


<div class="container">
    <div class="col-xs-6">
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
    </div>


    

    <div class="col-xs-6">    
        <h2 class="text-center">Contact Us</h2><br />
            <form role="form">
                <div class="form-group">
                    <label for="email">Full Name:</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder-"edwardh_10@yahoo.com"/>
                </div>
                <div class="form-group">
                    <label for="name">Email:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder-"Full Name"/>
                </div>
                <div class="form-group">
                    <label for="name">Message:</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder-"Full Name"/>
                </div>
               
                <div class="form-group">
                <input type="checkbox" /> Send me promotional content
                </div>
                <button type="submit" class="btn btn-default">Sign Up</button>
            </form>
    </div>














  <?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>
</div>




<?php get_footer(); ?>

