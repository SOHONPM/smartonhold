<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<section class="blur-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>
	<div class="container">
		 <div class="sec-title">
		 	<h2><?php echo get_sub_field('heading') ?></h2>
		 </div>
	</div>
</section>