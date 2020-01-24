<?php
/*
 Template Name: Skyrocket Thank You Landing Page
 *
*/
?>

<?php get_header('landingpageskyrocket'); ?>

			<div id="content">

			<div class="skyrocket-info-section d-ll t-all m-all cf">

				<div class="container">
					<ul class="skyrocket-navigation">
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/home/">HOME</a></li>
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/about-us/">ABOUT US</a></li>
						<li><a href="<?php echo home_url(); ?>/skyrocketyoursales/contact-us/">CONTACT US</a></li>
					</ul>
				</div>

            </div>
			<div class="skyroket-thankyoumsg skyroket-thankyoumsg-darkbg">
				<div class="container">
					<?php the_field('thank_you_message'); ?>
				</div>
			</div>

			<div id="inner-content" class="wrap cf skyrocket-innercontent skyrocket-innercontect-about">

				<div class="container">
					
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

				</div>

			</div>









<?php get_footer('landingpageskyrocket'); ?>
