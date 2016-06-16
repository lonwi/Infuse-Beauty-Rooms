<?php /* Template Name: Treatments */ ?>

<?php get_header(); ?>
<div class="treatments-header">
  <div class="treatments-header-title">
      Our Treatments.
      <p>
          Discover a variety of everyday and bespoke treatments to leave you feeling amazed.
      </p>
  </div>
</div>

<div class="container-wrapper">
<div class="container">
<h4><?php echo get_the_title();?></h4>

<?php while ( have_posts() ) : the_post();?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<div class="treatment-container"><?php the_content(); ?></div>
</div><!-- #treatment-<?php the_ID(); ?> -->
<?php endwhile; ?>

<div class="enquiries">
    <div class="enquiries-filter">
        <h3>More Treatments</h3>
        <select name="Advanced" onchange="javascript:handleSelect(this)">
            <option>---</option>
            <option value="/facials">Facials</option>
            <option value="/waxing">Waxing</option>
            <option value="/ipl">Permanent Hair Reduction</option>
            <option value="/massages">Massages</option>
            <option value="/lashes">Lashes</option>
            <option value="/tinting">Tinting</option>
            <option value="/threading">Threading</option>
            <option value="/nails">Nails</option>
            <option value="/bride">Bride</option>
            <option value="/make-up">Make-Up</option>
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
    <?php
        if($childrens = get_children(array('post_type'=>'page', 'post_parent' => $post->ID, /*'orderby'=> 'title', 'order' => 'ASC',*/))){
        $i = 0;
            foreach($childrens as $children){
            $i++; ?>

                
            <?php if (get_post_meta($children->ID, 'offer' , true)):
                echo '<div class="treatment offer">';
                echo '<h3>'.$children->post_title.'</h3>';
                echo '<h5>'.get_post_meta($children->ID, 'price', true).'</h5>';
                echo $children->post_content;
                echo '</div>';

                    else:

                    echo '<div class="treatment">';
                    echo '<h3>'.$children->post_title.'</h3>';
                    echo '<h5>'.get_post_meta($children->ID, 'price', true).'</h5>';
                    echo $children->post_content;
                    echo '</div>';
            
                endif; ?>

    <?php
                if ($i % 2 == 0) {
                echo '<div class="clearfix"></div>';
                }
            }
        } ?>

</div> <!-- /.products-wrapper -->




</div> <!-- /.container -->
</div> <!-- /.container-wrapper -->


<?php get_footer(); ?>
