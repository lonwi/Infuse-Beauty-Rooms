<?php
add_action( 'after_setup_theme', 'infusetwo_setup' );
function infusetwo_setup() {
	register_nav_menus( array(
		'primary' => __( 'Main Menu', 'infusetwo' ),
		'footer'  => __( 'Footer Menu', 'infusetwo' ),
	) );
	add_theme_support( 'post-thumbnails' ); 
	add_image_size( 'banner', 2000, 500, array( 'center', 'center' ) );
    add_image_size( 'blog-big', 1500, 900, array( 'center', 'center' ) );
}

add_action( 'wp_enqueue_scripts', 'infusetwo_scripts_and_styles' );
function infusetwo_scripts_and_styles() {
	wp_enqueue_style( 'fonts-style', '//fast.fonts.net/cssapi/b14aa172-accb-44b2-be91-ee130f7452a4.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'bxslider-css', get_template_directory_uri() . '/css/jquery.bxslider.css', array(), '4.1.2', 'all' );
	wp_enqueue_style( 'infusetwo-reset-style', get_template_directory_uri() . '/css/reset.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'infusetwo-style', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'infusetwo-header-style', get_template_directory_uri() . '/css/header.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'infusetwo-footer-style', get_template_directory_uri() . '/css/footer.css', array(), '1.0.0', 'all' );
	wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '4.5.0', 'all' );
	wp_enqueue_script( 'bxslider-js', get_template_directory_uri() . '/js/jquery.bxslider.min.js', array( 'jquery' ), '4.1.2', true );
	wp_enqueue_script( 'infusetwo-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ), '1.0.0', true );
}

add_action( 'init', 'create_post_type' );
function create_post_type() {
	register_post_type( 'testimonial',
	array(
		'labels' => array(
		'name' => __( 'Testimonials' ),
		'singular_name' => __( 'Testimonial' )
	),
	'public' => true,
	'has_archive' => true,
	)
	);
	
	register_post_type( 'slider',
	array(
		'labels' => array(
		'name' => __( 'Sliders' ),
		'singular_name' => __( 'Slider' )
	),
	'public' => true,
	'has_archive' => false,
	'supports' => array( 'title'),
	)
	);
}

add_filter( 'rwmb_meta_boxes', 'your_prefix_meta_boxes' );
function your_prefix_meta_boxes( $meta_boxes ) {
    $meta_boxes[] = array(
        'title'      => __( 'Test Meta Box', 'textdomain' ),
        'post_types' => 'post',
        'fields'     => array(
            array(
                'id'   => 'name',
                'name' => __( 'Name', 'textdomain' ),
                'type' => 'text',
            ),
            array(
                'id'      => 'gender',
                'name'    => __( 'Gender', 'textdomain' ),
                'type'    => 'radio',
                'options' => array(
                    'm' => __( 'Male', 'textdomain' ),
                    'f' => __( 'Female', 'textdomain' ),
                ),
            ),
            array(
                'id'   => 'email',
                'name' => __( 'Email', 'textdomain' ),
                'type' => 'email',
            ),
            array(
                'id'   => 'bio',
                'name' => __( 'Biography', 'textdomain' ),
                'type' => 'textarea',
            ),
        ),
    );
    return $meta_boxes;
}


 function the_titlesmall($before = '', $after = '', $echo = true, $length = false) { $title = get_the_title();

	if ( $length && is_numeric($length) ) {
		$title = substr( $title, 0, $length );
	}

	if ( strlen($title)> 0 ) {
		$title = apply_filters('the_titlesmall', $before . $title . $after, $before, $after);
		if ( $echo )
			echo $title;
		else
			return $title;
	}
}

/*

function slides_meta_box_markup($post) {
		
  echo'
  
  <table width="100%">
  <tr>
  <td width="30%" height="50px"><strong>Title</strong></td> <td width="30%"><strong>Content</strong></td> <td width="30%"><strong>Image</strong></td>
  </tr>
  <tr>
  <td height="200px"> 
  <input type="text" name="title" placeholder="title" value="<?php echo esc_attr(get_title( $user->ID )); ?>" />
  </td> 
  
  <td> 
  <textarea placeholder="content" value="<?php echo esc_attr(get_content( $user->ID )); ?>"></textarea>
  </td> 
  
  <td> 
  <input type="text" name="image" placeholder="image" value="<?php echo esc_attr(get_image( $user->ID )); ?>"<strong></strong> />
  </td>
  
  </tr>
  
  </table>
  ';
}

add_action("add_meta_boxes", "add_slides_meta_box");
function add_slides_meta_box() {
   add_meta_box("slides-meta-box", "Slides", "slides_meta_box_markup", "slider", "normal", "high", null);
}


add_action( 'save_post', 'slides_meta_box_save' );
if ( !function_exists( 'slides_meta_box_save' ) ) {
	function slides_meta_box_save( $post_id ) {
		
		if ( ! isset( $_POST['slides_meta_box_nonce'] ) ) {
			return;
		}
		if ( ! wp_verify_nonce( $_POST['slides_meta_box_nonce'], 'slides_meta_box_markup') ) {
			return;
		}
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
			return;
		}
		if ( isset( $_POST['post_type'] ) && 'slider' != $_POST['post_type'] ) {
			return;
		}
		if ( ! isset( $_POST['_title'] ) && ! isset( $_POST['_content'] ) && ! isset( $_POST['_image'] )) {
			return;
		}
		$title = sanitize_text_field( $_POST['_title'] );
		$content = sanitize_text_field( $_POST['_content'] );
		$image = sanitize_text_field( $_POST['_image'] );
		
		wp_set_object_terms( $post_id, $title, 'title', false );
		update_post_meta( $post_id, '_title', $title );
		update_post_meta( $post_id, '_content', $content );
		update_post_meta( $post_id, '_image', $image );

	}
} */

add_action('wp_ajax_cvf_send_message', array('CVF_Posts', 'cvf_send_message') );
add_action('wp_ajax_nopriv_cvf_send_message', array('CVF_Posts', 'cvf_send_message') );
add_filter('wp_mail_content_type', array('CVF_Posts', 'cvf_mail_content_type') );

class CVF_Posts {
    
    public static function cvf_send_message() {
        
        if (isset($_POST['message'])) {
            
            $to = get_option('admin_email');
            $headers = 'From: ' . $_POST['name'] . ' <"' . $_POST['email'] . '">';
            $subject = "infusebeautyrooms.co.uk | New Message from " . $_POST['name'];
            
            ob_start();
            
            echo '
                <h2>Message:</h2>' . 
                wpautop($_POST['message']) . '
                <br />
                --
                <p><a href = "' . home_url() . '">infusebeautyrooms.co.uk</a></p>
            ';
            
            $message = ob_get_contents();
            
            ob_end_clean();

            $mail = wp_mail($to, $subject, $message, $headers);
            
            if($mail){
                echo 'success';
            }
        }
        
        exit();
        
    }
        
    public static function cvf_mail_content_type() {
        return "text/html";
    }
}

?>