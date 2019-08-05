<div class="container-new-products">
	<h4>Våra nya produkter</h4>
<?php 
	// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'posts_per_page' => 5,
			//'orderby' => 'modified',
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat', //Taxonomy name that created by Custom Post Type
					'field' => 'slug',
					'terms' => 'new_products' //category

				),
			)
			
			) ); 
	?>
	<div class="main-new-products">

		<?php if ( $the_query->have_posts() ) : ?>
	
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="new-product">

			
				<div class="new-product-image">
					<?php the_post_thumbnail('thumbnail'); ?>
				</div>
				<div class="new-product-title">
					<a href="<?php echo get_permalink( $post->ID ); ?>"><?php the_title(); ?></a>
				</div>
				<?php //the_terms(get_the_ID(), 'products_cat'); ?>
				
				

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