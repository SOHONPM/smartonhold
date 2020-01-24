<?php
/*
 Template Name: FAQ Page
 *
*/
?>

<?php get_header(); ?>

			<div id="content">
				<header class="article-header top-head">

					<h1 class="page-title"><?php the_title(); ?></h1>



				</header>
				<div id="inner-content" class="wrap cf">

						<main id="main" class="m-all t-2of3 d-2of3 cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

							<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

							<article id="post-<?php the_ID(); ?>" <?php post_class( 'cf' ); ?> role="article" itemscope itemtype="http://schema.org/BlogPosting">



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


								<footer class="article-footer">

                  <?php the_tags( '<p class="tags"><span class="tags-title">' . __( 'Tags:', 'smartonholdtheme' ) . '</span> ', ', ', '</p>' ); ?>

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
				<div class="faq-container">
					<div class="wrap cf">
						<div class="faq-content">
							<h3><?php if(the_field('title')); ?></h3>
							<?php if(get_field('repeater')): ?>
							<?php while(has_sub_field('repeater')): ?>
							<div class="faq">
								<div class="q">
									<i class="fa fa-plus"></i>
<?php the_sub_field('faq_question'); ?>
								</div>
								<div class="a">
										<?php the_sub_field('faq_answer'); ?>
								</div>
							</div>


								<?php endwhile; ?>
							<?php endif; ?>


						</div>
					</div>
				</div>
			</div>


<?php get_footer(); ?>
