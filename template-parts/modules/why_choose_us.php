<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<!-- Why Choose Area -->
<section class="why-choose-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	<div class="inner-box">

		<div class="container">

			<div class="row">

				<div class="col-md-8 offset-md-2">
						
						<?php 
							$title = get_sub_field('title');

							  if( $title  ) : ?>

								<div class="sec-title">

									<h2><?php echo $title;?></h2>

								</div>

						<?php endif; ?>

				</div>

			</div>

			<div class="row display-flex">

				<?php if( have_rows('list') ) : ?>

						<?php while( have_rows('list') ) : the_row(); ?>

							<div class="col-lg-4 col-md-6 display-flex">

								<div class="why-choose-single">

									<?php 
										 $title = get_sub_field('title');
										 if( $title ) : ?>

											<h4><?php echo $title;?></h4>

									<?php endif; ?>

									<?php 
										$text = get_sub_field('text');

										if( $text ) : ?>

										<?php echo $text; ?>

									<?php endif; ?>

								</div>

							</div>

						<?php endwhile; ?>

				<?php endif; ?>	

			</div>   
			
		</div>

	</div>

</section>
<!-- End of Why Choose Area -->