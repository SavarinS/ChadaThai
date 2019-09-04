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
		<div class="noodle item">
			<p><?php _e('Nudlar'); ?></p>
		</div>
		<div class="coconutsmilk item">
			<p><?php _e('Kokosmjölk'); ?></p>
		</div>
		<div class="frozen item">
		<p><?php _e('Djupfrysning'); ?></p>
		</div>

		<div class="curry item">
			<p><?php _e('Currypasta'); ?></p>
		</div>

		<div class="sauce item">
			<p><?php _e('Sås'); ?></p>
		</div>

		<div class="spice item">

			<p><?php _e('Kryddor'); ?></p>
			
		</div>
		
	</div>
		
	
	<div class="see-all-products">

		<a href="<?php echo get_post_type_archive_link( 'products' ); ?>"><?php _e('Alla produkter'); ?></a>
	
		
	</div>
	</div>
