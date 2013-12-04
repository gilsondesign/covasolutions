<?php get_header(); ?>

	<?php if (have_posts()) : ?>

		<h2><?php _e('Search Results','covasolutions'); ?></h2>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

		<?php while (have_posts()) : the_post(); ?>

			<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

				<h2><?php the_title(); ?></h2>

				<?php include (TEMPLATEPATH . '/_/inc/meta.php' ); ?>

				<div class="entry">

					<?php the_excerpt(); ?>

				</div>

			</article>

		<?php endwhile; ?>

		<?php include (TEMPLATEPATH . '/_/inc/nav.php' ); ?>

	<?php else : ?>

		<h2><?php _e('No Posts Found','covasolutions'); ?></h2>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>