<?php
/*
 Template Name: Skyrocket Step Two Landing Page
 *
*/
?>

<?php get_header('landingpageskyrocketsteptwo'); ?>

			<div id="content" class="skyrocketlanding-steptwo">



			<div id="inner-content" class="wrap cf skyrocket-innercontent skyrocket-innercontect-about">


					<main id="main" class="m-all t-all d-all cf skyrocket-body-container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

						<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

							<!-- <header class="article-header">

								<h3 class="page-title"><?php the_title(); ?></h3>

							</header> -->

							<section class="entry-content cf" itemprop="articleBody">
								<?php

									the_content();

									wp_link_pages( array(
										'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'smartonholdtheme' ) . '</span>',
										'after'       => '</div>',
										'link_before' => '<span>',
										'link_after'  => '</span>',
									) );
								?>
							</section>


						</article>

						<?php endwhile; else : ?>

								<article id="post-not-found" class="hentry cf">
										<header class="article-header">
											<h1><?php _e( 'Oops, Post Not Found!', 'smartonholdtheme' ); ?></h1>
									</header>
										<section class="entry-content">
											<p><?php _e( 'Uh Oh. Something is missing. Try double checking things.', 'smartonholdtheme' ); ?></p>
									</section>
									<footer class="article-footer">
											<p><?php _e( 'This is the error message in the page-custom.php template.', 'smartonholdtheme' ); ?></p>
									</footer>
								</article>

						<?php endif; ?>

					</main>
                    <div class="d-all t-all m-all skyrocket-cta-container">

                    	<div class="container">

							<div class="skyrocket-cta-top m-all cf">
								<?php the_field('call_to_action_-_top'); ?>
							</div>
							<div class="skyrocket-cta-bottom m-all cf">
								<?php if(get_field('call_to_action_-_bottom')): ?>

									<?php while(has_sub_field('call_to_action_-_bottom')): ?>

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

						</div>
							
                    </div>

					<div class="d-all t-all m-all skyrocket-body-container">
						<?php the_field('body_copy'); ?>
                    </div>

					<div class="d-all t-all m-all skyrocket-cta-container">

						<div class="container">
							
							<div class="skyrocket-cta-top m-all cf">
								<?php the_field('call_to_action_-_top'); ?>
							</div>
							<div class="skyrocket-cta-bottom m-all cf">
								<?php if(get_field('call_to_action_-_bottom')): ?>

									<?php while(has_sub_field('call_to_action_-_bottom')): ?>

													
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

						</div>
						
                    </div>


			</div>


<?php get_footer('landingpageskyrocket'); ?>
