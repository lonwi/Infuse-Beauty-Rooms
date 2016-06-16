<?php
	/*if(isset($_POST['contact_form_nonce'])){
		if(wp_verify_nonce( $_POST['contact_form_nonce'], 'contact_form')){
			if(empty($_POST['name']) && empty($_POST['email'])){
				
				if(!empty($_POST['cf_name']) && !empty($_POST['cf_email']) && is_email($_POST['cf_email']) && !empty($_POST['cf_subject']) && !empty($_POST['cf_message'])) {
				
					$cf_name = sanitize_text_field($_POST['cf_name']);
					$cf_email = sanitize_email($_POST['cf_email']);
					$cf_subject = sanitize_text_field($_POST['cf_subject']);
					$cf_message = sanitize_text_field($_POST['cf_message']);
					
					$to = 'denise@websquare.co.uk';
					$subject = $cf_subject;
					
					$message = "Name:".$cf_name. "\n";
					$message .= "Email:".$cf_email. "\n";
					$message .= "Subject:".$cf_subject. "\n";
					$message .= "Message:\n\n".$cf_message;
					
					$headers = 'From: $cf_name <$cf_email>' . "\r\n";

					$sent = wp_mail( $to, $subject, $message, $headers);
				}
			}
		}
	} 
?>
<?php get_header(); ?>	
   
 
<div class="container-wrapper">
<?php while ( have_posts() ) : the_post();?>
<div class="post3" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<?php the_content(); ?>
</div><!-- #post-<?php the_ID(); ?> -->
<?php endwhile; ?>  

    <div class="contact">
    
    <?php  if(isset($sent)  && $sent == true): ?>
    	<p>Thank you sd,aspk [pas</p>
    <?php else: ?>
 	<div id="contact_form" class="contact-form" method="post" action="<?php echo get_permalink();?>">
    	<div id="result"></div>
    	<div class="hidden">
        	<input type="text" name="name" placeholder="Name*" style="display:none;">
            <input type="text" name="email" placeholder="Email*" style="display:none;">
            <?php wp_nonce_field('contact_form', 'contact_form_nonce'); ?>
        </div>
        <div class="form-group">
       		<input type="text" name="cf_name" id="name" class="form-control input-name" placeholder="Name*" value="" required="required">
        </div>
        <div class="form-group">
       		<input type="email" name="cf_email" id="email" class="form-control input-email" placeholder="E-mail*" value="" required="required">
        </div>
        <div class="form-group">
       		<input type="text" name="cf_subject" id="subject" class="form-control input-subject" placeholder="Subject*" value="" required="required">
        </div>
        <div class="form-group">
       		<textarea name="cf_message" id="message" class="form-control input-message" placeholder="Message*"	maxlength="1000" required="required"></textarea>
        </div>
        <div class="clearfix">
        	<input type="submit" class = "btn btn-primary" value="Send" name="submit">   
        </div>       
    </div>  

<script type="text/javascript" >	
function cvf_form_validate(element) {
    $('html, body').animate({scrollTop: $(element).offset().top-100}, 150);
    element.effect("highlight", { color: "#F2DEDE" }, 1500);
    element.parent().effect('shake');
}
    
jQuery(document).ready(function($) {

    $('body').on('click', '.submit', function() {
        
        if($('.input-name').val() === '') {
            cvf_form_validate($('.input-name'));
            
        } else if($('.input-email').val() === '') {             
            cvf_form_validate($('.input-email'));
			
		} else if($('.input-subject').val() === '') {               
            cvf_form_validate($('.input-subject'));
          
        } else if($('.input-message').val() === '') {               
            cvf_form_validate($('.input-message'));
            
        } else {
            var data = {
                'action': 'cvf_send_message',
                'name': $('.input-name').val(),
                'email': $('.input-email').val(), 
				'subject': $('.input-subject').val(), 
                'message': $('.input-message').val() 
            };
            
            var ajaxurl = '<?php echo admin_url('admin-ajax.php'); ?>';
            $.post(ajaxurl, data, function(response) {
                if(response === 'success'){
                    alert('Message Sent Successfully!');
                    $('.input-name').val(''); $('.input-email').val(''); $('.input-subject').val(''); $('.input-message').val('');
                }
            });
        } 
    });
}); 
</script>  

	<?php endif;  ?>
    </div>
</div> <!-- /.container -->


<?php get_footer(); */ ?>
