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

	<header class="entry-header">
<!-- <p>content-archive-products.php</p> -->
		


			<?php
			the_title(
				sprintf( '<h4 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h4>'
			);
			?>
			

	</header><!-- .entry-header -->

	
		
	<div class="entry-content">
		<div class="archive-product-title">
			<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
		</div>
		<div class="archive-product-des">

		
			<p><strong><?php _e('Vikt'); ?>: </strong><?php $size = get_field('size'); echo $size?></p>
			<p><strong><?php _e('Varumärk'); ?>: </strong><?php $brand = get_field('brand'); echo $brand?></p>
			<p><strong><?php _e('Ursprung'); ?>: </strong><?php $land = get_field('land'); echo $land?></p>
			<p><strong><?php _e('Produktbeskrivning'); ?>: </strong><?php $land = get_field('land'); echo $land?></p>
			<p><strong><?php _e('Kategori'); ?>: </strong><?php the_terms(get_the_ID(), 'products_cat'); ?></p>
		</div>
		

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	</div><!-- .entry-content -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
