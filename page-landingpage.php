<?php
/*
 Template Name: Landing Page Template
 *
*/
?>

<?php get_header('landingpage'); ?>

		<div id="landing-page" class="landing-page">

            <div class="landing-page-top">

            	<div class="container">

            		<div class="row">

						<div class="col-md-8 display-flex align-items-center">

		                    <h1><?php the_field('page_header'); ?></h1>

						</div>

						<div class="col-md-4">

							<div class="call-info">

								<i class="fa fa-phone"></i><br>Call Us<br>
								<a href="tel:1300467646">1300 467 646</a>

							</div>
							

						</div>

	                </div>

            	</div>
                
            </div>

            <div class="landing-page-form">
            	
				<div class="container">
					
					<div class="row">
						
						<div class="col-lg-8">
							
							<?php the_field('video_embed'); ?>

						</div>

						<div class="col-lg-4">
							
							<div class="form-con">

								<div class="top-bar">

									<?php the_field('price_form_green_block'); ?>

								</div>

								<div class="form-content form-info">

									<?php the_field('price_form_info'); ?>

								</div>

							</div>

						</div>

					</div>

				</div>

            </div><!-- landing-page-form -->

            <div class="landing-page-blur">
            	
				<div class="container">
					
						<h2><?php the_field('gray_bar_text'); ?></h2>

				</div>

            </div><!-- landing-page-blur -->

            <div class="landing-page-features">
				
				<div class="container">
								  
					  <div class="row">
					  		
					  		<div class="col-md-8">
					  			
					  			<div class="landing-page-content">

					  				<?php the_field('body_copy'); ?>

					  			</div>
								
					  		</div>
					  		<div class="col-md-4">

					  			<?php the_field('sidebar_content'); ?>
					  			
					  		</div>

					  </div>

				</div>

            </div><!-- landing-page-features -->

            <div class="landing-page-reviews">
            	
            	<div class="container">
            		
            		<iframe src="https://smartonhold.mylocalreviewsite.com/my-review/index/uid/4be622d1bd6481adc20f080c924715bb" frameborder="0" width="100%" height="800px" class="soh-testimonials-iframe"></iframe>

            	</div>

            </div><!-- landing-page-reviews -->

            <div class="landing-page-testimonials">
            	
            	<div class="container">

					<h2 class="landing-testimonial-heading">Testimonials; Don’t Just Take Our Word For It … Look What Our Customers Have To Say:</h2>

					<?php if( get_field('testimonial_area') ): ?>

						<div class="row">
								
							<?php while(has_sub_field('testimonial_area')): ?>

								<div class="col-md-6">

									<?php the_sub_field('left_column'); ?>

								</div>

								<div class="col-md-6">

									<?php the_sub_field('right_column'); ?>

								</div>

							<?php endwhile; ?>

						</div>

					<?php endif; ?>

            	</div>

            </div><!-- landing-page-testimonials -->

            <?php if(get_field('bottom_info_repeater')): ?>

	            <div class="landing-page-bottom">
	            	
					<div class="container">
						
							<?php if(get_field('bottom_info_repeater')): ?>

				                    <div class="wrap cf">

											<?php while(has_sub_field('bottom_info_repeater')): ?>

						                        <div>

														<h3><?php the_sub_field('header'); ?></h3>

							                        <div class="icon">

														<?php the_sub_field('icon'); ?>

							                        </div>

							                        <div class="paragraph">

							                            <?php the_sub_field('text'); ?>
														<a href="<?php the_sub_field('read_more_link'); ?>">Read more</a>

							                        </div>

						                        </div>

											<?php endwhile; ?>

				                    </div>

							<?php endif; ?>

					</div>

	            </div><!-- landing-page-bottom -->
	
			<?php endif ?>
  

<?php get_footer('landingpage'); ?>
