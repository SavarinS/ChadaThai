<div class="container-popular-products">
	<h4>Våra populära produkter</h4>
<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'posts_per_page' => 10,
			'orderby' => 'modified',
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat', //Taxonomy name that created by Custom Post Type
					'terms' => 'popular_products' //category

				),
			)
			
			) ); 
	?>
	<div class="main-new-products">

		<?php if ( $the_query->have_posts() ) : ?>
	
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="product">

			
				<div class="product_image">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div class="product_title">
					<a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a>
				</div>
				<!-- end .product -->
				</div>
	
		<?php endwhile; ?>
		<!-- end of the loop -->
		<?php else : ?>
			<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
		<?php endif; ?>
		<!-- end main-new-products -->
		</div> 

</div>