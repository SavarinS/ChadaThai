<div class="container-popular-products">
	<h4>Våra populära produkter</h4>
<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'posts_per_page' => 8,
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat',
					'terms' => 'popular_products'

				),
			)
			
			) ); 
	?>
	
		<?php if ( $the_query->have_posts() ) : ?>
	
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<p class="product-title"><?php the_title(); ?></p>
					<p><?php the_category(' , '); ?></p>
					
					
				
		
					
				
			
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>


</div>