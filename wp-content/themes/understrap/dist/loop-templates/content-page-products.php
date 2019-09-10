<!-- Template display all products in front page  -->
<div class="container-products">
	<div class="products-page-title">
		<h5><?php _e('Products', 'understrap'); ?></h5>
	</div>

	<div class="basic-info-product">
		<h6><?php _e('Fresh vegetables from Thailand are available on Tuesday.', 'understrap'); ?></h6>
		<h6><?php _e('Other new products are available on Wednesday.', 'understrap'); ?></h6>
	</div>
	<div class="items-product">
		

		<?php $terms = get_terms( array(
				'taxonomy' => 'products_cat',
				//'hide_empty' => false,
				'include' => array(93, 103, 91, 72, 97, 67) //include new products cat and popular products cat
				//sv = 93, 103, 91,72, 97, 67
				//en = 159, 167
				//th = 163, 133
			) ); ?>

			<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
				
				foreach ( $terms as $term ) : ?>
				<div class="item" >
					<a href="<?php echo  get_term_link( $term ); ?>">
						
					
							
							<p><?php echo $term->name; ?></p>		
							
						
					</a>
				</div>
					
						
				
			<?php endforeach; ?> 
			<?php } ?>
		
	</div>
	
		
	
	<div class="see-all-products">

		<a href="<?php echo get_post_type_archive_link( 'products' ); ?>"><?php _e('All products', 'understrap'); ?></a>
	
		
	</div>
	</div>
