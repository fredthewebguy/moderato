<?php
/*
Template Name: Songbook Archive Template
*/
?>

<?php get_header(); ?>

		<!-- begin main content area -->
		<main role="main" class="archive-page">

			<h1>Songbook</h1>

			<p>These are some of the folk/roots songs I've written over the years. Audio or video is included where available.</p>

			<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>

			<!-- begin post snippet -->
			<article class="snippet">
				<!-- begin post thumbnail -->
				<figure class="featured-image">
					<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
				</figure><!-- # post thumbnail -->
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<!-- begin post date -->
				<div class="post-date">
					<i class="icon-calendar" aria-hidden="true"></i><?php the_time('F') ?> <?php the_time('jS') ?>, <?php the_time('Y') ?>
				</div><!-- # post date -->
				<p><?php echo get_the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>" class="more-link">Full article</a></p>
			</article><!-- # post snippet -->

			<?php endwhile; ?>

			<?php get_template_part( 'inc-paginate' ); ?>

			<?php endif; ?>	

		</main><!-- # main content area -->

		<?php get_footer(); ?>