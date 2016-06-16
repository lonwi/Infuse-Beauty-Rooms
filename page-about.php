<?php get_header(); ?>
	<div class="treatments-header">
  <div class="treatments-header-title">About</div>
</div>
   
<div class="container-wrapper">
    <div class="container">
            <?php while ( have_posts() ) : the_post();?>
            <div class="post2" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <?php the_content(); ?>
            </div><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?>  
    </div> <!-- /.container -->
</div> <!-- /.container-wrapper -->


<?php get_footer(); ?>
