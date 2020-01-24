<?php 
 $anchor_link = get_sub_field( 'anchor' );
 ?>
<section class="text-area" <?php echo ( $anchor_link ) ? 'id="'. $anchor_link .'"' : "" ?>>
	<div class="auto-container">
		 <div class="sec-title">
		 	<h2><?php echo get_sub_field('heading') ?></h2>
		 </div>
		 <div class="content-block">
		 	 <?php echo get_sub_field( 'text' ); ?>
		 </div>
	</div>
</section>