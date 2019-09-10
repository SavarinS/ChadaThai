<?php
/**
 * The template for displaying products category in custome taxonomy.
 * Display products in each taxonomy.
 * The template gets archive content.
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
			<!-- <p>taxonomy.php</p> -->
			<?php
				the_archive_title( '<h5 class="page-title">', '</h5>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
			?>
					</header><!-- .page-header -->
					<div class="entry-taxonomy">
						<?php /* Start the Loop */ ?>
						<?php while ( have_posts() ) : the_post(); ?>

							<?php

							/*
							* Include the Post-Format-specific template for the content.
							* If you want to override this in a child theme, then include a file
							* called content-___.php (where ___ is the Post Format name) and that will be used instead.
							*/
							get_template_part( 'loop-templates/content', 'archive-products' );
							?>

						<?php endwhile; ?>

						<?php else : ?>

							<?php get_template_part( 'loop-templates/content', 'none' ); ?>

						<?php endif; ?>
					</div>

			</main><!-- #main -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>


	</div><!-- #archive-wrapper -->

<?php get_footer(); ?>
