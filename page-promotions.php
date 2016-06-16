<?php get_header(); ?>

<div class="container">
   <h2>Promotions</h2>
        <?php while ( have_posts() ) : the_post();?>
                <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php the_content(); ?>
                
                <?php /*
                if($childrens = get_children(array('post_type'=>'page', 'post_parent' => $post->ID,))){
                    $i = 0;
                    foreach($childrens as $children){
                        $i++; ?>
                        <div class="promos">
                            <h4><?php echo $children->post_title; ?></h4>
                            <?php echo $children->post_content;?>
                        </div>
                    <?php
                        if ($i % 3 == 0) {
                            echo '<div class="clearfix"></div>';
                        }
                        
                    }
                } */
                ?>
                <pre>
                <?php //print_r($children);?>
                </pre>
                </div><!-- #post-<?php the_ID(); ?> -->
            <?php endwhile; ?> 
</div>

<?php get_footer(); ?>