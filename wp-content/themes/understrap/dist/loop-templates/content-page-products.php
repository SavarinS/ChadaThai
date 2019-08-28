<!-- Template display all products in front page  -->
<div class="container-products">
	<div class="products-page-title">
		<h5><?php _e('Våra produkter'); ?></h5>
	</div>

	<div class="basic-info-product">
		<h6><?php _e('Färska grönsaker kommer på tisdag'); ?></h6>
		<h6><?php _e('Fresh frozen products and other every Wednesday.'); ?></h6>
	</div>
	<div class="items-product">
		
		<?php $terms = get_terms( array(
			'taxonomy' => 'products_cat',
			'hide_empty' => false,
		) ); ?>

		<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			
			foreach ( $terms as $term ) : ?>
			<a href="<?php echo  get_term_link( $term ); ?>">
			<div class="<?php echo $term->slug; ?> product-item" >
			
				
				<?php echo $term->name; ?>		
				
				</div>
				</a>
				
					
			
		<?php endforeach; ?> 
		<?php } ?>

	</div>
