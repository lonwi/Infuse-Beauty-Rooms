<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Advanced Nutrition Program</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    
        <a href="/wellbeing-range">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/ANP/wellbeing.jpg">
                    <div class="t-title">
                        Wellbeing Range <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end facials -->
        <a href="/skin-range">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/ANP/skin.jpg">
                    <div class="t-title">
                        Skin Range <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end waxing --> 
        <a href="/packs">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/ANP/packs.jpg">
                    <div class="t-title">
                        Packs <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end IPL -->
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>