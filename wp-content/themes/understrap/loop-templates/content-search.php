<?php
/**
 * Search results partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="search-item">

	<header class="entry-header">

		<?php
		the_title(
			sprintf( '<h5 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ),
			'</a></h5>'
		);
		?>
		

		<?php if ( 'post' == get_post_type() ) : ?>

			<div class="entry-meta">

				<?php //understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		<?php endif; ?>

	</header><!-- .entry-header -->

	<div class="entry-summary">
		<?php if(has_post_thumbnail()) { ?>
			<div class="search-image">
			<?php echo get_the_post_thumbnail( $post->ID, 'thumbnail' ); ?>
			
			</div>
		<?php } else { ?>
			<?php the_excerpt(); ?>
		<?php } ?>
		
		

	</div><!-- .entry-summary -->

	<footer class="entry-footer">

		<?php understrap_entry_footer(); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
