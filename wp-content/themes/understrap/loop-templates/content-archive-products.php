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
			<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
		</div>

		<div class="archive-product-desc">
			<?php
			the_title(
				sprintf( '<h6 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h6>'
			);
			?>
			<strong><?php $brand = get_field('brand'); echo $brand?></strong>
			<p><strong>Ursprung: </strong><?php $land = get_field('land'); echo $land?></p>
		</div>	
	

</article><!-- #post-## -->
