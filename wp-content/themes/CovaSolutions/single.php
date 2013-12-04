<?php get_header(); ?>

<div class="contentBackground">
	<div class="container_12 news-single-page">
		<div class="grid_7">
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
					<h1 class="entry-title"><?php the_title(); ?></h1>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php wp_link_pages(array('before' => 'Pages: ', 'next_or_number' => 'number')); ?>
					</div>
				</article>
			<?php endwhile; endif; ?>
		</div>
		<div class="grid_1">&nbsp</div>
		<div class="grid_4">
			<?php query_posts('showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>
    
                <ul class="home-latestpost">
					<li>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
							<div class="home-news-thumb"><?php the_post_thumbnail(); ?></div>
							<div class="home-news-content">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
								<span class="home-news-excerpt"><?php the_excerpt(); ?></span>
							</div>
						</article>
					</li>
                </ul>
            <?php endwhile;?>
            <a href="<?php bloginfo('url'); ?>/news/">view all news</a>
		</div>
	</div>
</div>

<?php get_footer(); ?>