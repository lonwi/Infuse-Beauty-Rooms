<?php get_header(); ?>

<div class="container-wrapper">
    <div class="container">
        <?php while ( have_posts() ) : the_post();?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php echo'<h2>Our Promise</h2>'; ?>
                <?php the_content(); ?>
                </div><!-- #post-<?php the_ID(); ?> -->
        <?php endwhile; ?>  
    </div> <!-- /.container -->

    <div class="container">
        <h2>Our Treatments</h2>
        <p style="text-align:center;">Looking for the perfect treatment to lather your skin concerns? At Infuse Beauty Rooms in Bradford, you’ll find our Dermalogica-licensed therapists are the highest trained skin &amp; beauty therapists in the industry. So if it’s acne or breakouts troubling you, or a microdermabrasion facial or a chemical peel you truly deserve. Don’t just trust a skin expert.</p>
        <p style="text-align:center;">Feel confident your next skin treatment is performed by a team of passionate Dermalogica-licensed therapists using the latest in skincare techniques, and technology.</p>
        <p style="text-align:center;">Trained in over 30 specialities, our team offer a wide range of fabulous body treatments; head to heal. So whether it’s all 4 factors of acne you wish to control, dehydrated or oily skin, revel in our luxurious treatments to reduce effects of ageing, or revitalise your skin for that fresher, feel-good look. Whatever your skin concern, be assured we have a treatment tailored for you.</p>
        
        <p style="text-align:center;">Wish to solve all your skin concerns? Call us today on <strong>0787 082 1001</strong>.</p>

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
