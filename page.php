<?php get_header(); ?>
	
<div id="content">
	<!-- Hero -->
	<div id="hero">
		<?php if ( have_rows( 'hero' ) ): ?>
			<?php while ( have_rows( 'hero' ) ) : the_row(); ?>

				<?php if ( get_row_layout() == 'video_background' ) : ?>
					<div id="hero-section">
				    <video poster="<?php the_sub_field( 'fallback_image' ); ?>" autoplay="true" loop>
				        <source src="<?php the_sub_field( 'video' ); ?>" type="video/mp4">
				    </video>
				    <div class="hero-copy">
				    	<h1><?php the_sub_field( 'hero_title' ); ?></h1>
				    </div>
					</div>
					

				<?php elseif ( get_row_layout() == 'image_background' ) : ?>
					<div class="hero-section" style="background-image: url('<?php the_sub_field( 'hero_image' ); ?>')">
					  <div class="hero-section-text">
							<h1><?php the_sub_field( 'hero_title' ); ?></h1>
					  </div>
					</div>
					

				<?php elseif ( get_row_layout() == 'white_background' ) : ?>
					<h1 class="white_background"><?php the_sub_field( 'hero_title' ); ?></h1>

				<?php endif; ?>

			<?php endwhile; ?>
		<?php else: ?>
			<?php // no layouts found ?>
		<?php endif; ?>
  </div>
 	<!-- END Hero -->

	<!-- Modules -->
	<?php if ( have_rows( 'module' ) ): ?>
		<?php while ( have_rows( 'module' ) ) : the_row(); ?>


			<?php if ( get_row_layout() == 'center_copy' ) : ?>
			<div class="row" id="center_copy">
			  <div class="small-12 medium-8 small-centered columns text-center">						<?php the_sub_field( 'copy' ); ?>
						<a href="<?php $button_link = get_sub_field( 'button_link' ); ?>" class="<?php the_sub_field( 'add_button' ); ?> button"><?php the_sub_field( 'button_copy' ); ?></a>				
				</div>
			</div>
	
			<?php elseif ( get_row_layout() == 'link_boxes' ) : ?>

			<div class="row" id="link-boxes">
			<?php if ( have_rows( 'single_box' ) ) : ?>
				<?php while ( have_rows( 'single_box' ) ) : the_row(); ?>
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) { ?>
					<a href="<?php echo $link; ?>" class="singlebox small-6 medium-4 text-center columns end">
						<div class="fill"><img src='<?php the_sub_field( "image" ); ?>' /></div>
    				<div class="overlay">
    					<h4><?php the_sub_field( 'copy' ); ?></h4>
    				</div>
					</a>
					<?php } ?>

				<?php endwhile; ?>
			</div>

			<?php else : ?>
				<?php // no rows found ?>
			<?php endif; ?>


			<?php elseif ( get_row_layout() == 'friend_Link' ) : ?>
			<div id="link-boxes" class="row">
				<?php if ( have_rows( 'single_box' ) ) : ?>
					<?php while ( have_rows( 'single_box' ) ) : the_row(); ?>
					<?php $link = get_sub_field( 'link' ); ?>
					<?php if ( $link ) { ?>
					<a href="<?php echo $link; ?>" class="small-12 medium-4 columns end" id="friend">
						<img src='<?php the_sub_field( "image" ); ?>'  class="small-12 columns" />
    				<div class="small-12 columns">
    					<p><?php the_sub_field( 'copy' ); ?></p>
    				</div>
					</a>
					<?php } ?>
					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>
			</div>


			<?php elseif ( get_row_layout() == 'all_potters' ) : ?>
			<div id="link-boxes" class="row">

			<?php 	$mypages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'simple_page_ordering_is_sortable' ) );  	foreach( $mypages as $page ) {		 		$content = $page->post_content; 		if ( ! $content ) // Check for empty page 			continue;  		$content = apply_filters( 'the_content', $content ); 	?>
					<a href="<?php echo get_page_link( $page->ID ); ?>" class="singlebox small-6 medium-4 text-center columns end">
												<div class="fill"><?php echo get_the_post_thumbnail( $page->ID, full ); ?></div>
    				<div class="overlay">


						<h4><?php echo $page->post_title; ?></h4>
					</div>
					</a>
                 		
			<?php 	}	 ?>
			</div>



			<?php elseif ( get_row_layout() == 'contact' ) : ?>
			<div class="row">
					<div class="small-12 small-pull-12 medium-offset-2 medium-4  columns">
						<div class="contact-spacing">
							<?php the_sub_field( 'copy' ); ?>
						</div>
					</div>
					<div class="small-12 small-push-12 medium-4  columns end">
						<img src="<?php the_sub_field( 'image' ); ?>" />
					</div>
			</div>

			<?php elseif ( get_row_layout() == 'singlevideo' ) : ?>
				<div class="row" id="videoblock">
					<div class="small-12 columns">
						<video width="100%" controls>
							<source src="<?php the_sub_field( 'video' ); ?>" type="video/mp4">
							<p>Issue loading the video, sorry</p>
						</video>
					</div>
				</div>

			<?php elseif ( get_row_layout() == 'flexibileimages' ) : ?>
				<div class="row" id="imageblock">
				<?php if ( have_rows( 'images_block' ) ) : ?>
					<?php while ( have_rows( 'images_block' ) ) : the_row(); ?>
						<a href="<?php the_sub_field( 'single_image_gallery' ); ?>" data-lightbox="complete-set" data-title="Click the right half of the image to move forward."><img src="<?php the_sub_field( 'single_image_gallery' ); ?>" class="<?php the_sub_field( 'images_row' ); ?> columns lightimage end"></a>


					<?php endwhile; ?>
				<?php else : ?>
					<?php // no rows found ?>
				<?php endif; ?>



		<?php endif; ?>
	<?php endwhile; ?>
<?php else: ?>
	<?php // no layouts found ?>
<?php endif; ?>

	<!-- Modules END -->


	    
</div>

<?php get_footer(); ?>