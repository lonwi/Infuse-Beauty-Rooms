<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Environ</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    
        <a href="/ionzyme-range">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/environ/ionzyme.jpg">
                    <div class="t-title">
                        Ionzyme® Range <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end facials -->
        <a href="/avst">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/environ/avst.jpg">
                    <div class="t-title">
                        AVST® Range <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end waxing --> 
        <a href="/sun-care-range">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/environ/sun.jpg">
                    <div class="t-title">
                        Sun Care Range <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end IPL -->
        <a href="/body-range">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/environ/body.jpg">
                        <div class="t-title">
                            Body Range <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end facials -->
            <a href="/b-active-range">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/environ/bactive.jpg">
                        <div class="t-title">
                            B-Active Range <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end waxing --> 
            <a href="/intensive-range">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/environ/intensive.jpg">
                        <div class="t-title">
                            Intensive Range <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end IPL -->
            <div class="t-centered">
                <a href="/evenescence-range">
                    <div class="t-container">
                        <img src="<?php echo get_template_directory_uri();?>/img/products/environ/evenescence.jpg">
                            <div class="t-title">
                                Evenescence Range <i class="fa fa-angle-double-right"></i>
                            </div>
                    </div>
                </a> <!-- end make-up -->
            </div> 
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>