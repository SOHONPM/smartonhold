<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<!-- Client Area -->
<section class="client-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	<div class="container">

		<div class="row">

			<div class="col-md-8 offset-md-2">
				<?php 
					$heading = get_sub_field('heading');
					$subheading = get_sub_field('subheading');
				?>

				<?php if( $heading ) : ?>

						<div class="sec-title">

							<h2><?php echo $heading; ?></h2>
							<p><?php echo $subheading; ?></p>

						</div>

				<?php endif; ?>

			 	 <?php if( have_rows('list') ) : ?>

				 	 <div class="row">
						
						<?php while( have_rows('list') ) : the_row(); $img = get_sub_field( 'icon' ); ?>

					 	 	<div class="col">

					 	 		<?php echo wp_get_attachment_image($img, 'full') ?>

					 	 	</div>

					 	<?php endwhile; ?>

					</div>

				 <?php endif; ?>	 	 	

			
			</div>	

		</div>

	</div>
	
</section>
<!-- End of Client Area -->