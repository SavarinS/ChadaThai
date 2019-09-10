<?php
/**
 * The template for displaying all single posts.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'global-templates/hero-search' ); ?>
<div class="wrapper" id="single-wrapper">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'loop-templates/content', 'single-product' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
						comments_template();
				endif;
				?>

	<?php endwhile; // end of the loop. ?>

			<div class="sub-main">
				<div class="get-products">
					<?php get_template_part( 'sidebar-templates/sidebar', 'new' );?>
				</div>

				<div class="get-products popular">
					<?php get_template_part( 'sidebar-templates/sidebar', 'popular' );?>
				</div>

				
			</div>


</div><!-- #single-wrapper -->

<?php get_footer(); ?>
