<div class="container-products">
	<div class="products-page-title">
		<h4>Våra produkter</h4>
	</div>

	<div class="basic-info-product">
		<h5>Fresh vegetables very Tuesday</h5>
		<h5>Fresh frozen products and other every Wednesday.</h5>
	</div>
	<div class="items-product">

	<?php
		$tags = get_terms('products_cat');
		$post_tags = wp_get_post_terms($post->ID,'products_cat',array('fields' => 'slugs', 'orderby' => 'name',
		'order' => 'ASC'));
		
	?>

	
	<?php //foreach( $post_tags as $post_tag ): echo $post_tag.' '; endforeach; 
	?>
		<?php foreach( $tags as $tag ): ?>
			<div class="<?php echo $tag->slug; ?> product-item" >
				<ul><a href="<?php echo site_url().'/products_cat/'.$tag->slug;?>"><?php echo $tag->name ?></a></ul>
		</div> 

		<?php endforeach; ?>        		
	</p>




</div>
