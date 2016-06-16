<?php get_header(); ?>

<div class="blog-container">
<?php if (have_posts()) : ?>

<?php while (have_posts()) : the_post(); ?>

<?php get_template_part( 'includes/blog-content' ); ?>

<?php endwhile; ?>

<?php else: ?>

    <h1>Sorry, we can't find that page or something has gone wrong...</h1>

<?php endif; ?>
            
</div><!-- /.blog-container -->

<?php get_footer(); ?>