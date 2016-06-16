

    <div class="blog-container">
        <div class="blogimage">
            <?php echo get_the_post_thumbnail($post->ID, 'medium'); ?>
        </div>


        <?php the_title( '<h3 class="green gbig">', '</h3>' ); ?>

        <?php echo the_content(); ?>


        <div class="entry-meta">
          <span class="date">Posted on <?php echo date(strtotime(the_time('l, F jS Y, \a\t g:i a')));?></span>
        </div>


        <div class="comments">

          <div class="clearfix"></div>
          <div class="clearfix"  style="margin:30px 0 15px;">
          <div id="fb-root"></div>
          <script>(function(d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s); js.id = id;
            js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=277239075781620&version=v2.0";
            fjs.parentNode.insertBefore(js, fjs);
          }(document, 'script', 'facebook-jssdk'));</script>
          <div class="fb-comments" data-href="<?php echo get_permalink();?>" data-width="100%" data-numposts="10" data-colorscheme="light"></div>
          </div>
          <?php // comments_template(); ?>
          <?php //echo do_shortcode('[fbcomments url="'.get_permalink().'" width="740" title="Comments" num="10" count="on" scheme="light" linklove="0" countmsg="wonderful comments!"]'); ?>
          </div> <!-- /.comments -->
    </div> <!-- /.blog-container -->
