<?php /* Template Name: Blog */ ?>

<?php get_header(); ?>

<!--<div id="content" class="clearfix">
	<div class="wrap">-->
<div class="container-wrapper">
    <div class="container">
        <?php 
            $banner_image = get_field( 'banner' ,$post->ID);
            $banner_url = get_field( 'banner_url' ,$post->ID);
            if(isset($banner_image) && $banner_image != ""){
                if(isset($banner_image['title']) && $banner_image['title'] !=""){
                    $banner_title = $banner_image['title'];
                }else{
                    $banner_title = get_the_title().' Banner Image';
                }
                echo '<div class="page-banner clearfix">';
                if(isset($banner_url) && $banner_url != "") echo '<a href="'.$banner_url.'">';
                echo '<img src="'.$banner_image['sizes']['image-banner'].'" alt="'.$banner_title.'">';
                if(isset($banner_url) && $banner_url != "") echo '</a>';
                echo '</div>';
            }
        ?>

         <h2><?php echo get_the_title();?></h2>

        <?php the_content(); ?>

        <?php
            $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
            if($paged > 1){
                $per_page = 4;
            }else{
                $per_page = 4;
            }
            $args = array( 'post_type' => 'post', 'post_status' => 'publish', 'posts_per_page' => $per_page, 'orderby' => 'date', 'order' => 'DESC', 'paged' => $paged);
            $wp_query = null; $wp_query = new WP_Query($args);
            $i = 0;
            if( $wp_query->have_posts() ) :?>

                <?php while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

                    <?php get_template_part( 'includes/blog-list-normal' ); ?>

                <?php endwhile;?>

            <?php else: ?>
                <p><?php _e( 'Sorry, we can\'t find that page or something has gone wrong...', GETTEXT_DOMAIN ); ?></p>
            <?php endif;?>

            <?php
                // Previous/next page navigation.
                get_template_part( 'includes/pagination' );
            ?>

            <?php wp_reset_query();?>



    </div> <!-- /.container -->
</div> <!-- /.container-wrapper -->
<div class="clearfix"></div>
    	
<?php get_footer(); ?>