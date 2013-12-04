<?php
/*
Template Name: Company
*/
?>

<?php get_header(); ?>

<div class="contentBackground company-wrapper">

    <div class="container_12">
        <div class="intro-wrap grid_7">
            <h1><?php _e('About CovaSolutions','covasolutions'); ?></h1>
            <ul>
            	<li><?php _e('Cova Solutions is a consulting firm providing assistance to Spanish companies moving their business operations abroad.','covasolutions'); ?></li>
            	<li><?php _e('Cova Solutions offers its clients alternative solutions for a rapid and cost-effective entry into the target market.','covasolutions'); ?></li>
            	<li><?php _e('CovaSolutions knowledgeable team will help you and your company develop and implement winning strategies in the global arena.','covasolutions'); ?> </li>
        	</ul>
            <h4><?php _e('Our Work','covasolutions'); ?></h4>
            <p><?php _e('Our work is based on the constant observation of real life corporate situations experienced by Spanish companies landing abroad. Replicate proven strategies and avoid major mistakes.','covasolutions'); ?>
            <?php _e('More than 8 years of observation led us to build the MBO Business Workshop and the MBO Business Development method. Our workshops trains business executives and expatriates on Spain-US business practices and our MBO Business Development program divided by phases ensures the most cost effective assistance during the internacionalization process.','covasolutions'); ?>
            <?php _e('One of our critical success factors in our work is the personal experience of our team, every team member has lived and worked in Spain and the US, has a powerful network in the two countries and has had to face different cultural values and business practices during their careers between the two countries. Our work is to inform, to train and  to connect the unconnected.','covasolutions'); ?></p>
			
			
        </div>
        
      
        <img class="grid_5 page-title-image" src="<?php bloginfo('template_directory'); ?>/img/company01-title-img.png" alt="Covasolution consulting firm" />
       

        <div class="our-work grid_12">
            </div>

        <div class="logo-container grid_12">
            <h3><?php _e('Some of our partners and clients include:','covasolutions'); ?></h3>
			 <img class="grid_5" src="<?php bloginfo('template_directory'); ?>/img/antalisis-logo.jpg" alt="" />
            <img class="grid_5" src="<?php bloginfo('template_directory'); ?>/img/cal-logo.jpg" alt="" />
		</div>
		<a class="grid_10"  href="<?php bloginfo('url'); ?>/partners/">see all of our partners</a>
    </div>

</div>

<?php get_footer(); ?>
