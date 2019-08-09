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
<!-- start wp_query to get posts in รืหยรพฟะรนื category -->
<?php 
// the query
$the_query = new WP_Query( array(
	'category_name' => 'inspiration',
	'post_type' => 'post',
	'order' => 'modified'
	
	) ); ?>
 
 <?php if ( $the_query->have_posts() ) : ?>
 
 <!-- the loop -->
 <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
 <div class="entry-content-cooking">
	 <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h5><?php the_title(); ?></h5></a>
	 <?php 
	 $videos = get_field('video');
	 echo $videos
	 ?>
 <?php endwhile; ?>
 <!-- end of the loop -->


<?php else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- end wp_query -->
</div><!-- .entry-content -->

	

	<footer class="entry-footer">

		<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

	</footer><!-- .entry-footer -->

</article><!-- #post-## -->
