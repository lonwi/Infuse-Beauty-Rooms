

<div class="blog-item">
    <div class="entry-header">
            <div class="entry-image">
                
				<?php if ( has_post_thumbnail() ) :?>
                <a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>" class="image-border" rel="bookmark">
                    <?php echo get_the_post_thumbnail($post->ID, 'large'); ?>
                </a>
                <?php else:?>
                <!--<a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>" class="image-border" rel="bookmark">-->
                    <!--<img src="<?php echo THEME_ASSETS; ?>/imgages/default-blog.png" alt="<?php echo get_the_title();?>"></a>-->
                <!--</a>-->
                <?php endif;?>
                
            </div> <!-- /.entry-image -->
            <?php
            if ( is_single() ) :
				the_title( '<h2>', '</h2>' );
			else : ?>
        <h4>
            <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_titlesmall('', '<i class="fa fa-angle-double-right"></i>', true, '25') ?></a></h4>        
			<?php endif; ?>
            
        </div> <!-- /.entry-header -->
         <?php if(is_single()):?>
        <div class="entry-content">
        	<?php the_content();?>
        </div>	
        <?php else:?>
        <div class="entry-summary">
			<?php echo substr(get_the_excerpt(), 0,200).'...'; ?>
            <a href="<?php echo get_permalink(); ?>" rel="bookmark" title="<?php echo get_the_title();?>">Read more</a>
        </div>
        <?php endif;?>
    
        <div class="entry-meta">
        	<span class="date">Posted <?php echo date('D, d/m/y',strtotime(get_the_date('Y-m-d')));?></span>
        </div>
        
    
<div class="clearfix"></div> 
</div> <!-- /.blog-item -->