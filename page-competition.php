<?php
/*
 Template Name: Competition Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">

				<header class="article-header top-head">

					<div class="wrap">
						<h1 class="page-title" itemprop="headline"><?php the_title(); ?></h1>
					</div>

				</header>

				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



								<section class="entry-content cf" itemprop="articleBody">
									<?php
										// the content (pretty self explanatory huh)
										the_content();

										/*
										 * Link Pages is used in case you have posts that are set to break into
										 * multiple pages. You can remove this if you don't plan on doing that.
										 *
										 * Also, breaking content up into multiple pages is a horrible experience,
										 * so don't do it. While there are SOME edge cases where this is useful, it's
										 * mostly used for people to get more ad views. It's up to you but if you want
										 * to do it, you're wrong and I hate you. (Ok, I still love you but just not as much)
										 *
										 * http://gizmodo.com/5841121/google-wants-to-help-you-avoid-stupid-annoying-multiple-page-articles
										 *
										*/
										wp_link_pages( array(
											'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'smartonholdtheme' ) . '</span>',
											'after'       => '</div>',
											'link_before' => '<span>',
											'link_after'  => '</span>',
										) );
									?>
								</section>


								<footer class="article-footer">

								</footer>

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

						<!-- <?php get_sidebar(); ?> -->

						<div id="sidebar1" class="sidebar m-all t-1of3 d-1of3 last-col cf" role="complementary">
						<style type="text/css">
							.inputs ul {margin: 0;padding: 0;}
							.form-con {margin-left: 0;}
						</style>

							<div class="form-con">
								<div class="top-bar">
									<?php the_field('price_form_green_block', 6); ?>
								</div>
								<div class="form-content form-info">
									<?php the_field('price_form_info', 6); ?>
								</div>
							</div>

							<?php the_field('right_sidebar'); ?>

						</div>

				</div>

			</div>


<?php get_footer(); ?>
