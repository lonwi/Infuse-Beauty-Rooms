
<?php get_header(); ?>
   
    
<div class="container-wrapper">
<div class="container">
    <h2>Treatments</h2>
    
<?php while ( have_posts() ) : the_post();?>
<div class="post" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  
    
        <a href="/facials">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/facials.jpg">
                    <div class="t-title">
                        Facials <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end facials -->
        <a href="/waxing">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/waxing.jpg">
                    <div class="t-title">
                        Waxing <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end waxing --> 
        <a href="/ipl">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/ipl.jpg">
                    <div class="t-title">
                        IPL <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end IPL -->
        <a href="/massages">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/massages.jpg">
                    <div class="t-title">
                        Massages <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end massages -->
        <a href="/lashes">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/lashes.jpg">
                    <div class="t-title">
                        Lashes <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end lashes -->
        <a href="/tinting">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/tinting.jpg">
                    <div class="t-title">
                        Tinting <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end tinting -->
        <a href="/threading">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/threading.jpg">
                    <div class="t-title">
                        Threading <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end threading -->
        <a href="/nails">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/nails.jpg">
                    <div class="t-title">
                        Nails <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end nails -->
        <a href="/bride">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/bridal.jpg">
                    <div class="t-title">
                        Bridal <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end bridal -->
    <div class="t-centered">
        <a href="/make-up">
            <div class="t-container">
                <img src="<?php echo get_template_directory_uri();?>/img/treatments/makeup.jpg">
                    <div class="t-title">
                        Make-Up <i class="fa fa-angle-double-right"></i>
                    </div>
            </div>
        </a> <!-- end make-up -->
    </div> 
   
   
   
 </div> <!-- /.container -->
 </div> <!-- /.container-wrapper -->

<?php get_footer(); ?>