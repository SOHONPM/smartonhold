<?php
/*
 Template Name: Skyrocket Landing Page
 *
*/
?>

<?php get_header('landingpageskyrocket'); ?>
	
	<!-- Skyrocket Video -->
	<section class="skyrocket-video">

		<div class="container">
			
			<div class="row">
			
				<div class="col-lg-7">

					<div class="video">

						<?php the_field('video_embed'); ?>

					</div>

				</div>

				<div class="col-lg-5">
					
					<div class="skyrocket-form-con">

						<?php the_field('call_to_action'); ?>

					</div>

				</div>

			</div>

		</div>

	</section>
	<!-- Skyrocket Video -->

	<!-- Skyrocket Info -->
	<section class="skyrocket-info">
		
		<div class="container">
			
			<div class="row">

					<?php if( get_field('under_video_text') ): ?>

						<?php while( has_sub_field('under_video_text') ): ?>

							<div class="col-md-9">

								<?php the_sub_field('text'); ?>

							</div>

							<div class="col-md-3">

								<img src="<?php the_sub_field('image'); ?>">

							</div>

						<?php endwhile; ?>

					<?php endif; ?>


				</div>	

		</div>

	</section>
	<!-- ./ Skyrocket Info -->

	<!-- Skyrocket Features -->
	<section class="skyrocket-features">
		
		<div class="container">
		
			<div class="row">
                <div class="col-md-9">

						<?php the_field('body_copy_top'); ?>

						<?php the_field('body_copy'); ?>

                </div>

                <div class="col-md-3">

					<div class="skyrocket-form-con">

						<?php the_field('sidebar_content'); ?>

					</div>

                </div>

			</div>

		</div>

	</section>
    <!-- ./Skyrocket Features -->

	<!-- Skyrocket Blur -->
	<section class="skyrocket-blur">
			
			<div class="container">
				
					<div class="info">

						<?php the_field('what_to_do_now'); ?>

                    </div>


			</div>

	</section>
	<!-- ./Skyrocket Blur -->

	<!-- Skyrocket Form -->
	<section class="skyrocket-form">

		<div class="container">

			<?php if(get_field('free_guide_to_selling_more')): ?>

				<?php while(has_sub_field('free_guide_to_selling_more')): ?>
					
					<div class="row">

						<div class="col-md-9">

							<?php the_sub_field('text'); ?>

						</div>

						<div class="col-md-3">

							<img src="<?php the_sub_field('image'); ?>">

						</div>

					</div>
					
				<?php endwhile; ?>

			<?php endif; ?>

		</div>

	</section>	
	<!-- ./Skyrocket Form -->	

   <?php if( get_field('bottom_info_repeater') ): ?>

	<!-- Skyrocket Footer -->
	<section class="skyrocket-footer">

		<div class="container">

			    <div class="bottom-section">

					<?php if( get_field('bottom_info_repeater') ): ?>

	                    <div class="wrap cf">

								<?php while(has_sub_field('bottom_info_repeater')): ?>

				                        <div class="d-1of3 t-1of3 m-all">

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

		</div>

	</section>	
	<!-- ./Skyrocket Footer -->

    <?php endif; ?>

<?php get_footer('landingpageskyrocket'); ?>
