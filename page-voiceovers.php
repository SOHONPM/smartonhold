<?php
/*
 Template Name: Voice Over Template
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
					 <div class="col-md-8  voiceover-area">
					 
					 	<?php while ( have_posts() ) : the_post(); ?>

								<?php get_template_part( 'template-parts/loop/content', 'page' ); ?>

								<?php if( get_field('voice_overs') ): ?>

									<?php while( has_sub_field('voice_overs') ): ?>

										<div class="voiceover-wrapper" style="background-color:<?php the_sub_field('colour'); ?>;">

											<h2><?php the_sub_field('heading'); ?></h2>

											<?php if( get_sub_field('audio_files') ): ?>

												<?php while(has_sub_field('audio_files')): ?>

													<div class="voiceover-item">	
														<div class="left">
															<?php the_sub_field('left_column'); ?>
														</div>

														<div class="right">
															<?php the_sub_field('right_column'); ?>
														</div>
													</div>

												<?php endwhile; ?>

											<?php endif; ?>

										</div>

									<?php endwhile; ?>

								<?php endif; ?>

						<?php endwhile; ?>

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
