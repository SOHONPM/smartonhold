			<!-- <footer class="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
              <div class="footer-con">
                  <div class="wrap">
                    <div class="d-1of3 t-1of3 m-all">
                        <h4>SMART ON HOLD</h4>
                        <p>Specialising in helping SME businesses through the creation of unique &amp; dynamic On Hold Messages that get results. Work with a team that Guarantees great results!</p>

                    </div>
                    <div class="d-1of3 t-1of3 m-all">
                        <h4>CONTACT INFORMATION</h4>
                        <span><strong>Phone: </strong><a href="tel:0731170700">(07) 3117 0700</a><br> OR <a href="tel:1300467646">1300 467 646</a></span>
							<br>
							<span><strong>Fax: </strong><a href="tel:1300733790">1300 733 790</a></span>
							<br>
							<span><strong>Email: </strong><a href="http://www.smartonhold.com.au/contact-us">Click Here</a></span>
							<br>
							<span><strong>Web: </strong><a href="http://smartonhold.com.au">www.smartonhold.com.au</a></span>
							<br>
							<span><strong>Postal Address: </strong><br>
								PO Box 5, Rochedale South QLD 4123</span>

                    </div>
                    <div class="d-1of3 t-1of3 m-all">
                        <h4>MESSAGES ON HOLD</h4>
							<div class="bottom-nav">
								<nav role="navigation">
									<?php wp_nav_menu(array(
										'container' => 'div',                           // enter '' to remove nav container (just make sure .footer-links in _base.scss isn't wrapping)
										'container_class' => 'footer-links cf',         // class of container (should you choose to use it)
										'menu' => __( 'Footer Links', 'smartonholdtheme' ),   // nav name
										'menu_class' => 'nav footer-nav cf',            // adding custom nav class
										'theme_location' => 'footer-links',             // where it's located in the theme
										'before' => '',                                 // before the menu
										'after' => '',                                  // after the menu
										'link_before' => '',                            // before each link
										'link_after' => '',                             // after each link
										'depth' => 0,                                   // limit the depth of the nav
										'fallback_cb' => 'smartonhold_footer_links_fallback'  // fallback function
									)); ?>
								</nav>
							</div>

                    </div>
                 </div>

                </div>
				<div id="inner-footer" class="wrap cf">


					<p class="source-org copyright">&copy; Copyright Smart On Hold Options <?php echo date('Y'); ?>. All Rights Reserved. View our <a href="<?php echo get_page_link(1913); ?>">Privacy Policy</a></p>

				</div>

			</footer> -->

		</div>

		<?php // all js scripts are loaded in library/smartonhold.php ?>

		<script>
		  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
		  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
		  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
		  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

		  ga('create', 'UA-45162618-1', 'auto');
		  ga('send', 'pageview');

		</script>
		
		<?php wp_footer(); ?>

	</body>

</html> <!-- end of site. what a ride! -->
