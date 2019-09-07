<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">
	

		<div class="post-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
		</div>

		

		

		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

		

	<div class="sect2">

		<div class="entry-title-single">
			<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
		</div><!-- .entry-content -->

		<div class="entry-info-single">
			<?php the_content(); ?>
			<p><strong>Vikt: </strong><?php $size = get_field('size'); echo $size?></p>
			<p><strong>Varumär: </strong><?php $brand = get_field('brand'); echo $brand?></p>
			<p><strong>Ursprung: </strong><?php $land = get_field('land'); echo $land?></p>
			<p><strong>Produktbeskrivning: </strong><?php $land = get_field('land'); echo $land?></p>
			<p><strong>Kategori: </strong><?php the_terms(get_the_ID(), 'products_cat'); ?></p>

		</div>
		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

		
	</div>

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
