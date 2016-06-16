<?php /* Template Name: Advanced */ ?>

<?php get_header(); ?>
<div class="treatments-header">
  <div class="treatments-header-title">
      Our Treatments.
      <p>
          Discover a variety of everyday and bespoke treatments to leave you feeling amazed.
      </p>
  </div>
</div>


<div class="container">

<?php while ( have_posts() ) : the_post();?>
<div class="product-desc" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <h2><?php echo get_the_title();?></h2>
    <?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>

<?php /* wp_nav_menu( array('container_class' => 'products-menu-container', 'container_id' => 'products-menu-container', 'menu' => 'advancedmenu', 'menu_class' => 'productsmenu', 'menu_id' => 'productsmenu',)); */ ?>
<div class="clearfix"></div>

<div class="enquiries">
    <div class="enquiries-filter">
        <h3>More from Advanced Nutrition Program</h3>

        <select name="Advanced" onchange="javascript:handleSelect(this)">
            <option>---</option>
            <option value="/wellbeing-range">Wellbeing Range</option>
            <option value="/skin-range">Skin Range</option>
            <option value="/packs">Packs</option>
        </select>

        <div class="enquiries-contact">
            <h3>Make an Enquiry</h3>
            If you have questions please contact us below:
            <?php echo do_shortcode( '[contact-form-7 id="2378" title="Products"]' ); ?>
        </div>
    </div> <!-- .enquiries-filter -->
    <div class="enquiries-vouchers">
        <h5>Give our products as a present!</h5>
        Order our Gift Voucers <strong><a href="/contact">here</a></strong>. They are available for all your special occasions.
    </div> <!-- /.enquiries-vouchers -->
</div> <!-- /.enquiries -->

<div class="products-wrapper">
    <?php get_template_part( 'includes/products-list' ); ?>
</div>

</div> <!-- /.container -->


<?php get_footer(); ?>
