<!-- Template display most buy products in front page  -->
<div class="container-popular-products">
	<h5><?php _e( 'Most buy products', 'understrap' ); ?></h5>
	
	<!-- wp_query to sort out taxonomy popular_products in cutome post type products  -->
	<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'posts_per_page' => 5,
			'orderby' => 'modified',
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat', //Taxonomy name that created by Custom Post Type
					'field' => 'slug',
					'terms' => 'populara-produkter' //category
				),
			)			
			) ); 
	?>
	<div class="main-new-products">

		<?php if ( $the_query->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
				
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="product">	
							<div class="product_image">
								<?php if(has_post_thumbnail()) { ?>
									<div class="missing-image">
										<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
									</div><!-- .search-image -->
								<?php } else { ?>
									<div class="no-image">
										<p><?php _e('No image', 'understrap'); ?></p>
									</div> <!-- .no-image -->
								<?php } ?>
							</div>
						<div class="product_title">
							<h6><?php the_title(); ?></h6>
						</div><!-- end .product-title -->
						</div><!-- end .product -->
					</a>
				
	
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria', 'understrap' ); ?></p>
		<?php endif; ?>
		<!-- end main-new-products -->
		</div> 

</div>