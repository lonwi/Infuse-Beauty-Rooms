<!doctype html>
<html <?php language_attributes();?>>
    <head>
        <!-- Meta Tags -->
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php wp_title( '|', true, 'right' ); ?></title>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <meta name="referrer" content="origin">

        <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" />
        <link href='https://fonts.googleapis.com/css?family=Ubuntu:300,400,500,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700,900,400italic' rel='stylesheet' type='text/css'>

        <!--[if IE]>
            <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicon.ico">
        <![endif]-->
        <?php wp_head(); ?>
    </head>
    <body <?php body_class('no-js'); ?>>
        <div id="wptime-plugin-preloader"></div>


<?php if(!isset($_COOKIE['infusecookieenabled'])): ?>

        	<section id="cookie-policy-notice" class="cookie-policy-notice">

                <div class="wrap">

                    <p>This site uses cookies. By continuing to browse the site, you are agreeing to our use of cookies. <a href="/cookies/">Find out more</a> or
                    <span id="cookie-policy-notice-close" class="cookie-policy-notice-close">
                        <a href="#" title="Click to accept and close the cookie policy notice.">Accept</a>
                    </span>
                    </p>
                </div>

            </section> <!--/ #cookie-policy-notice -->

<?php endif;?>

        <div class="page-wrapper">
        	<header>
                
               <div class="header-navigation">
                    <div class="mm-page">
                        
                        <div class="logo">
                            <a href="/"><img src="<?php echo get_template_directory_uri();?>/img/logo.svg" height="100%" alt="logo"></a>
                        </div>

                        <div class="navigation">
                            <?php wp_nav_menu( array('theme_location' => 'primary', 'container' => 'nav', 'container_id'=>'mainmenu' )); ?>
                        </div>

                        <a href="#mmenu"> 
                            <div id="toggle-bar">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>
                        
                        
                    </div> <!-- /.mm-page -->
                    <div id="lightbox"></div>
                </div> <!-- /.header-navigation -->
<?php /*$slide['link']; */ ?>
                <div class="menuthingy"></div> 
                <div class="header-banner">

                	<?php if(is_front_page()):?>
                    <?php if($slides = get_field('slide',134)):?>
                    <ul class="main-slider">
                    	<?php foreach ($slides as $slide):?>
                        <li>
                            
                            <img src="<?php echo $slide['image']['sizes']['custom-size'];?>" alt="<?php echo $slide['image']['alt'];?>">
                            <div class="header-title">
                                <a href="/contact"><h1><?php echo $slide['title'];?><i class="fa fa-angle-double-right"></i></h1></a>
                            </div>
                            <div class="header-title-container">
                                <?php echo $slide['content'];?>
                            </div>
                        </li>
                        <?php endforeach;?>
                    </ul>
                    <?php endif;?>
                    <?php elseif(has_post_thumbnail()):?>
                        <div class="main-image">
							<?php //the_post_thumbnail();?>
                            <?php if ( has_post_thumbnail() ) {
									  the_post_thumbnail( 'custom-size' );
								  } ?>
                        </div>
                    <?php else:?>
                    	<!-- nothing -->
                    
                    <?php endif; ?>
                </div> <!-- /.header-banner -->

            </header>
