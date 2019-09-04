<!-- Template display most buy products in front page  -->
<div class="container-popular-products">
	<h5><?php _e( 'Våra populära produkter' ); ?></h5>
	
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
							<?php the_post_thumbnail('thumbnail'); ?>
						</div>
						<div class="product_title">
							<h6><?php the_title(); ?></h6>
						</div><!-- end .product-title -->
						</div><!-- end .product -->
					</a>
				
	
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<!-- end main-new-products -->
		</div> 

</div>