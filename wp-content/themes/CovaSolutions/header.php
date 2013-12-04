<!DOCTYPE html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" <?php language_attributes(); ?>><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset-wordpress-theme" profile="http://gmpg.org/xfn/11">

	<meta charset="<?php bloginfo('charset'); ?>">
	
	<!-- Always force latest IE rendering engine (even in intranet) & Chrome Frame -->
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	
	<?php if (is_search()) { ?>
	<meta name="robots" content="noindex, nofollow" /> 
	<?php } ?>

	<title>
		   <?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>
	</title>
	
	<meta name="title" content="<?php
		      if (function_exists('is_tag') && is_tag()) {
		         single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
		      elseif (is_archive()) {
		         wp_title(''); echo ' Archive - '; }
		      elseif (is_search()) {
		         echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
		      elseif (!(is_404()) && (is_single()) || (is_page())) {
		         wp_title(''); echo ' - '; }
		      elseif (is_404()) {
		         echo 'Not Found - '; }
		      if (is_home()) {
		         bloginfo('name'); echo ' - '; bloginfo('description'); }
		      else {
		          bloginfo('name'); }
		      if ($paged>1) {
		         echo ' - page '. $paged; }
		   ?>">
	<meta name="description" content="<?php bloginfo('description'); ?>">
	
	<meta name="google-site-verification" content="">
	<!-- Speaking of Google, don't forget to set your site up: http://google.com/webmasters -->
	
	<meta name="author" content="Gilson Design">
	<meta name="Copyright" content="Copyright Gilson Design 2013. All Rights Reserved.">

	<!-- Dublin Core Metadata : http://dublincore.org/ -->
	<meta name="DC.title" content="Project Name">
	<meta name="DC.subject" content="What you're about.">
	<meta name="DC.creator" content="Who made this site.">
	
	<!--  Mobile Viewport meta tag
	j.mp/mobileviewport & davidbcalhoun.com/2010/viewport-metatag 
	device-width : Occupy full width of the screen in its current orientation
	initial-scale = 1.0 retains dimensions instead of zooming out if page height > device height
	maximum-scale = 1.0 retains dimensions instead of zooming in if page width < device width -->
	<!-- Uncomment to use; use thoughtfully!
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	-->
	
	<link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/favicon.ico">
	<!-- This is the traditional favicon.
		 - size: 16x16 or 32x32
		 - transparency is OK
		 - see wikipedia for info on browser support: http://mky.be/favicon/ -->
		 
	<link rel="apple-touch-icon" href="<?php bloginfo('template_directory'); ?>/_/img/apple-touch-icon.png">
	<!-- The is the icon for iOS's Web Clip.
		 - size: 57x57 for older iPhones, 72x72 for iPads, 114x114 for iPhone4's retina display (IMHO, just go ahead and use the biggest one)
		 - To prevent iOS from applying its styles to the icon name it thusly: apple-touch-icon-precomposed.png
		 - Transparency is not recommended (iOS will put a black BG behind the icon) -->
	
	<!-- CSS: screen, mobile & print are all in the same file -->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/CSS/ie.css">
    <![endif]-->
    
    
    
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/CSS/960.css">
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="shortcut icon" href="img/favicon.ico">
    <!-- TAKE THIS OUT LATER DONT FORGET!-->
    <link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/CSS/demo.css">

    <!-- all our JS is at the bottom of the page, except for Modernizr. -->
    
    <script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js'></script>
    <script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.easing.1.3.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/_/js/modernizr-1.7.min.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/_/js/jquery.flexslider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/_/js/custom.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/_/js/buttons-inputs.js"></script>
    
    <!-- Twitter feed -->
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>

    <!-- Google font -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

    <?php if ( is_singular() ) wp_enqueue_script( 'comment-reply' ); ?>

    <?php wp_head(); ?>

</head>

<body <?php body_class('loading'); ?>>

    <div id="page-wrap"><!-- not needed? up to you: http://camendesign.com/code/developpeurs_sans_frontieres -->

        <header id="header">
            <div class="container_12">
                <div id="logo" class="grid_5">
                    <a href="<?php echo get_option('home'); ?>/">
                    <img src="<?php bloginfo('template_directory'); ?>/img/CovaSolutions_Logo.png" alt="<?php bloginfo('name'); ?>" />
                    </a>
                 </div>
                 <div id="menuWrapper" class="grid_7">   
                    <div id="languageSwitcher">
                        <div class="viewIn"><?php _e('View site in:','covasolutions'); ?></div>
                        <?php get_sidebar(); ?>
                    </div>
                    <nav>
                        <ul>
                            <li><a href="<?php bloginfo('url'); ?>/Company/"><?php _e('COMPANY','covasolutions'); ?></a></li>
                            
                            <li>
                                <a href="<?php bloginfo('url'); ?>/Services/" class="toplevel-dropdown"><?php _e('SERVICES','covasolutions'); ?></a>
                                <ul>
                                	<div class="arrow-up"></div>
                                    <li>	
                                        <a href="<?php bloginfo('url'); ?>/cross-market-consulting/">
                                                    <strong><?php _e('Cross Market Consulting','covasolutions'); ?></strong>
                                                    <p><?php _e('We assist our clients during pivotal MBO times before and upon arrival to Spain or the United States.','covasolutions'); ?></p>
                                        </a>
                                    </li>
                                    <hr />
                                    <li>
                                        <a href="<?php bloginfo('url'); ?>/language-services/">
                                            <strong><?php _e('Language Services','covasolutions'); ?></strong>
                                            <p><?php _e('Offering new and smarter solutions for internationalization of the US and Spanish company moving from one market to the other.','covasolutions'); ?></p>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="<?php bloginfo('url'); ?>/news/"><?php _e('NEWS','covasolutions'); ?></a></li>
                            <li><a href="<?php bloginfo('url'); ?>/contact-us/"><?php _e('CONTACT US','covasolutions'); ?></a></li>
                        </ul>
                    </nav>
                </div>
             </div>
		</header>

        
        <!-- TAKE THIS OUT LATER DONT FORGET!-->
        <!--<div style="width:960px; margin-left:auto;margin-right:auto;background:red;"><p style="padding:20px;">I'm 960px for real, use me for testing</p></div>-->
        

