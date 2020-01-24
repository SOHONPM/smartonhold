<?php
/*
 Template Name: Testimonials Page
 *
*/
?>

<?php get_header(); ?>

<main class="content" id="content" itemscope itemtype="http://schema.org/WebPageElement">
	<?php get_template_part( 'template-parts/loop/content', 'banner' );  ?>
	
	<!--- Main Content -->
	<div class="content__main">
		<div class="auto-container">

			<div class="row">
				 <div class="col-md-8">
				 	<?php if( get_field('repeater_field') ): ?>
							<?php while(has_sub_field('repeater_field')): ?>
									<div class="testimonial-single">
										<div class="testimonial-content">
											<div class="img-con">
												<img src="<?php the_sub_field('image'); ?>">
											</div>
											<div class="text">
												<?php the_sub_field('text'); ?>
											</div>
										</div>
									</div>
							<?php endwhile; ?>
					<?php endif; ?>

				 </div>
				 <div class="col-md-4">
				 	<aside id="sidebar">
				 		<?php if( is_active_sidebar('footer-about') ) : ?>
	                          <div class="widget-area">
	                            <?php dynamic_sidebar('right-sidebar')  ?>
	                          </div>
	                  <?php endif; ?>
				 	</aside>
				 </div>
			</div>
		</div>
	</div>
	<!-- .Main Content -->

</main>

<?php get_footer(); ?>
