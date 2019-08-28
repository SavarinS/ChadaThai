<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<?php 
if (is_single() ){
?>
	<div class="single-content">
	<!-- get post title -->
		<header class="entry-header-cooking">

			<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
			<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
		<?php 
			$videos = get_field('video');
			echo $videos
			?>

			<div class="entry-meta">

				<?php //understrap_posted_on(); ?>

			</div><!-- .entry-meta -->

		</header><!-- .entry-header -->



		<div class="entry-content-cooking">

			<?php the_content(); ?>

			
			

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div><!-- .entry-content -->
		</div>

		<footer class="entry-footer">

			<?php understrap_entry_footer(); ?>

		</footer>
		<!-- .entry-footer -->

	<?php } ?>
