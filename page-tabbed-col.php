<?php
/*
 Template Name: Tabbed Content
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

				 <div class="col-md-12">

				 	  <?php while ( have_posts() ) : the_post(); ?>

								<?php the_content() ?>

						<?php endwhile; ?>

				 </div>

			</div>

			<div class="row">
				
				<div class="col-md-8">
					

						<?php if(get_field('tabbed_content')): ?>

							<?php while(has_sub_field('tabbed_content')): ?>

								<?php the_sub_field('sub_field_1'); ?>

							<?php endwhile; ?>

						<?php endif; ?>

						<div class="tab-wrapper">
							<ul class="nav nav-tabs" id="myTab" role="tablist">



								<?php if(get_field('tabbed_content')):

									$tabLabel = 0;

								?>

									<?php while(has_sub_field('tabbed_content')): $tabLabel++; ?>

										<li class="nav-item">

											<a href="#view-<?php echo $tabLabel; ?>" class="nav-link <?php echo ( $tabLabel == 1 ) ? 'active' : ''; ?>"  id="view-tab" data-toggle="tab" role="tab" aria-controls="view" aria-selected="true"><?php the_sub_field('tab_heading'); ?></a>

										</li>

									<?php endwhile; ?>

								<?php endif; ?>

							</ul>
							<div class="tab-content" id="myTabContent">

									<?php if(get_field('tabbed_content')):

										$tabLabel = 1;

									?>
									<?php while(has_sub_field('tabbed_content')): ?>

										<div class="tab-pane fade  <?php echo ( $tabLabel == 1 ) ? 'show active' : ''; ?>" id="view-<?php echo $tabLabel++; ?>" role="tabpanel" aria-labelledby="view-tab">
											<?php the_sub_field('tab_content'); ?>
										</div>

									<?php endwhile; ?>

								<?php endif; ?>

							</div>
						</div>


				</div>
				<div class="col-md-4">
					
						<?php the_field('right_sidebar'); ?>

				</div>

			</div>

		</div>

	</div>

</main>			

<?php get_footer(); ?>
