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

	<div class="entry-contact">
		<div class="contact-info">
			<?php the_title( '<h4 class="entry-title">', '</h4>' ); ?>
			<?php the_content(); ?>
			
			<a href="https://www.google.com/maps/place/Storgatan+18A,+241+30+Esl%C3%B6v/@55.8378305,13.3035998,19z/data=!4m5!3m4!1s0x4653952b991a8d97:0xa120ee71e618b1c1!8m2!3d55.8378305!4d13.304147" target="_blank"><p><?php _e('Hitta oss'); ?></p></a>
		</div>

		<div class="contact-form">
			
			<?php $gallery = get_field('gallery'); echo $gallery?>

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

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
