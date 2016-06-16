<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Body Contouring</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    <div class="t-centered">
        <a href="/3d-lipo">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/3dlipo.jpg">
                    <div class="t-title">
                        3D Lipo <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end Lipo -->
    </div>
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>