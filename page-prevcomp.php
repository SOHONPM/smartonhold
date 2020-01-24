<?php
/*
 Template Name: Previous Comp
 *
*/
?>

<?php get_header(); ?>

<!-- page header -->
<div class="page-header" itemscope itemtype="http://schema.org/WebPageElement">

	<div class="auto-container">

		<div class="page-header-inner">

	           <h1>Previous Smart On Hold competitions &amp; winners</h1>
	
	     </div>

	</div>

</div>

<!-- ./page header -->
<div id="inner-content" class="cf">

	<?php if( get_field('repeater') ): ?>

		<?php while( has_sub_field('repeater') ): ?>

			<section class="competition-item">
				
				<div class="auto-container">

					<div class="row">

						<div class="col">

							<?php the_sub_field('text_area'); ?>

						</div>

						<div class="col">


							<!-- check if the flexible content field has rows of data -->
							<?php if( get_sub_field('media') ): ?>

							 	<!-- loop through the rows of data -->
							    <?php while ( has_sub_field('media') ):?>

									 <?php if( get_row_layout() == 'video' ):?>

							        	<?php the_sub_field('video');?>

							        <?php elseif( get_row_layout() == 'image' ):?>

											<img src="<?php the_sub_field('image')?>">


							        <?php endif;?>

							    <?php endwhile; ?>

							<?php else :?>

							    <!-- no layouts found -->

							<?php endif;?>

						</div>

					</div>

				</div>

			</section>

<?php endwhile; ?>



<?php endif; ?>

		<main id="main" class="m-all t-all d-all cf" role="main" itemscope itemprop="mainContentOfPage" itemtype="http://schema.org/Blog">

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


<?php get_footer(); ?>
