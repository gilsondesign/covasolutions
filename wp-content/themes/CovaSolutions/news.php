<?php
/*
Template Name: News
*/
?>

<?php get_header(); ?>
	
<div class="contentBackground">
   <div class="container_12">
        <div class="grid_12">
            <h1><?php _e('CovaSolutions News','covasolutions'); ?></h1>
        </div>
		<div class="grid_12">
			<?php query_posts('showposts=25'); ?>
			<?php while (have_posts()) : the_post(); ?>

			<ul class="news-post-roll">
				<li>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
						<?php the_post_thumbnail('post-thumbnail', array('class' => 'news-thumb')); ?>
						<div class="news-content">
							<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
							<span class="news-excerpt"><?php the_excerpt(); ?></span>
						</div>
					</article>
				</li>
			</ul>
			<?php endwhile;?>
		
		</div>
	</div>
        
</div>
<?php get_footer(); ?>
