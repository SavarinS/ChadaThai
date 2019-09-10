<!-- Template show about section in front page -->

<div class="container-about">

	<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 'pagename' => 'about-us') ); 
	?>
	<!-- start if the paost has text  -->
		<?php if ( $the_query->have_posts() ) : ?>
	
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<!-- get the feature image  -->
				<div class="about-img">
					<?php 
					the_post_thumbnail('large');
					?>
				</div>
				<!-- get the title and the content from the page about  -->
				<div class="about-info">
					<h5 class="store-title"><?php the_title(); ?></h5>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<!-- .entry-content -->
					<!-- display button with a link  -->
					<div class="more-about">
						<a href="<?php echo get_permalink( 32 ); ?>"><?php _e( 'Read more', 'understrap' ); ?></a>
					</div>
				</div><!-- div.about-info -->			
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
		<!-- if not page  -->
			<p><?php _e( 'Sorry, no posts matched your criteria', 'understrap' ); ?></p>
		<?php endif; ?>

	</div><!-- container-about -->
