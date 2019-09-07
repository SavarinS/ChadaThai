<!-- Template display all products in front page  -->
<div class="container-products">
	<div class="products-page-title">
		<h5><?php _e('Våra produkter'); ?></h5>
	</div>

	<div class="basic-info-product">
		<h6><?php _e('Färska grönsaker kommer på tisdag'); ?></h6>
		<h6><?php _e('Fresh frozen products and other every Wednesday.'); ?></h6>
	</div>
	<div class="display">

	<div class="products-new-pop">
		
		<?php $terms = get_terms( array(
			'taxonomy' => 'products_cat',
			//'hide_empty' => false,
			'include' => array(85, 87) //display new products cat and popular products cat
			
		) ); ?>

		<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			
			foreach ( $terms as $term ) : ?>
			<div class="new-item">
			<a href="<?php echo  get_term_link( $term ); ?>">
			<div class="<?php echo $term->slug; ?> product-new-pop" >
			</div>
			<div class="new-title">
				<li>
				<?php echo $term->name; ?>		
				</li>
			</div>	
				</a>
				
				</div>		
			
		<?php endforeach; ?> 
		<?php } ?>

	</div>
	
	<div class="items-product-old">
		
		<?php $terms = get_terms( array(
			'taxonomy' => 'products_cat',
			//'hide_empty' => false,
			'exclude' => array(85, 87) //exclude new products cat and popular products cat
			
		) ); ?>

		<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
			
			foreach ( $terms as $term ) : ?>
			<a href="<?php echo  get_term_link( $term ); ?>">
				<div class="<?php echo $term->slug; ?> product-item-old" >
			
					<li>
					<?php echo $term->name; ?>		
					</li>
				</div>
			</a>
				
					
			
		<?php endforeach; ?> 
		<?php } ?>

	</div>
	</div>
	
</div>
