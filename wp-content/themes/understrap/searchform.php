<?php
/**
 * The template for displaying search forms
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<form method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" role="search">
	<label class="sr-only" for="s"><?php esc_html_e( 'Search', 'understrap' ); ?></label>
	<div class="input-group">
		<input class="field form-control" id="s" name="s" type="text"
			placeholder="<?php esc_attr_e( 'Search products or menu &hellip;', 'understrap' ); ?>" value="<?php the_search_query(); ?>">
			
		<span class="input-group-append">
		<button class="btn btn-light" type="submit" name="submit" value="<?php esc_attr_e( 'Search', 'understrap' ); ?>"><i class="fa fa-search"></i></button>

		</span>
	</div>
	
</form>
