<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'global-templates/hero-search' ); ?>
<div class="wrapper" id="archive-wrapper">
	

				<?php if ( have_posts() ) : ?>

					<header class="page-header">
					<!-- <p>archive-products.php</p> -->
						<?php
						//the_archive_title( '<h4 class="page-title">', '</h4>' );
						//the_archive_description( '<div class="taxonomy-description">', '</div>' );
						
						?>
					</header><!-- .page-header -->

					

						<?php 
						get_template_part( 'loop-templates/content', 'page-products-old' );
						 ?>

				<?php else : ?>

					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

			

			<!-- The pagination component -->
			<?php //understrap_pagination(); ?>


	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
