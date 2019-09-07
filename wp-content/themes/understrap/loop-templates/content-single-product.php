<?php
/**
 * Single post partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article class="single-post">
	

		<div class="post-image">
			<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
				<ol class="carousel-indicators">
					<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
				</ol>
				<div class="carousel-inner">
					<div class="carousel-item active">
					<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
					</div>
					<div class="carousel-item">
					<?php $image1 = get_field('description_image_1'); echo $image1?>
					</div>
					<div class="carousel-item">
					<?php $image2 = get_field('description_image_2'); echo $image2?>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div>
			
		</div>

	<div class="sect2">

		<div class="entry-title-single">
			<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
		</div><!-- .entry-content -->

		<div class="entry-info-single">
			<?php the_content(); ?>
			<p><strong>Vikt: </strong><?php $size = get_field('size'); echo $size?></p>
			<p><strong>Varumär: </strong><?php $brand = get_field('brand'); echo $brand?></p>
			<p><strong>Ursprung: </strong><?php $land = get_field('country'); echo $land?></p>
			<p><strong>Produktbeskrivning: </strong><?php $land = get_field('product_description'); echo $land?></p>
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
