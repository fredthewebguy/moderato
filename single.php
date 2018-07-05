<?php
/*
Template Name: Single Blog Post
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
					&nbsp;&nbsp;&middot;&nbsp;&nbsp;
					<i class="icon-tag" aria-hidden="true"></i><?php $categories = get_the_category(); if ( ! empty( $categories ) ) {
    echo '<a href="' . esc_url( get_category_link( $categories[0]->term_id ) ) . '">' . esc_html( $categories[0]->name ) . '</a>'; } ?>
					&nbsp;&nbsp;&middot;&nbsp;&nbsp;
					<i class="icon-chat" aria-hidden="true"></i><a href="<?php comments_link(); ?>"><?php comments_number('0 comments', '1 Comment', '% Comments' );?></a>
				</div><!-- # post date -->

				<!-- begin post thumbnail -->
				<figure class="featured-image">
					<?php the_post_thumbnail(); ?>
				</figure><!-- # post thumbnail -->

				<?php the_content(); ?>

			</article><!-- # post content -->

			<!-- begin post categories -->
			<section class="post-cats">
				<i class="icon-tags" aria-hidden="true"></i>
				<ul>
					<li><?php the_category(' ') ?></li>
				</ul>
			</section><!-- # post categories -->

			<?php get_template_part( 'inc-sharing' ); ?>

			<?php get_template_part( 'inc-more-posts' ); ?>

			<?php endwhile; ?>
			<?php endif; ?>

			<!-- begin post comments -->
			<section class="post-comments">
				<h2>Comments</h2>
				<?php comments_template(); ?>
			</section><!-- # post comments -->

		</main><!-- # main content area -->

		<?php get_footer(); ?>