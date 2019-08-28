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
	<section class="about-text">
		<div class="post-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'large' ); ?>
		</div>
		<div class="post-info">
			<h4><?php the_title(); ?></h4>
			<?php the_content(); ?>
		</div>
		
	</section>
	

		

		<?php $gallery = get_field('gallery'); echo $gallery?>
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
