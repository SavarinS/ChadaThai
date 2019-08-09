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
		<?php
			$tags = get_terms( array(
				'taxonomy' => 'products_cat', 
			));
			$post_tags = wp_get_post_terms($post->ID,'products_cat',array('fields' => 'slugs', 'orderby' => 'name',
			'order' => 'ASC',
			));
			$exclude_term = array('new_products', 'popular_products')
			
		?>
		

		<?php //foreach( $post_tags as $post_tag ): echo $post_tag.' '; endforeach; 
		?>
			<?php foreach( $tags as $tag ): ?>
			<?php if(! in_array($tag->$tag_id, $exclude_term)) ?>
			<div class="item">
				<a href="<?php echo site_url().'/products_cat/'.$tag->slug;?>">
					
						<div class="<?php echo $tag->slug; ?> product-item" >
						
						</div> 
						<div class="item-title">
							<ul><?php echo $tag->name ?></ul>
						</div>
					
				</a>
			</div>
			<?php endforeach; ?> 	

</div>
