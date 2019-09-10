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
<?php get_template_part( 'global-templates/hero-search' ); ?>
<div class="inspiration-page-tittle">
<h5 class="text-center"><?php _e('Do you want to cook thai food today?', 'understrap'); ?></h5>
</div>

<div class="wrapper cooking" id="category-wrapper">


				

					<?php get_template_part( 'loop-templates/content', 'page-cooking' ); ?>

				

			

</div><!-- #page-wrapper -->
<footer class="entry-footer">

<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

</footer><!-- .entry-footer -->

<?php get_footer(); ?>