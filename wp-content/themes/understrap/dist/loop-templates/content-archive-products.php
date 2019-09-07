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

		

	<div class="archive-product-title">
			<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
		</div>
			<?php
			the_title(
				sprintf( '<h6 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
				'</a></h6>'
			);
			?>
			

	</header><!-- .entry-header -->

	
		
	<div class="entry-content">
		
	
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
