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
<div class="wrapper cooking" id="single-wrapper">

	
			<!-- Do the left sidebar check -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			

				<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'loop-templates/content', 'single-post' ); ?>

					<?php //understrap_post_nav(); ?>

					<?php
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
					?>

				<?php endwhile; // end of the loop. ?>

			

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

	
			</div><!-- #single-wrapper -->
	<div class="sub-main">
				<div class="get-products">
					<?php get_template_part( 'sidebar-templates/sidebar', 'new' );?>
				</div>

				<div class="get-products">
					<?php get_template_part( 'sidebar-templates/sidebar', 'popular' );?>
				</div>

				
			</div>



<?php get_footer(); ?>
