
<?php get_header(); ?>	
   
<div class="map">
    <?php echo do_shortcode( '[wpgmza id="1"]' ); ?>
</div>

<div class="container-wrapper">
    <div class="container">
        <?php while ( have_posts() ) : the_post();?>
        <div class="post3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
        <?php the_content(); ?>
        </div><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; ?> 
    </div> <!-- /.container -->
</div>


<?php get_footer(); ?>