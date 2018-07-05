<!-- begin more posts -->
<aside class="more-posts">
	<h2>Recent articles</h2>
	
	<?php
		query_posts('posts_per_page=3');
		if ( have_posts() ) : while ( have_posts() ) : the_post();
	?>	
	
		<div>
			<figure>
				<a href="<?php the_permalink() ?>"><?php the_post_thumbnail(); ?></a>
			</figure>
			<h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
		</div>

	<?php endwhile; endif; ?>
	<?php wp_reset_query(); ?>

</aside><!-- # more posts -->