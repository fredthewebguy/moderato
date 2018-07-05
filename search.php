<?php
/*
Template Name: Search Template
*/
?>

<?php get_header(); ?>

		<!-- begin main content area -->
		<main role="main" class="search-page">

			<h1>Search results</h1>

			<p class="keyword-used">You searched for <strong><?php echo get_search_query(); ?></strong>. Here's what's available...</p>

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
					&nbsp;&nbsp;&middot;&nbsp;&nbsp;
					<i class="icon-tag" aria-hidden="true"></i><?php $categories = get_the_category(); if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; } ?>
					&nbsp;&nbsp;&middot;&nbsp;&nbsp;
					<i class="icon-chat" aria-hidden="true"></i><a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 Comment', '% Comments' );?></a>
				</div><!-- # post date -->
				<p><?php echo get_the_excerpt(); ?></p>
				<p><a href="<?php the_permalink(); ?>" class="more-link">Full article</a></p>
			</article><!-- # post snippet -->

			<?php endwhile; ?>

			<?php get_template_part( 'inc-paginate' ); ?>

			<?php endif; ?>	

		</main><!-- # main content area -->

		<?php get_footer(); ?>