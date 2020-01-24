<!-- About Us Area -->
<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<section class="about-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	<div class="container">

		<div class="row">

		 	<div class="col-md-6">

		 		<div class="about-info">
					<?php 

						$heading 	= get_sub_field('heading');
						$subheading = get_sub_field('subheading');
						$text 		= get_sub_field('text');
						$button_link 	= get_sub_field('button_link');
						$button_text 	= get_sub_field('button_text');
					?>


					<?php if( $heading ) : ?>

							<h2><?php echo $heading ?></h2>

					<?php endif; ?>

					<?php if( $subheading ) : ?>

							<h3><?php echo $subheading; ?></h3>

					<?php endif; ?>

					<?php if( $text ) : ?>

							<?php echo $text; ?>

					<?php endif; ?>


					<?php if( $button_link  && get_sub_field( 'button_text' ) ) : ?>

							<a href="<?php echo $button_link; ?>" class="btn-style-4"><?php echo $button_text; ?></a>

					<?php endif; ?>

		 		</div>

		 	</div>

		 	<div class="col-md-6">

		 		<div class="about-stats">


					 	<?php if( have_rows('stats') ) : ?>

			 		      <div class="row diplay-flex stat-list">

							<?php while( have_rows('stats') ) : the_row(); ?>	
			 		      	 
			 		      	 	<div class="col-md-6 diplay-flex">

									<div class="single-stat">

										<strong><?php echo get_sub_field( 'total' ); ?></strong><span><?php echo get_sub_field( 'title' ); ?></span>

									</div>

			 		      	 	</div>

			 		      	<?php endwhile; ?>

			 		      </div>
							
						  <?php endif; ?>	

		 		</div>

		 	</div>	

		</div>

	</div>

</section>
<!-- End of About Us Area -->