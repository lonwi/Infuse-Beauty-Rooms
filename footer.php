<div class="clearfix"></div>
          <div class="newsletter-wrapper">
          	<div class="container">
              <h2 class="white">Advice from Dermalogica® Skin Experts, PLUS special offers?</h2>
                <p>Feeling lucky? Stay up-to-date with the latest in skincare tips from our experts, and discover jaw-dropping deals on your favourite Spa &amp; Beauty treatments! </p>
<!-- Begin MailChimp Signup Form -->
<div id="mc_embed_signup">
<form action="//websquare.us12.list-manage.com/subscribe/post?u=72ca8f3605e0cd483756a618c&amp;id=5d6ca81ca5" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
    <div id="mc_embed_signup_scroll">
        <input type="text" value="" placeholder="Name (Optional)" name="NAME" class="" id="mce-NAME">
        <input type="email" value="" placeholder="E-mail *" name="EMAIL" class="required email" id="mce-EMAIL">
        <input type="submit" value="Sign-me Up!" name="subscribe" id="mc-embedded-subscribe" class="button">
        <div id="mce-responses" class="clear">
            <div class="response" id="mce-error-response" style="display:none"></div>
            <div class="response" id="mce-success-response" style="display:none"></div>
        </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
        <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_72ca8f3605e0cd483756a618c_5d6ca81ca5" tabindex="-1" value=""></div>
    </div>
</form>
</div>
<!--End mc_embed_signup-->

          </div> 
          </div> <!-- /.newsletterwrapper -->

          <div class="footer-wrapper">
              <footer>
              	<div class="footer-column">
                    <div class="footer-column-title">Opening Hours</div>
                        <table>
                            <tbody>
                                <tr>
                                    <td class="left-column">Monday - Thursday</td>
                                    <td class="right-column">7:00am - 9:30pm</td>
                                </tr>
                                <tr>
                                    <td class="left-column">Friday</td>
                                    <td class="right-column">7:00am - 9:00pm</td>
                                </tr>
                                <tr>
                                    <td class="left-column">Saturday</td>
                                    <td class="right-column">9:00am - 4:00pm</td>
                                </tr>
                                <tr>
                                    <td class="left-column">Sunday</td>
                                    <td class="right-column">10:00am - 4:00pm</td>
                                </tr>
                            </tbody>
                        </table>
                    <div class="test-title">Testimonials</div>
                    <div class="testimonials">
                        <div class="test">
                        <?php $testimonials = get_posts(array('post_type' => 'testimonial'));?>
                        <?php //print_r($testimonials);?>
                        <?php foreach($testimonials as $testimonial):?>
                            <div class="testimonial">
                                <blockquote>"<?php echo $testimonial->post_content;?>"</blockquote>
                                <p>- <?php echo $testimonial->post_title;?></p>
                            </div>
                        <?php endforeach;?>
                        </div><!-- /.test -->
                    </div><!-- /.testimonials -->
                    
                    
                 </div>
                <div class="footer-column">
              		<div class="footer-column-title">Infuse Beauty Rooms</div>
                    
                    <p>Listers Health<br>
                    Lister Mills, Heaton Road<br>
                    Bradford BD9 4SH</p>
                    
                     <p><i class="fa fa-phone"></i>0787 082 1001<br>
                     <i class="fa fa-envelope"></i><a href="mailto:shazia@infusebeauty.co.uk" target="_blank">shazia@infusebeauty.co.uk</a></p>
                  
                    <a href="" class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-twitter fa-stack-1x"></i>
                    </a>
                    <a href="" class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-facebook fa-stack-1x"></i>
                    </a>
                    <a href="" class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-pinterest fa-stack-1x"></i>
                    </a>
                    <a href="" class="fa-stack fa-lg">
                      <i class="fa fa-circle fa-stack-2x"></i>
                      <i class="fa fa-instagram fa-stack-1x"></i>
                    </a>
                 </div>
                  
                 <div class="footer-column">
                    <div class="footer-column-title">Latest on the Blog</div>
            		
<?php $temp_query = $wp_query; ?>
<?php query_posts('showposts=3'); ?>
<?php while (have_posts()) : the_post(); ?>
<div class="footer-blog">
    <a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
        <?php the_titlesmall('', '<i class="fa fa-angle-double-right"></i>', true, '30', '...'); ?>
    </a><br>
    <?php echo substr(get_the_excerpt(), 0,40).'...'; ?><br>
    <span>Posted on <?php echo date('d/m/y',strtotime(get_the_date('Y-m-d')));?></span>
</div>

<?php if ( has_post_thumbnail() ) :?>
<a href="<?php echo get_permalink();?>" title="<?php echo get_the_title();?>" class="image-border" rel="bookmark"></a>
    <br>
<?php endif;?>
<?php endwhile; ?>
                     
                 </div>
                  
                  

                 <div class="clearfix"></div>
                 <div class="copyright">© Copyright 2016 - <a href="/privacy-policy/">Privacy Policy</a> - <a href="/cookies/">Cookie Policy</a> - <a href="/terms-of-conditions/">Terms of Condition</a></div>
              </footer>
           </div>   
		</div> <!-- /.page-wrapper -->
		<?php wp_footer(); // js scripts are inserted using this function ?>
	</body>
</html>