<?php get_header(); ?>








<?php if (have_posts()) : while (have_posts()) : the_post(); ?>





	



<?php endwhile; else: ?>
    <p>Sorry, no pages matched your criteria.</p>
<?php endif; ?>


<?php get_footer(); ?>