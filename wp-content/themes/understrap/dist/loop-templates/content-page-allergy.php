<!-- Template display information about allergy  -->
<div class="container-allergy">
	
	<div class="allergy-info">
		<h6><?php _e('Looking for gluten-free products?', 'understrap'); ?></h6>
		

		<?php $vete = get_terms(array(
			'taxonomy' => 'products_cat',
			'include' => array(121, 111, 149) //display taxonomy glutenfri
		)); ?>


	<?php if ( ! empty( $vete ) && ! is_wp_error( $vete ) ){
				
				foreach ( $vete as $term ) : ?>
				<a href="<?php echo  get_term_link( $term ); ?>">
					
				
					<h6><?php _e('We have gluten-free products', 'understrap'); ?></h6>
								
						
					
				</a>
					
						
				
			<?php endforeach; ?> 
			<?php } ?>

		
	</div>

	

</div>