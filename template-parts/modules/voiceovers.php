<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<!-- Voicemail Area -->
<section class="voicemail-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	<div class="pattern-layer" style="background-image: url(<?php echo get_template_directory_uri() ?>/assets/images/pattern-1.png)">	
	</div>

	<div class="container">

		<div class="row">

			<div class="col-md-8 offset-md-2">

				<div class="sec-title">
						<?php 

							$heading = get_sub_field('heading');
							$subheading = get_sub_field('subheading');
						?>
						<?php if( $heading  ) : ?>

								<h2><?php echo $heading  ?></h2>

						<?php endif; ?>

						<?php if( $subheading  ) : ?>

								<p><?php echo $subheading;?></p>

						<?php endif; ?>

				</div>

			</div>

		</div>

		<?php if( have_rows('list') ) : ?>	

				<div class="row">

						<?php while( have_rows('list') ) : the_row(); ?>

							<div class="col-md-4">

							 	<div class="voicemail-single">

									<?php if( get_sub_field('name') ) : ?>

											<h4><?php echo get_sub_field( 'name' );?></h4>

									<?php endif; ?>

									<?php if( get_sub_field('voice_item') ) : ?>

											<?php echo get_sub_field( 'voice_item' );?>

									<?php endif; ?>


							 	</div>

							 </div>

				 	  	<?php endwhile ?>  	
		 	  	 	
				</div>

		<?php endif; ?>

	</div>

</section>
<!-- End of Voicemail Area -->