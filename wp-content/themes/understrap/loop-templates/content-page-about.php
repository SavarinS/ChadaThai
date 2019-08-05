<div class="container-about">

	<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 'pagename' => 'om-oss') ); 
	?>
	
		<?php if ( $the_query->have_posts() ) : ?>
	
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				<div class="about-img">
					<?php 
					the_post_thumbnail('large');
					?>
				</div>
				<div class="about-info">
					<h5 class="store-title"><?php the_title(); ?></h5>
					<div class="entry-content">
						<?php the_content(); ?>
					</div>
					<!-- .entry-content -->
					<button>
						<p>Mer om oss</p>
					</button>


				</div>
		
					
				
			
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>

	</div><!-- container-about -->
