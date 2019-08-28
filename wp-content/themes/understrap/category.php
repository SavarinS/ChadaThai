<?php
/**
 * The template for displaying the author pages.
 *
 * Learn more: https://codex.wordpress.org/Author_Templates
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>
<?php get_template_part( 'global-templates/hero-inspiration' ); ?>

<div class="wrapper cooking" id="category-wrapper">


				

					<?php get_template_part( 'loop-templates/content', 'page-cooking' ); ?>

				

			

</div><!-- #page-wrapper -->

<?php get_footer(); ?>