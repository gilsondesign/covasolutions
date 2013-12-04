<?php
/*
Template Name: Home
*/
?>

<?php get_header(); ?>
    <div id="homepageHeader">
        <div class="flexslider">
            <ul class="slides">
                <li>
                    <div class="flex-caption">
                        <div class="left">
                            <h2 class="header"><?php _e('GROWTH STARTS TODAY','covasolutions'); ?> </h2>
                            <p class="subhead"><?php _e('The US is the perfect ground to monitor your company´s global expansion.','covasolutions'); ?></p>
                            <a class="btn-primary btn btn-large" href="covasolutions/cross-market-consulting/"><?php _e('learn more','covasolutions'); ?></a>
                        </div>
                    </div>
                    <img class="flag-image" src="<?php bloginfo('template_directory'); ?>/img/03.jpg" />
                </li>
				<li>
                    <div class="flex-caption">
                        <div class="left">
                            <h2 class="header"><?php _e('GET RESULTS','covasolutions'); ?></h2>
                            <p class="subhead"><?php _e('Gain access to our extensive US network of influential people and decision makers. Meeting people is important. Meeting the right people is the key.','covasolutions'); ?></p>
                            <a class="btn-primary btn btn-large" href="covasolutions/cross-market-consulting/"><?php _e('learn more','covasolutions'); ?></a>
                        </div>
                    </div>
                    <img class="plane-image" src="<?php bloginfo('template_directory'); ?>/img/01.jpg" />
                </li>
                <li>
                    <div class="flex-caption">
                        <div class="left">
                            <h2 class="header"><?php _e('CROSS MARKET KNOWLEDGE AT YOUR FINGERTIPS','covasolutions'); ?></h2>
                            <p class="subhead"><?php _e('CovaSolutions partners are a reference in the international expansion of the Spanish company, particularly in the Spain-US business arena.','covasolutions'); ?></p>
                            <a class="btn-primary btn btn-large" href="covasolutions/cross-market-consulting/"><?php _e('learn more','covasolutions'); ?></a>
                        </div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/02.jpg" />
                </li>
                <li>
                    <div class="flex-caption">
                        <div class="right">
                            <h2 class="header"><?php _e('MANAGE YOUR INVESTMENT','covasolutions'); ?></h2>
                            <p class="subhead"><?php _e('Our MBO business development method allows you to monitor your US investment thanks to a set amount of time and money.','covasolutions'); ?></p>
                            <a class="btn-primary btn btn-large" href="covasolutions/cross-market-consulting/"><?php _e('learn more','covasolutions'); ?></a>
                        </div>
                    </div>
                    <img class="liberty-image" src="<?php bloginfo('template_directory'); ?>/img/04.jpg" />
                </li>
                <li>
                    <div class="flex-caption">
                        <div class="right light">
                            <h2 class="header"><?php _e('MANAGE YOUR COSTS','covasolutions'); ?></h2>
                            <p class="subhead"><?php _e('Exploring your business opportunities in the US market has never been made this cost-effective.','covasolutions'); ?></p>
                            <a class="btn-primary btn btn-large" href="covasolutions/cross-market-consulting/"><?php _e('learn more','covasolutions'); ?></a>
                        </div>
                    </div>
                    <img src="<?php bloginfo('template_directory'); ?>/img/05.jpg" />
                </li>
            </ul>
        </div>
    </div>

<div class="contentBackground">
        <div class="container_12">
            <div class="grid_12">
                <h2><?php _e('Speaking the language of success','covasolutions'); ?></h2>
            </div>
			<div class="grid_4 home-profile">
				<h3><?php _e('Who we are','covasolutions'); ?></h3>
				<p><?php _e('CovaSolutions is dedicated to assisting companies and managers moving business operations abroad, particularly to the United States but also to other markets in Central and South America. We understand the difficulties that medium and small size companies might face during its landing period in foreign markets and we recognize the unique opportunity to assist Spanish companies therein. We believe that we can take your companies to markets that are currently is in its growing stage and that we are uniquely positioned to assist you in several pivotal areas such as brand-recognition, marketing, monitoring and promotional activities. Our experienced team strive to provide your company with the cultural proficiency and competitive marketing edge required to excel in your new environment.', 'covasolutions'); ?></p>
				<a href="<?php bloginfo('url'); ?>/Company"><?php _e('learn more','covasolutions'); ?></a>
			</div>
			<div class="grid_4">
				<h3><?php _e('Latest News','covasolutions'); ?></h3>
					<?php query_posts('showposts=3'); ?>
                <?php while (have_posts()) : the_post(); ?>
    
                <ul class="home-latestpost">
					<li>
						<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
							<?php the_post_thumbnail('post-thumbnail', array('class' => 'home-news-thumb')); ?>
							<div class="home-news-content">
								<a href="<?php the_permalink() ?>" title="<?php the_title(); ?>" rel="bookmark"><?php the_title(); ?></a>
								<span class="home-news-excerpt"><?php the_excerpt(); ?></span>
							</div>
						</article>
					</li>
                </ul>
                <?php endwhile;?>
                <a href="<?php bloginfo('url'); ?>/news/"><?php _e('view all news','covasolutions'); ?></a>
            
			</div>
			<div class="grid_4 home-tweets">
				<h3><?php _e('Latest Tweets','covasolutions'); ?></h3>
				<a class="twitter-timeline" data-dnt="true" href="https://twitter.com/CovaSolutions" data-widget-id="351769872151236608" data-link-color="#217bc0" data-show-replies="false" data-chrome="nofooter transparent noheader noborders" data-tweet-limit="2" data-screen-name="covasolutions"><?php _e('Tweets from @CovaSolutions', 'covasolutions'); ?></a>
                <a href="https://twitter.com/CovaSolutions"><?php _e('view all tweets from @CovaSolutions', 'covasolutions'); ?></a>
			</div>
		</div>
    </div>
</div>     
        

<?php get_footer(); ?>

