<?php
/*
Template Name: Single Songbook Post
*/
?>

<?php get_header(); ?>

		<!-- begin main content area -->
		<main role="main">

			<!-- begin post content -->
			<article>

				<?php remove_filter ('the_content', 'wpautop'); ?>
	
				<?php if (have_posts()) : ?>
			
				<?php while (have_posts()) : the_post(); ?>

				<h1><?php the_title(); ?></h1>

				<!-- begin post date -->
				<div class="post-date">
					<i class="icon-calendar" aria-hidden="true"></i><?php the_time('l') ?>, <?php the_time('F') ?> <?php the_time('jS') ?>, <?php the_time('Y') ?>
				</div><!-- # post date -->

				<!-- begin post thumbnail -->
				<figure class="featured-image">
					<?php the_post_thumbnail(); ?>
				</figure><!-- # post thumbnail -->

				<?php the_content(); ?>

			</article><!-- # post content -->

			<?php get_template_part( 'inc-sharing' ); ?>

			<?php get_template_part( 'inc-recent-posts' ); ?>

			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- # main content area -->

		<?php get_footer(); ?>