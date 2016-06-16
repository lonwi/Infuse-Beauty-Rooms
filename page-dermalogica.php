<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Dermalogica</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    
        <a href="/oiliness">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/oiliness.jpg">
                    <div class="t-title">
                        Oiliness <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end facials -->
        <a href="/acne-breakouts">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/acne.jpg">
                    <div class="t-title">
                        Acne and Breakouts <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end waxing --> 
        <a href="/dryness-dehydration">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/dryness.jpg">
                    <div class="t-title">
                        Dryness and Dehydration <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end IPL -->
        <a href="/signs-skin-aging">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/signs.jpg">
                        <div class="t-title">
                            Signs of Skin Ageing <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end facials -->
            <a href="/uneven-skin-tone">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/uneven.jpg">
                        <div class="t-title">
                            Uneven Skin Tone <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end waxing --> 
            <a href="/sensitivity-redness">
                <div class="t-container">
                    <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/sensitivity.jpg">
                        <div class="t-title">
                            Sensitivity or Redness <i class="fa fa-angle-double-right"></i>
                        </div>
                </div>
            </a> <!-- end IPL -->
            <div class="t-centered">
                <a href="/shaving">
                    <div class="t-container">
                        <img src="<?php echo get_template_directory_uri();?>/img/products/dermalogica/shaving.jpg">
                            <div class="t-title">
                                Shaving <i class="fa fa-angle-double-right"></i>
                            </div>
                    </div>
                </a> <!-- end make-up -->
            </div> 
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>