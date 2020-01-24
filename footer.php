<?php
/**
* Footer Template
*
*
* Learn more: http://codex.wordpress.org/Template_Hierarchy
*
* @since   1.0.0
* @package themezero
*/


// Exit if accessed directly.
if ( ! defined( 'ABSPATH' ) ) {
	exit;
} ?>

  <footer id="colophon" class="site-footer" itemscope itemtype="http://schema.org/WPFooter">

    <!-- Footer Mid --> 
    <div class="site-footer-mid">
      <div class="container">
          <div class="row">
              <div class="col-md-4">
                  <!-- Footer Main Menu --> 
                  <?php if( is_active_sidebar('footer-menu') ) : ?>
                          <div class="widget-area widget-menu">
                              <?php dynamic_sidebar('footer-menu')  ?>
                          </div>
                  <?php endif; ?>
                  <!-- ./Footer Main Menu --> 
              </div>
              <div class="col-md-7 offset-md-1">
                 <div class="row">
                     <div class="col-md-5">
                          <!-- Widget Area -->
                          <?php if( is_active_sidebar('footer-contact-1') ) : ?>
                                  <div class="widget-area">
                                    <?php dynamic_sidebar('footer-contact-1')  ?>
                                  </div>  
                          <?php endif; ?>
                          <!-- ./Widget Area -->
                      </div>
                      <div class="col-md-6 offset-md-1">
                             <?php 
                                $args = array(
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'order' =>  'DESC',
                                    'orderby' => 'date',
                                    'posts_per_page' => 2
                                );

                                $query = New WP_Query($args);

                                if( $query->have_posts() ) : ?>
                                    <!-- Widget Area -->
                                    <div class="widget-area">
                                      <h3 class="widget-title">Latest News</h3>
                                    
                                       <?php while( $query->have_posts() ) : $query->the_post(); ?>
                                    
                                            <div class="news-single">
                                                <h4><a href="<?php echo get_permalink() ?>"><?php the_title() ?></a></h4>
                                            </div>

                                       <?php endwhile; ?>

                                    </div><!-- ./Widget Area -->  
                                  <?php 
                                    endif;
                                  ?>
                        </div>
                 </div>
              </div>
            </div>
          </div>
      </div>
      <!-- ./Footer Mid --> 
      <!-- ./Footer Bottom --> 
      <div class="site-footer-bottom">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <!-- Copyright -->
                  <div class="copyright">
                    © Copyright Smart On Hold Options <?php echo date('Y');?>. All Rights Reserved
                  </div>
                  <!-- Copyright -->
               </div>
               <div class="col-md-6">
                <?php 

                    wp_nav_menu( array(
                        'menu'            => 'Legal', // Do not fall back to first non-empty menu.
                        'depth'           => 1,
                        'theme_location'  => 'Legal',
                        'menu_class'      => 'list-menu',
                        'container'       => false,
                        'container_class' => false,
                        'container_id'    => false,
                    )); 

                 ?>
               </div>
            </div>
         </div>
      </div>
      <!-- ./Footer Bottom --> 
  </footer><!-- .site-footer -->

</div> <!-- .page-wrapper -->

    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-45162618-1', 'auto');
      ga('send', 'pageview');

    </script>
    <?php // all js scripts are loaded in library/smartonhold.php ?>
      <!-- Google Code for Remarketing Tag -->
      <!--------------------------------------------------
      Remarketing tags may not be associated with personally identifiable information or placed on pages related to sensitive categories. See more information and instructions on how to setup the tag on: http://google.com/ads/remarketingsetup
      --------------------------------------------------->
      <script type="text/javascript">
      /* <![CDATA[ */
      var google_conversion_id = 976892742;
      var google_custom_params = window.google_tag_params;
      var google_remarketing_only = true;
      /* ]]> */
      </script>
      <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
      </script>
      <noscript>
      <div style="display:inline;">
      <img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/976892742/?value=0&amp;guid=ON&amp;script=0"/>
      </div>
      </noscript>
<?php 

wp_footer(); ?>

</body>
</html>
