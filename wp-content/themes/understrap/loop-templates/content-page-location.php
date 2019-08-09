<!-- Template display address in front page  -->
<div class="container-location">
	<!-- start wp_query to get contact page -->
	<?php 
		// the query
		$the_query = new WP_Query( array(
			'pagename' => 'contact',
			'post_type' => 'page'
	) ); ?>
 	<?php if ( $the_query->have_posts() ) : ?>
    	<!-- the loop -->
		<?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
			<div class="address">
				<h5><?php the_title(); ?></h5>
				<p><?php the_content(); ?></p>
				<div class="contact-us">
					<a href="<?php echo get_permalink( 66 ); ?>"><button><?php _e( 'Kontakta oss' ); ?></button></a>
				</div>
			
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