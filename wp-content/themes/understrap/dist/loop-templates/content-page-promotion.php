
<div class="container-promotion">

	<div class="promotion-title">
		
			<h4>Nyheter</h4>
	
	
	<!-- start wp_query to get posts in promotion category -->
	<?php 
// the query
$the_query = new WP_Query( array(
	'category_name' => 'nyheter',
	'post_type' => 'post'
	
	) ); ?>
 
<?php if ( $the_query->have_posts() ) : ?>
 
    <!-- the loop -->
    <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
		<h5><?php the_title(); ?></h5>
		<p><?php the_content(); ?></p>
    <?php endwhile; ?>
    <!-- end of the loop -->

 
<?php else : ?>
    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>
<!-- end wp_query -->

</div>


</div>