<div class="container-location">
	
	
	<!-- start wp_query to get contact page -->
	<?php 
// the query
$the_query = new WP_Query( array(
	'pagename' => 'kontakt',
	'post_type' => 'page'
	
	) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- the loop -->
	<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<div class="address">
			<h4><?php the_title(); ?></h4>
			<p><?php the_content(); ?></p>
			<button><p>Kontakta oss</p></button>
		</div>
		
		<div class="contact-imgage">
			<?php the_post_thumbnail('large');?>
		</div>

		
			
    <?php endwhile; ?>
    <!-- end of the loop -->

 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- end wp_query -->


</div>