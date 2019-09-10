<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>


<!-- start wp_query to get posts in  category -->
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
	<div class="cooking-item">

	
		<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><h5><?php the_title(); ?></h5></a>
		<?php 
		$videos = get_field('video');
		echo $videos
		?>
	</div>


 <?php endwhile; ?>
 <!-- end of the loop -->


<?php else : ?>
 <p><?php _e( 'Sorry, no posts matched your criteria', 'understrap' ); ?></p>
<?php endif; ?>
<!-- end wp_query -->




