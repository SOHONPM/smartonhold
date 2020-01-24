<?php if( get_sub_field('show_reviews') ) : ?>
	
	<?php 
	 $anchor_link = get_sub_field( 'anchor' );
	 ?>
	<!-- Testimonial Area -->
	<section class="review-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

		 <div class="container">

		 	   <div class="row">

		 	   	   <div class="col-md-10 offset-md-1">

		 	   	   	    <!-- Review Carousel -->
		 	   	   	    <div class="review-carousel2">
		 	   	   	    
		 	   	   	    	<div class="gradeus-stream" data-carousel="true" data-show-aggregate-rating="true" data-last-initial="true" data-review-limit="5" data-url="https://grade.us/smart-on-hold-queensland-rochedale-south-au-4123/"></div><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.grade.us/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document, "script", "gradeus-wjs");</script>

		 	   	   	    
		 	   	   	    </div>
		 	   	   	    <!-- End of Review Carousel -->

		 	   	   	    <div class="text-center testimonial__button mt-3">
				             <a href="https://www.grade.us/smart-on-hold-queensland-rochedale-south-au-4123/" target="_blank" class="btn btn-primary">Write a review</a>
				        </div>

		 	   	   </div>

		 	   </div>

		 </div>

	</section>
	<!-- End of Testimonial Area -->	

<?php endif; ?>