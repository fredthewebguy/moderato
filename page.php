<?php
/*
Template Name: Regular Page Template
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

				<?php the_content(); ?>

			</article><!-- # post content -->

			<br>
			
			<?php get_template_part( 'inc-sharing' ); ?>

			<?php get_template_part( 'inc-recent-posts' ); ?>

			<?php endwhile; ?>
			<?php endif; ?>

		</main><!-- # main content area -->

		<?php get_footer(); ?>