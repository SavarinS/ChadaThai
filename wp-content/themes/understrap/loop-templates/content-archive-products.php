<?php
/**
 * Post rendering content according to caller of get_template_part.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="taxonomy-item">

	<div class="archive-product-title">
		<?php if(has_post_thumbnail()) { ?>
				<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
	
		<?php } else { ?>
	<div class="no-image">
				<p><?php _e('No image', 'understrap'); ?></p>
	</div>
		<?php } ?>
	</div> <!-- .archive-product-title -->

	<div class="archive-product-desc">
		<?php
			the_title(
				sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h5>'
			);
		?>
		<!-- If post has brand  -->
		<?php 
			$brand = get_field('brand');
			if (!empty($brand)) { ?>
			<strong><?php echo $brand?></strong>
		<?php } ?>

		<!-- If post has original products  -->
		<?php 
			$land = get_field('land');
			if (!empty($brand)) { ?>
			<strong><?php echo $land?></strong>
		<?php } ?>

		</div>	
	

</article><!-- #post-## -->
