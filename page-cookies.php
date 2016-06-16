<?php get_header();  ?>


<div class="container">
        <?php while ( have_posts() ) : the_post();?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php echo'<h2>Cookie Policy</h2>'; ?>
                <?php the_content(); ?>
                </div><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; ?> 
</div>


<?php get_footer(); ?>