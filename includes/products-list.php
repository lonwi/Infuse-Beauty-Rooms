<?php while ( have_posts() ) : the_post();?>
<div class="post3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



<?php

if($childrens = get_children(array('post_type'=>'page',  'order'=> 'DESC', 'post_parent' => $post->ID,))){
    $i = 0;
    foreach($childrens as $children){
        $children_permalink = get_permalink($children->ID);
        $children_thumbnail = get_the_post_thumbnail($children->ID);
        $desc = get_post_meta($children->ID, 'description', true);
        $price = get_post_meta($children->ID, 'price', true);
        $img = get_field('img', $children->ID);
        $i++;
?>

    <div class="product-item-wrapper">
        <div class="product-item-image">
            <?php if(get_post_meta($children->ID, 'img', true)):?>
                    <a href="<?php echo $children_permalink; ?>">
                        <img src="<?php echo $img; ?>" alt="">
                    </a>
                <?php else:?>
                    <a href="<?php echo $children_permalink; ?>">
                        <img src="<?php echo get_template_directory_uri();?>/img/emptyphoto.png" alt="">
                    </a>
                <?php endif; ?>
            </div> <!-- /.product-item-image -->

        <div class="product-item">
            <div class="vegan">
            <?php if (get_post_meta($children->ID, 'vegan' , true)): ?>
                    <img src="<?php echo get_template_directory_uri();?>/img/vegetarian-mark.png" alt="">
                <?php  else: ?>
                <?php endif; ?>
            </div> <!-- /.vegan -->
            <h3>
                <a href="<?php echo $children_permalink; ?>"><?php echo $children->post_title; ?></a>
            </h3>

            <div class="product-item-price">
                    <?php if(get_post_meta($children->ID, 'price', true)):?>
                        £<?php echo $price; ?>
                    <?php else:?>

                    <?php endif;?>
            </div>

            <p style="text-align:left; padding-bottom:0;">
                    <?php echo $desc;  ?>
            </p>
        </div> <!-- /.product-item -->
        <div class="product-item-more">
            <a href="<?php echo $children_permalink; ?>">More Info <i class="fa fa-chevron-right"></i></a>
        </div><!-- /.product-item-more -->
    </div> <!-- /.product-item-wrapper -->

<?php
        if ($i % 2 == 0) {
						echo '<div class="clearfix"></div>';
					}
        }
    }
			?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>
