<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<!-- Get hero template -->
	<?php get_template_part( 'global-templates/hero' ); ?>

	<section class="hero-image">
		<div class="page-title">
			<h4><?php _e('Welcome to Thai market in Eslöv', 'understrap'); ?></h4>
		</div> <!-- .page-title-->
			<h5><?php _e('What are you looking for?', 'understrap'); ?></h5>
			<!-- Search form -->
			<?php get_search_form(); ?>						
	</section> <!-- .hero-image -->

	<main class="site-main" id="main">

	<!-- show front page -->
		<?php get_template_part( 'loop-templates/content', 'front-page' );?>

		<?php else : ?>

		<?php get_template_part( 'loop-templates/content', 'none' ); ?>

		<?php endif; ?>

	</main><!-- #main -->



<?php get_footer(); ?>
