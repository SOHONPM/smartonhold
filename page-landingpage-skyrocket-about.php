<?php
/*
 Template Name: Skyrocket About Landing Page
 *
*/
?>

<?php get_header('landingpageskyrocket'); ?>

	<div id="content" class="skyrocketlanding-about">

			<div class="skyrocket-info-section d-ll t-all m-all cf">

				<div class="container">
					<ul class="skyrocket-navigation">
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/home/">HOME</a></li>
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/about-us/">ABOUT US</a></li>
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/contact-us/">CONTACT US</a></li>
					</ul>
				</div>

            </div>

			<div id="inner-content" class="wrap cf skyrocket-innercontent skyrocket-innercontect-about">
		
				<div class="container">

					<main id="main" class="m-all t-2of3 d-2of3 cf skyrocket-body-container" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">


						<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

								<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">

									<header class="article-header">

										<h3 class="page-title"><?php the_title(); ?></h3>

									</header>

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
                    <div class="d-1of3 t-1of3 m-all landing-sidebar-about">
						<?php the_field('sidebar'); ?>
                    </div>
				
				</div>

			</div>



			<div class="skyrocket-landing-form-container skyrocketlanding-about-bottom d-all t-all m-all">

				<div class="container">
					
					<div class="landing-form-contents wrap">

						<?php if(get_field('claim_guide')): ?>

							<?php while(has_sub_field('claim_guide')): ?>
								
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


            <div class="bottom-section">

				<?php if( get_field('bottom_info_repeater') ): ?>

                    <div class="wrap cf">

						<div class="container">

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

                    </div>

				<?php endif; ?>

            </div>

	</div>

<?php get_footer('landingpageskyrocket'); ?>
