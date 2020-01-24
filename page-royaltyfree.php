<?php
/*
 Template Name: Royalty Free Sidebar
 *
*/
?>

<?php get_header(); ?>

			<div id="content" class="royaltyfree-container">

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

								<div class="d-all t-all m-all cf royalityfree-bluebox">

									<?php if(get_field('blue_box_2_col')): ?>

										<?php while(has_sub_field('blue_box_2_col')): ?>

											<div class="d-1of2 t-1of2 m-all cf">
												<?php the_sub_field('left_col'); ?>
											</div>
											<div class="d-1of2 t-1of2 m-all cf">
												<?php the_sub_field('right_col'); ?>
											</div>

										<?php endwhile; ?>

									<?php endif; ?>


								</div>

								<div class="d-all t-all m-all cf royalityfree-heading">
									<?php the_field('heading'); ?>
								</div>

								<div class="d-all t-all m-all cf royalityfree-twocol">
									<?php if(get_field('2_col_box')): ?>

										<?php while(has_sub_field('2_col_box')): ?>

											<div class="d-1of2 t-1of2 m-all cf twocol-first">
												<div class="twocol-wrap">
													<?php the_sub_field('left_col'); ?>
												</div>
											</div>
											<div class="d-1of2 t-1of2 m-all cf twocol-last">
												<div class="twocol-wrap">
													<?php the_sub_field('right_col'); ?>
												</div>
											</div>

										<?php endwhile; ?>

									<?php endif; ?>
								</div>

								<div class="d-all t-all m-all cf royalityfree-bluebox">
									<?php the_field('single_box'); ?>
								</div>


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

						<?php get_sidebar(); ?>


				</div>

			</div>


<?php get_footer(); ?>
