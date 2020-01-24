<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<!-- -Feature -->
<section class="feature-area"  <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	 <div class="container">
 	  
		<?php if( have_rows('list') ) : ?>	

			<div class="row row-spacing">

				<?php while( have_rows('list') ) : the_row(); ?>

		 	  	 	<div class="col-lg-3 col-md-6">

		 	  	 		<!-- feature single -->
		 	  	 		<div class="feature-single">


							<?php if( get_sub_field('icon') ) :  $icon =  get_sub_field('icon'); ?>

									<div class="image">
										
										<?php echo wp_get_attachment_image($icon, 'full') ?>
				 	  	 				
				 	  	 			</div>

							<?php endif; ?>

							<?php if( get_sub_field('title') ) : ?>

									<h3><?php echo get_sub_field( 'title' );?></h3>

							<?php endif; ?>

							<?php if( get_sub_field('text') ) : ?>

									<?php echo get_sub_field( 'text' );?>

							<?php endif; ?>
						

		 	  	 		</div>
		 	  	 		<!-- End of feature single -->

		 	  	 	</div>

		 	  	<?php endwhile ?>
		 	  	 	
			</div>

		<?php endif; ?>
 	  	
	 </div>

</section>
<!-- End of Feature -->