<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Body Contouring</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    
        <a href="/advanced-nutrition-program">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/ANP_1.jpg">
                    <div class="t-title">
                        Advanced Nutrition Program <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end facials -->
        <a href="/dermalogica">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica_1.jpg">
                    <div class="t-title">
                        Dermalogica <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end waxing --> 
        <a href="/environ">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/environ_1.jpg">
                    <div class="t-title">
                        Environ <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end IPL -->
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>