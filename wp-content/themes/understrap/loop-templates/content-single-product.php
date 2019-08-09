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

	<header class="entry-header">

		<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>

		<div class="entry-meta">

			<?php //understrap_posted_on(); ?>

		</div><!-- .entry-meta -->

	</header><!-- .entry-header -->

	<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>

	<div class="entry-content">

		<?php the_content(); ?>
		<p><strong>Vikt: </strong><?php $size = get_field('size'); echo $size?></p>
		<p><strong>Varumär: </strong><?php $brand = get_field('brand'); echo $brand?></p>
		<p><strong>Ursprung: </strong><?php $land = get_field('land'); echo $land?></p>
		<p><strong>Produktbeskrivning: </strong><?php $land = get_field('land'); echo $land?></p>
		<p><strong>Kategori: </strong><?php the_terms(get_the_ID(), 'products_cat'); ?></p>

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
