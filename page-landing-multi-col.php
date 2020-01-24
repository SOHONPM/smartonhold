<?php
/*
 Template Name: Landing Multi Col
 *
*/
?>

<?php get_header(); ?>
   <?php get_template_part( 'template-parts/loop/content', 'banner' );  ?>
	<div class="container">
			<div id="content" class="landing-page">


				<div id="inner-content" class="wrap cf">

						<main id="main" class="mt-5 mb-5" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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

								<?php if( get_field('multi_column') ): ?>

									<?php while( has_sub_field("multi_column") ): ?>

										<?php if(get_row_layout() == "single_column"): ?>

											<div class="landing-multi-single-container d-all t-all m-all">
												<?php the_sub_field("single_column")?>
											</div>

										<?php elseif(get_row_layout() == "2_column"): ?>

											<div class="landing-multi-2col-container d-all t-all m-all">
											
												<div class="row">

													<div class="col-md-6"  style="background-color:<?php the_sub_field("left_bg_colour")?>;">
														<?php the_sub_field("left_column")?>
													</div>	

													<div class="col-md-6" style="background-color:<?php the_sub_field("right_bg_colour")?>;">
														<?php the_sub_field("right_column")?>
													</div>

												</div>		
		
											</div>

										<?php elseif(get_row_layout() == "3_column"): ?>

											<div class="d-1of3 m-1of3 m-all">
												<?php the_sub_field("1st_column")?>
											</div>

											<div class="d-1of3 m-1of3 m-all">
												<?php the_sub_field("2nd_column")?>
											</div>

											<div class="d-1of3 m-1of3 m-all">
												<?php the_sub_field("3rd_column")?>
											</div>

										<?php elseif(get_row_layout() == "4_column"): ?>

											<div class="d-1of4 m-1of4 m-all">
												<?php the_sub_field("1st_column")?>
											</div>

											<div class="d-1of4 m-1of4 m-all">
												<?php the_sub_field("2nd_column")?>
											</div>

											<div class="d-1of4 m-1of4 m-all">
												<?php the_sub_field("3rd_column")?>
											</div>

											<div class="d-1of4 m-1of4 m-all">
												<?php the_sub_field("4th_column")?>
											</div>

										<?php endif;?>

								<?php endwhile; ?>

							<?php endif;?>


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

				</div>

			</div>

    </div>
<?php get_footer(); ?>
