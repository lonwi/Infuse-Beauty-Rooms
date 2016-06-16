<div class="container clearfix">
    <div class="sep-prod-container">
        <div class="sep-prod-img">
            <?php if(get_post_meta($post->ID, 'img', true)):?>
                <img src="<?php the_field('img'); ?>" alt="">
            <?php else:?>
                <img src="<?php echo get_template_directory_uri();?>/img/emptyphoto.png" alt="">
            <?php endif;?>
        </div>
        
        <div class="sep-prod-content">
            <div class="sep-prod-title">
                <?php if( get_field('vegan') ): ?>
                   <img src="<?php echo get_template_directory_uri();?>/img/vegetarian-mark.png" alt="">
                    <?  else: ?>
                    <?php endif; ?>
                <?php echo get_the_title(); ?>
                
            </div>  
            <div class="sep-prod-price">
                <?php if(get_post_meta($post->ID, 'price', true)):?>      
                    £<?php the_field('price'); ?>  
                <?php else:?> 
                <p></p>
                <?php endif;?>
            </div>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>    
            <span style="color: #878787;"><?php echo the_content(); ?> 
            <p><strong style="color:#75c044;">Only available in store</strong></p>
                <p> <a id="contact-toggle">Make an enquiry</a> </p>
            <div id="form-toggle">
                <p>Contact us below to ask about or reserve this product</p>
                <?php echo do_shortcode( '[contact-form-7 id="2434" title="Seperate Products"]' ); ?>
            </div>
                
            </span>
        <?php endwhile; else : ?>
        <?php endif; ?>
        </div>
        
        <div class="clearfix"></div>
        <div class="ingredients-wrapper">
            <?php if( get_field('dosage') ): ?>
                    <?php echo do_shortcode( '[tabby title="How To Use"]'  ); ?>
                    <?php the_field('dosage'); ?>
            <?php else: ?>
            <?php endif; ?> 
            
            <?php if( get_field('ingredients') ): ?>
                <?php echo do_shortcode( '[tabby title="Ingredients"]'  ); ?>
                <?php the_field('ingredients'); ?>
            <?php else: ?>
            <?php endif; ?> 
            
            <?php if( get_field('cautions') ): ?>
                <?php echo do_shortcode( '[tabby title="Cautions"]'  ); ?>
                <?php the_field('cautions'); ?>
            <?php else: ?>
            <?php endif; ?> 
        <?php echo do_shortcode( '[tabbyending]'  ); ?>   


<?php /*
            <div class="tabs">
    <!-- Radio button and lable for #tab-content1 -->
    <input type="radio" name="tabs" id="tab1" checked >
    <label for="tab1">
        How To Use
    </label>
    <!-- Radio button and lable for #tab-content2 -->
    <input type="radio" name="tabs" id="tab2">
    <label for="tab2">
        Ingredients
    </label>
    <!-- Radio button and lable for #tab-content3 -->
    <input type="radio" name="tabs" id="tab3">
    <label for="tab3">
        Cautions
    </label>
                
    <div id="tab-content1" class="tab-content">
        <?php if( get_field('dosage') ): ?>
                    <div class="ingredients">
                        <?php the_field('dosage'); ?>
                    </div>
                <?php    else: ?>
                <?php endif; ?>
    </div> <!-- #tab-content1 -->
                
                
    <div id="tab-content2" class="tab-content">
        
        <?php if( get_field('ingredients') ): ?>
                    <div class="ingredients">
                           <?php the_field('ingredients'); ?>
                    </div>
                <?php    else: ?>
        
         <script type="text/javascript">jQuery('#tabs tab2').hide()</script>
                   <div class="ingredients">
                        <?php echo 'No ingredients available'; ?>
                    </div>

                <?php endif; ?>
    </div> <!-- #tab-content2 -->
                
    <div id="tab-content3" class="tab-content">
        <?php if( get_field('cautions') ): ?>
                    <div class="ingredients">
                        <?php the_field('cautions'); ?>
                    </div>
                <?php    else: ?>
                    <div class="ingredients">
                       <?php echo 'No cautions available'; ?>
                    </div>
                <?php endif; ?>
    </div> <!-- #tab-content3 --> 
</div>             */ ?>
        </div> <!-- /.ingredients-wrapper -->
    </div> <!-- /.sep-prod-container -->   
</div> <!-- /.container -->