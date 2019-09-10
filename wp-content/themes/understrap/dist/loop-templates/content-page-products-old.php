<!-- Template display all products in front page  -->
<div class="container-products">
	<div class="products-page-title">
		<h5><?php _e('Products', 'understrap'); ?></h5>
	</div>

	
	<div class="display">

		<div class="products-new-pop">
			<div class="section-product">
				<?php $terms = get_terms( array(
					'taxonomy' => 'products_cat',
					//'hide_empty' => false,
					'include' => array(85, 87) //display new products cat and popular products cat
					
				) ); ?>

				<?php if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
					
					foreach ( $terms as $term ) : ?>
					
						<a href="<?php echo  get_term_link( $term ); ?>">
							<div class="<?php echo $term->slug; ?> product-new-pop" >

								<div class="new-title">
								<li>
								<?php echo $term->name; ?>		
								</li>
							</div>
							</div>
								
						</a>
					
							
				
			<?php endforeach; ?> 
			<?php } ?>
			</div>
			<div class="basic-info-product">
				<h6><?php _e('Fresh vegetables from Thailand are available on Tuesday', 'understrap'); ?></h6>
				<h6><?php _e('Other new products are available on Wednesday', 'understrap'); ?></h6>
			</div>

		</div>
	
		<div class="items-product-old">
		
			<?php $terms = get_terms( array(
				'taxonomy' => 'products_cat',
				//'hide_empty' => false,
				'exclude' => array(85, 87, 159, 167, 163, 133) //exclude new products cat and popular products cat
				//sv = 85, 87
				//en = 159, 167
				//th = 163, 133
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
