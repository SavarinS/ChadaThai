<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	
			<!-- show template about page -->
			<?php
			get_template_part( 'loop-templates/content', 'page-about' );
			?>
			<!-- show template popular products -->
			<?php
			get_template_part( 'loop-templates/content', 'page-popular' );
			?>

			<!-- show template news and promotion -->
			<?php
			get_template_part( 'loop-templates/content', 'page-promotion' );
			?>

			<!-- show template address -->
			<?php
			get_template_part( 'loop-templates/content', 'page-location' );
			?>

			<!-- show template new products -->
			<?php
			get_template_part( 'loop-templates/content', 'page-new' );
			?>

			<!-- show template food allergy -->
			<?php
			get_template_part( 'loop-templates/content', 'page-allergy' );
			?>

			<!-- show template products -->
			<?php
			get_template_part( 'loop-templates/content', 'page-products' );
			?>

			<!-- show template recipes -->
			<?php
			get_template_part( 'loop-templates/content', 'page-recipes' );
			?>

		<?php
		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
				'after'  => '</div>',
			)
		);
		?>

	

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
