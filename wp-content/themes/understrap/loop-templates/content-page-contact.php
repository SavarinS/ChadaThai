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

	<!-- <header class="entry-header"> -->

		<?php //the_title( '<h1 class="entry-title">', '</h1>' ); ?>

	<!-- </header> -->
	<!-- .entry-header -->

	<?php //echo get_the_post_thumbnail( $post->ID, 'large' ); ?>

	<div class="entry-content">
	<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
		<?php the_content(); ?>
		<?php $gallery = get_field('gallery'); echo $gallery?>
		<?php $map = get_field('google_maps'); echo $map?>

		<!-- display google maps -->
		<?php 

			$location = get_field('google_maps');
			if( !empty($location) ):
			?>
				<div class="acf-map">
				
					<div class="marker" data-lat="<?php echo $location['lat']; ?>" data-lng="<?php echo $location['lng']; ?>"></div>
				</div>
				<?php else : ?>
				<h1>No maps!</h1>
			<?php endif; ?>
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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
