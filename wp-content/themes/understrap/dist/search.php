<?php
/**
 * The template for displaying search results pages.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();

$container = get_theme_mod( 'understrap_container_type' );

?>
<?php get_template_part( 'global-templates/hero-products' ); ?>
<div class="wrapper" id="search-wrapper">

	<!-- <div class=" -->
	<?php //echo esc_attr( $container ); ?>
	<!-- id="content" tabindex="-1"> -->

		<!-- <div class="row"> -->

			<!-- Do the left sidebar check and opens the primary div -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			

				<?php if ( is_search() && have_posts() ) : ?>

					<header class="page-header">

							<h4 class="page-title">
								<?php
								printf(
									/* translators: %s: query term */
									esc_html__( 'Sökresultat för: %s', 'understrap' ),
									'<span>' . get_search_query() . '</span>'
								);
								?>
							</h4>
							<?php
						global $wp_query;
						$total_results = $wp_query->found_posts;
						echo $total_results;?> träffar.

							

					</header><!-- .page-header -->
					<div class="articles">
					<?php /* Start the Loop */ ?>
					<?php while ( have_posts() ) : the_post(); ?>

						<?php
						/**
						 * Run the loop for the search to output the results.
						 * If you want to overload this in a child theme then include a file
						 * called content-search.php and that will be used instead.
						 */
						get_template_part( 'loop-templates/content', 'search' );
						?>

					<?php endwhile; ?>

				<?php else : ?>
				<header class="page-header">

						<h4 class="page-title">
							<?php
							printf(
								/* translators: %s: query term */
								esc_html__( 'Sökresultat för: %s', 'understrap' ),
								'<span>' . get_search_query() . '</span>'
							);
							?>
						</h4>


					</header><!-- .page-header -->
					<?php get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php endif; ?>

				</div>		
			<!-- #search -->

			<!-- The pagination component -->
			<?php understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>

		<!-- </div> -->
		<!-- .row -->

	<!-- </div> -->
	<!-- #content -->

</div><!-- #search-wrapper -->

<?php get_footer(); ?>
