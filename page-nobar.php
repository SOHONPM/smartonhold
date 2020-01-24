<?php
/*
 Template Name: No Sidebar Page
 *
*/
?>

<?php get_header(); ?>

<main class="content" id="content" itemscope itemtype="http://schema.org/WebPageElement">

	<?php get_template_part( 'template-parts/loop/content', 'banner' );  ?>
	
	<!--- Main Content -->
	<div class="content__main">

		<div class="auto-container">

		 	<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'template-parts/loop/content', 'page' ); ?>

			<?php endwhile; ?>

		</div>

	</div>
	<!-- .Main Content -->

</main>

<?php get_footer(); ?>
