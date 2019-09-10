<?php
/**
 * Show new products at the bottom of single products
 *
 * @package understrap
 */


?>
<h5><?php _e('Våra nya produkter'); ?></h5>
	<?php 
		// the query get about us page 
		$the_query = new WP_Query( array( 
			'post_type' => 'products',
			'post_status' => 'publish',
			'posts_per_page' => 5,
			'orderby' => 'modified',
			'tax_query' => array(
				array(
					'taxonomy' => 'products_cat', //Taxonomy name that created by Custom Post Type
					'field' => 'slug',
					'terms' => 'nya-produkter', //category
				),
			)			
			) ); 
	?>
	<div class="product-items">

	
		<?php if ( $the_query->have_posts() ) : ?>
			<!-- the loop -->
			<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			
				<div class="product-item">
					<a href="<?php echo get_permalink( $post->ID ); ?>">
						<div class="product-image">
							<?php if(has_post_thumbnail()) { ?>
							
								<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
							
							<?php } else { ?>
							<div class="no-image">
								<p><?php _e('Produktbild saknas'); ?></p>
							</div> <!-- .no-image -->
						<?php } ?>
							
						</div> <!-- .product-image -->
						<div class="product-title">
							<h6><?php the_title(); ?></h6>
						</div>
					</a>
				</div><!-- end .product -->	
			<?php endwhile; ?>
		<!-- end of the loop -->
			<?php else : ?>
			
				<p><?php _e( 'Sorry, no posts matched your criteria' ); ?></p>
			<?php endif; ?>
			
			</div>



