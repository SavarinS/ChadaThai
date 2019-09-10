<div class="container-new-products">
	<h5><?php _e('New products', 'understrap'); ?></h5>
	<?php 
		// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'post_status' => 'publish',
			'posts_per_page' => 5,
			'orderby' => 'modified',
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat', //Taxonomy name that created by Custom Post Type
					'field' => 'slug',
					'terms' => 'nya-produkter', //category
				),
			)			
			) ); 
	?>
	<div class="main-new-products">
		<?php if ( $the_query->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<a href="<?php echo get_permalink( $post->ID ); ?>">
					<div class="new-product">
						<div class="new-product-image">
							<?php if(has_post_thumbnail()) { ?>
								<div class="missing-image">
									<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
								</div><!-- .search-image -->
							<?php } else { ?>
								<div class="no-image">
									<p><?php _e('No image', 'understrap'); ?></p>
								</div> <!-- .no-image -->
							<?php } ?>
						</div>
						<div class="new-product-title">
							<h6><?php the_title(); ?></h6>
						</div>
						<?php //the_terms(get_the_ID(), 'products_cat'); ?>
						</div><!-- end .product -->	
					</a>
				
			<?php endwhile; ?>
		<!-- end of the loop -->
			<?php else : ?>
				<p><?php _e( 'Sorry, no posts matched your criteria', 'understrap' ); ?></p>
			<?php endif; ?>
			</div> <!-- end main-new-products -->
	</div>