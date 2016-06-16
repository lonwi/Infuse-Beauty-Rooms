<?php /* Template Name: Treatments Machines */ ?>

<?php get_header(); ?>
<div class="treatments-header">
  <div class="treatments-header-title">
      Our Treatments.
      <p>
          Discover a variety of everyday and bespoke treatments to leave you feeling amazed.
      </p>
  </div>
</div>

<div class="container-wrapper clearfix">
<div class="container">
<h4><?php echo get_the_title();?></h4>
<div class="enquiries">
    <div class="enquiries-filter">
        <h3>More Treatments</h3>
        <select name="Advanced" onchange="javascript:handleSelect(this)">
            <option>---</option>
            <option value="/lift-anti-ageing">A-Lift Anti ageing</option>
            <option value="/dermatude">Dermatude</option>
            <option value="/3d-lipo">3D Lipo</option>
        </select>
        <div class="enquiries-contact">
            <h3>Make an Enquiry</h3>
            If you have questions please contact us below:
            <?php echo do_shortcode( '[contact-form-7 id="1878" title="Products"]' ); ?>
        </div>
    </div> <!-- .enquiries-filter -->

    <div class="enquiries-vouchers">
        <h5>Give our products as a present!</h5>
        Order our Gift Voucers <strong><a href="/contact">here</a></strong>. They are available for all your special occasions.
    </div> <!-- /.enquiries-vouchers -->
</div> <!-- /.enquiries -->

<div class="products-wrapper">
<?php while ( have_posts() ) : the_post();?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="treatment-container machines"><?php the_content(); ?></div>
</div><!-- #treatment-<?php the_ID(); ?> -->
<?php endwhile; ?>
</div> <!-- /.products-wrapper -->




</div> <!-- /.container -->
</div> <!-- /.container-wrapper -->
</div>

<?php get_footer(); ?>
