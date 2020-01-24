<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<section class="lead-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>

	<div class="container">

		 <div class="sec-title">

		 	<h2><?php echo get_sub_field('heading') ?></h2>

		 </div>

		 <div class="row">

		 	 <div class="col-md-9">
		 	 		
		 	 	<?php if( have_rows('list') ) : ?>	
		 	 	<ul>

		 	 		<?php while( have_rows('list') ) : the_row(); ?>

		 	 				<li><i class="fa fa-check"></i> <span><?php echo get_sub_field('item'); ?></span></li>

		 	 		<?php endwhile; ?>

		 	 	</ul>
		 	 	<?php endif; ?>

		 	 </div>

		 	 <div class="col-md-3">
		 	 	 <div class="lead-image">
		 	 	 	 <?php $image = get_sub_field('image'); 

		 	 	 	 	echo wp_get_attachment_image( $image, 'full');
		 	 	 	 ?>
		 	 	 </div>
		 	 </div>

		 </div>

	</div>

</section>