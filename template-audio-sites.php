<?php
/*
 Template Name: Sample Audio Site
 *
*/
?>

<?php get_header(); ?>

<main class="content" id="content" itemscope itemtype="http://schema.org/WebPageElement">

	<?php get_template_part( 'template-parts/loop/content', 'banner' );  ?>

	<div class="content__main">

		<div class="auto-container">

			<div class="player-wrapper">

				 <div class="logo">
				 	
				 	<div class="logo-img">

						<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-v2.png" />

					</div>

				 </div>
				 
				 	
				<?php if( have_rows('playlist') ) : $count = 0; ?>

				 	<div class="playlist">	

				 		<?php while( have_rows('playlist') ) : the_row(); $count++ ?>

							<div class="single-audio">
								
								<div class="audio-meta">
									<img src="<?php echo get_template_directory_uri() ?>/assets/images/logo-v2.png" width="48" height="auto" />
									<span><?php echo $count?></span> 
									<p><?php echo get_sub_field( 'title' );?></p>

								</div>

								<?php the_sub_field('audio_sample'); ?>

							</div>

						<?php endwhile ?>

					</div>

				<?php endif; ?>	


			</div>

		</div>

	</div>

</main>
	
<?php get_footer(); ?>

<style type="text/css">
	.player-wrapper {
	    display: flex;
	    flex-wrap: wrap;
	}
	.player-wrapper .logo {
	    width: 200px;
	}
	.logo-img {
	    border: 1px solid #f1eded;
	    padding: 20px;
	    overflow: hidden;
	}
	.playlist {
	    width: calc(100% - 200px);
	    padding-left: 40px;
	}
	.single-audio {
	    padding-bottom: 30px;
	    margin-bottom: 30px;
	    border-bottom: 1px solid #ddd;
	}
	.audio-meta {
		display: flex;
		align-items: center;
		margin-bottom: 10px;
	}
	.audio-meta img {
		border: 1px solid #f1eded;
	}
	.audio-meta span {
		padding: 5px 10px;
		width: 30px;
		color: #062a5a;
	}
	.audio-meta p {
		margin: 0;
		padding: 5px 10px;
		font-size: 16px;
		line-height: 1.3;
	}
/*	.single-audio .mejs-container, 
	.single-audio .mejs-container .mejs-controls, 
	.single-audio .mejs-embed, .mejs-embed body {
	    background: transparent !important;
	    padding: 0;
	}
	.single-audio  .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current, 
	.single-audio  .mejs-controls .mejs-time-rail .mejs-time-loaded {
	    background: #072c5d !important;
	}*/
	.content__main {
	    padding: 60px 0;
	}
	@media (max-width: 767px) {
		.player-wrapper .logo {
		    display: none;
		}
		.playlist {
		    width: 100%;
		    padding-left: 0;
		}
	}
</style>