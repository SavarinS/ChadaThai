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
		<?php if(has_post_thumbnail()) { ?>
			<div class="search-image">
				<?php echo get_the_post_thumbnail( $post->ID, 'medium' ); ?>
			</div><!-- .search-image -->
		<?php } else { ?>
			<div class="no-image">
				<p><?php _e('No image', 'understrap'); ?></p>
			</div> <!-- .no-image -->
		<?php } ?>
	
	</div> <!-- .post-image -->

	<div class="sect2">

		<div class="entry-title-single">
			<?php the_title( '<h5 class="entry-title">', '</h5>' ); ?>
		</div><!-- .entry-title-single -->

		<div class="entry-info-single">
			<!-- If post has brand  -->
			<?php 
				$content = get_the_content();
				if (!empty($content)) { ?>
					<?php echo $content?>
				<?php } ?>
			
				<!-- If post has weight  -->
			<?php 
				$size = get_field('size');
				if (!empty($size)) { ?>
					<p><?php echo $size?></p>
				<?php } ?>

			<!-- If post has brand  -->
			<?php 
				$brand = get_field('brand');
				if (!empty($brand)) { ?>
					<p><?php echo $brand?></p>
				<?php } ?>

			<!-- If post has country  -->
			<?php 
				$land = get_field('country');
				if (!empty($land)) { ?>
					<p><?php echo $land?></p>
				<?php } ?>

			<!-- If post has description  -->
			<?php 
				$des = get_field('product_description');
				if (!empty($des)) { ?>
					<p><strong><?php _e('Description', 'understrap'); ?>: </strong><?php echo $des?></p>
					
				<?php } ?>

			<!-- If post has category  -->
			<p><?php _e('Category', 'understrap'); ?>: 
			
			<?php 
				$cats = get_the_terms(get_the_ID(), 'products_cat');
				if (!empty($cats)) { ?>
					<?php 
						foreach ( $cats as $cat ) : ?>
						<a href="<?php echo  get_term_link( $cat); ?>">		
							<?php echo $cat->name; ?>
						</a>

					<?php endforeach; ?> 
				<?php } ?>
				</p>
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
