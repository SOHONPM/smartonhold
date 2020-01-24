<!-- hero -->
<section class="hero" id="hero">

   <div class="hero-inner">

	   	<div class="auto-container">

			<div class="row">

				<div class="col-lg-5 col-md-7">

					<!-- Hero content -->
					<div class="hero-content">
						<?php 
							$label 	 =  get_sub_field('label');
							$heading =  get_sub_field('heading');
							$text 	 =  get_sub_field('text');

						?>

						<?php if( $label ) : ?>

								<h5><?php echo $label; ?></h5>

						<?php endif; ?>

						<?php if( $heading ) : ?>

								<h1><?php echo $heading;?></h1>

						<?php endif; ?>

						<?php if( $text ) : ?>

								<p><?php echo $text;?></p>

						<?php endif; ?>

						<?php if( have_rows('buttons') ) : $count = 0; ?>

							<!-- Hero Btn -->
							<div class="hero-btn">

								<?php while( have_rows('buttons') ) : the_row(); $count++; ?>

									<a href="<?php echo get_sub_field( 'link' ); ?>" class="btn <?php echo get_sub_field( 'style' ); ?>" <?php echo ( $count == 1 ) ?  'id="videoBtn" class="youtube-video-place embed-responsive embed-responsive-4by3 " data-yt-url="https://www.youtube.com/embed/BiAvKoyOBrc?rel=0&showinfo=0&autoplay=1"' : 'id="voiceoversBtn"'  ?>><?php echo get_sub_field( 'title' );?><i class="<?php echo get_sub_field('icon') ?>"></i></a>

								<?php endwhile; ?>

							</div>
							<!-- End of Hero Btn -->

						<?php endif; ?>
				  	</div> 
				  	<!-- ./ End of Hero content -->

				</div>

				<div class="col-lg-7  col-md-5">

					 <div class="hero-opt-form">
						<?php 

							$form_title = get_sub_field('form_title');
							$form_subtitle = get_sub_field('form_subtitle');
							$form = get_sub_field('form');
						?>
					 	<?php if( $form_title ) : ?>

								<h2><?php echo $form_title;?></h2>

						<?php endif; ?>

						<?php if( $form_subtitle ) : ?>

								 <p><?php echo  $form_subtitle; ?></p>

						<?php endif; ?>

						<?php if( $form ) : ?>

								 <?php echo $form ?>

						<?php endif; ?>

					 </div>

				</div>

			</div>	

		</div>

   </div>

	
   <div id="vidBox">
   		
   		<div id="videCont">

           
      	</div> 

   </div>		
   
</section>
<!-- End of hero -->