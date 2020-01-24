<!-- hero -->
<?php 
 $bg_image =  get_sub_field( 'background_image' );
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<section class="banner banner-nav" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?> <?php echo ( $bg_image ) ? "style='background-image: url($bg_image)'" : ""; ?>>

   <div class="banner-inner">

	   	<div class="auto-container">

			<div class="row">

				<div class="col-lg-7 col-md-7">

					<!-- Hero content -->
					<div class="hero-content">
						<?php 
					
							$heading =  get_sub_field('heading');
							$text 	 =  get_sub_field('text');

						?>


						<?php if( $heading ) : ?>

								<h1><?php echo $heading;?></h1>

						<?php endif; ?>

						<?php if( $text ) : ?>

								<p><?php echo $text;?></p>

						<?php endif; ?>

				  	</div> 
				  	<!-- ./ End of Hero content -->

				</div>

				<div class="col-lg-5  col-md-5">

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
	
	<!-- Banner Navigation -->
	<div class="banner-navigation">
		
		<div class="auto-container">
			<div class="label">
				<h5>Where to go</h5>
			</div>

			<?php if( have_rows('buttons') ) : $count = 0; ?>

				<!-- Hero Btn -->
				<div class="button-navigation" role="navigation">

					<?php while( have_rows('buttons') ) : the_row(); $count++; ?>

						<a href="<?php echo get_sub_field( 'link' ); ?>">
							<div class="nav-button-inner">	
								<div class="nav-image">
									<?php echo wp_get_attachment_image( get_sub_field( 'icon' ), 'full'); ?>
								</div>
								<span><?php echo get_sub_field( 'subtitle' );?></span>
								<h3><?php echo get_sub_field( 'title' );?></h3>
							</div>
						</a>

					<?php endwhile; ?>

				</div>
				<!-- End of Hero Btn -->

			<?php endif; ?>

		</div>

	</div>
	<!-- ./ Banner Navigation -->
	
   
</section>
<!-- End of hero -->
<script>
	(function($){
		var btn_nav =  $('.button-navigation a');

        btn_nav.on('click', function(event) {

            event.preventDefault();

            var section = $(this).attr("href");

            $('html, body').animate({
                scrollTop: $(section).offset().top
            }, 1000);

        });

	})(jQuery)
</script>