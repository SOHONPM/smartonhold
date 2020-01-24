<?php
/*
 Template Name: Landing 2 col
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
					 <div class="<?php echo ( get_field('no_sidebar') ) ? 'col-md-12' : 'col-md-8'; ?>">
					 	
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

								<?php if(get_field('colour_blocks')): ?>

									<?php while(has_sub_field('colour_blocks')): ?>

										<div class="d-all t-all m-all landing-colour-block" style="background-color:<?php the_sub_field('background_colour'); ?>; color:<?php the_sub_field('font_colour'); ?>; ">
											<?php the_sub_field('content'); ?>
										</div>

									<?php endwhile; ?>

								<?php endif; ?>


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

					 </div>
				 <?php if( !get_field('no_sidebar') ) : ?>
					 <div class="col-md-4">
					 	<aside id="sidebar">

							<p style="text-align: center;"><img class="size-medium wp-image-2771 aligncenter" src="http://smartonhold.com.au/wp-content/uploads/2013/10/Christmas-Trees-225x300-225x300.png" alt="Christmas-Trees-225x300" width="225" height="300" /></p>
							<p style="text-align: center;"><?php echo do_shortcode("[fc id='3' align='left']") ?></p>
							<img class="size-full wp-image-2772 aligncenter" src="http://smartonhold.com.au/wp-content/uploads/2013/10/gift.png" alt="gift" width="256" height="256" />
		                  
					 	</aside>
					 </div>
				<?php endif; ?>	 
				</div>
		</div>
	</div>
	<!-- .Main Content -->

</main>

<?php get_footer(); ?>
