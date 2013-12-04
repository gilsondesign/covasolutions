<?php
/*
Template Name: Cross Market Consulting
*/
?>

<?php get_header(); ?>
	
<div class="contentBackground services-wrapper">
    	
        <div class="container_12">
        	<div class="grid_7">
            	<h1><?php _e('Moving Business Operations (MBO) Services','covasolutions'); ?></h1>
                <p><?php _e('Your investment in the US is more reliable and easy to control thanks to our 11 month method, a business development program divided into 4 phases. Each phase is designed based on our accumulated experience and will ensure the optimal utilization of your company resources. Our goal is to bring you to a point where you and your team will be capable of making an educated decision regarding your investment and your opportunities in the US market. This is possible after 11 months of monitored business development work in the selected US area. ','covasolutions'); ?></p>
				<a href="#spain-us"><?php _e('Moving Business Operations SPAIN-USA Workshop','covasolutions'); ?></a><br/>
                <a href="#us-spain"><?php _e('Moving Business Operations Spain-USA Method','covasolutions'); ?></a>

                <a href="mailto:info@covasolutions.com" class="request-button btn-primary btn btn-large"><?php _e('Request an in-company Workshop','covasolutions'); ?></a>
                <a href="mailto:info@covasolutions.com" class="request-button btn-primary btn btn-large"><?php _e('Request an in-company Assessment','covasolutions'); ?></a>
             </div> 
             <img class="grid_5 page-title-image" src="<?php bloginfo('template_directory'); ?>/img/mbo01-title-img.png" alt="Covasolution consulting firm" />
       		

        	<div class="grid_12">  
   				<h3 id="spain-us"><?php _e('Moving Business Operations Workshop','covasolutions'); ?></h3>
                <h4><?php _e('What is the MBO workshop about?','covasolutions'); ?></h4>
                <p><?php _e('Moving Business Operations is an 8 hour interactive workshop* for managers involved or looking to be involved in an international business expansion.','covasolutions'); ?>
                <?php _e('MBO workshops are geared to finding business opportunities and/or partners for companies from in both sides of the Atlantic.','covasolutions'); ?></p>
                <h4><?php _e('The main objectives of our MBO workshops and and business virtual meetings can be divided in three:','covasolutions'); ?></h4>
					<ul>
						<li><?php _e('To create a meeting point for our sponsors and collaborators to present their companies and services to companies interested in doing business abroad, particularly in the US market.','covasolutions'); ?></li>
						<li><?php _e('To give attendees the opportunity to network and find partners and business opportunities as well as trusted service providers.','covasolutions'); ?></li>
						<li><?php _e('To give attendees the opportunity to ask direct questions to the MBO speakers who are specialist in judicial, financing and business cultural practices between the two countries.','covasolutions'); ?></li>
					</ul>
                <h4><?php _e('Why is MBO beneficial to your organization?','covasolutions'); ?></h4> 
                <p><?php _e('This series of workshops aim to increase the competitiveness of Spanish companies operating or looking to operate in the US market. ','covasolutions'); ?>
                <?php _e('By participating in the MBO workshop as an attendee, you will have the opportunity to meet some of the most reliable professionals in the Spain-US business development arena. Interested in becoming a sponsor? By participating in the MBO as a collaborator, sponsor or speaker your organization will have the opportunity to: ','covasolutions'); ?></p>
					<ul>
						<li><?php _e('Address workshop attendees on a one on one basis through a short presentation ','covasolutions'); ?></li>
						<li><?php _e('Increase your client portfolio with companies that are really commited to perform in the US market','covasolutions'); ?></li>
						<li><?php _e('Network and gain significant exposure in the US >< Spain corporate community ','covasolutions'); ?></li>
					</ul>
                <h4><?php _e('What is the intended life cycle of the MBO workshop series?','covasolutions'); ?></h4>
                <p><?php _e('The MBO workshop series is created to become a recognized periodical educational training session offered through the US-Spain chambers of Commerce and any other interested private entities.','covasolutions'); ?>
                <?php _e('The workshop is normally offered in Spain and is divided in two modules (morning and afternoon) Workshop hours are from 10 am to 8 pm Spanish time.','covasolutions'); ?>
                <?php _e('The morning module will cover typical MBO topics of interest to Spanish Executives and the afternoon module contemplates a virtual meeting (3.5 hour session) between companies of both sides of the Atlantic. The companies are expected to introduce themselves and discuss interesting topics with the help of two moderators.','covasolutions'); ?></p>
                <h4><?php _e('Sample Sectorail MBO Agenda','covasolutions'); ?></h4>
					<ul>
						<li><?php _e('A new energetic model for the US ','covasolutions'); ?></li>
						<li><?php _e('Energy Efficiency in the private sector ','covasolutions'); ?></li>
						<li><?php _e('Business Opportunities Spain-Texas ','covasolutions'); ?></li>
					</ul>
                <h4><?php _e('A simple MBO Agenda from past editions includes:','covasolutions'); ?></h4>
					<ul>
						<li><?php _e('10:00 AM - Opening','covasolutions'); ?></li>
						<li><?php _e('10:15 AM - US Market Remarks & Human Capital Management Spain-US','covasolutions'); ?></li>
						<li><?php _e('10:35 AM - Legal Barriers Spain-US','covasolutions'); ?></li>
						<li><?php _e('11:05 AM - Business Opportunities Spain-US','covasolutions'); ?></li>
						<li><?php _e('12:05 AM - The Need for Financial Services in the US','covasolutions'); ?></li>
						<li><?php _e('13:25 AM - Entering the US Market','covasolutions'); ?></li>
						<li><?php _e('16:00 PM - Virtual Business Meeting Introductions','covasolutions'); ?></li>
						<li><?php _e('17:45 PM - Virtual Business Meeting and RoundTable Spain-US','covasolutions'); ?></li>
					</ul>
                <a href="mailto:info@covasolutions.com" class="btn-primary btn btn-large"><?php _e('Request an in-company Workshop','covasolutions'); ?></a>
                
                <h3 id="us-spain"><?php _e('The MBO (Moving Business Operations) Method','covasolutions'); ?></h3>

                <p><?php _e('Your investment in the US is more reliable and easy to control thanks to our 11month method, a business development program divided by phases*. Each phase is designed based on our accumulated experience and will ensure the optimal utilization of your company resources.','covasolutions'); ?></p>
                
                <p><i><?php _e('NOTE: Please note that phase 3 and 4 must be contracted together.','covasolutions'); ?></i></p>
                
                <p><?php _e('Our goal is to bring you to a point where you and your team will be capable of making an educated decision regarding your investment and your opportunities in the foreign market. This is possible after 11 months of monitored business development work in the selected area.','covasolutions'); ?></p>

                <?php   $template_directory = get_template_directory_uri();
                        if (qtrans_getLanguage() == 'en') {
                            echo '<img class="mbo-image" src="'. $template_directory . '/img/mbo-process.png" alt="The MBO Method Phases" />';
                        } elseif (qtrans_getLanguage() == 'es') {
                            echo '<img class="mbo-image" src="'. $template_directory . '/img/mbo-process_es.png" alt="The MBO Method Phases" />';
                        }
                ?>

                <div class="mbo-text-wrap">
                    <h4><?php _e('Initial Project Assessment','covasolutions'); ?></h4>
                    <ul>
                        <li><?php _e('Study of Business Plan','covasolutions'); ?></li>
                        <li><?php _e('Opportunity analysis','covasolutions'); ?></li>
                        <li><?php _e('Election of target State (s) / region','covasolutions'); ?></li>
                        <li><?php _e('1st team meeting','covasolutions'); ?></li>
                        <li><?php _e('Review US Marketing Plan','covasolutions'); ?></li>
                        <li><?php _e('Needs Assessment','covasolutions'); ?></li>
                        <li><?php _e('Introduction to the suggested MBO Team','covasolutions'); ?></li>
                        <li><?php _e('Conclusion proposal','covasolutions'); ?></li>
                    </ul>
                    <h4><?php _e('Business Prospecting','covasolutions'); ?></h4>
                    <ul>
                        <li><?php _e('Preparation Tasks','covasolutions'); ?></li>
                        <li><?php _e('Changes to Business Plan','covasolutions'); ?></li>
                        <li><?php _e('Business Plan Adaptation/Localization','covasolutions'); ?></li>
                        <li><?php _e('Translation of documents (as needed)','covasolutions'); ?></li>
                        <li><?php _e('Cultural Training','covasolutions'); ?></li>
                        <li><?php _e('Business Training ','covasolutions'); ?></li>
                        <li><?php _e('SPAIN-US Strategy Definition','covasolutions'); ?></li>
                        <li><?php _e('Identification of Key Members','covasolutions'); ?></li>
                        <li><?php _e('Logistic Planning ','covasolutions'); ?></li>
                        <li><?php _e('Sample Shipping (if needed)','covasolutions'); ?></li>
                        <li><?php _e('Choosing travel dates','covasolutions'); ?></li>
                        <li><?php _e('Objectives Short / Medium / Long term','covasolutions'); ?></li>
                    </ul>
                    <h4><?php _e('MBO Process','covasolutions'); ?> </h4>
                    <ul>
                        <li><?php _e('Business Development Trip 1','covasolutions'); ?></li>
                        <li><?php _e('Meet Prospect Buyers','covasolutions'); ?></li>
                        <li><?php _e('Meet Potential Local Partners','covasolutions'); ?></li>
                        <li><?php _e('Meet Collaborators','covasolutions'); ?></li>
                        <li><?php _e('Meet Vendors','covasolutions'); ?></li>
                        <li><?php _e('Meet Politicians ','covasolutions'); ?></li>
                        <li><?php _e('Team Test','covasolutions'); ?></li>
                        <li><?php _e('Market Test','covasolutions'); ?></li>
                        <li><?php _e('Trip Follow Up','covasolutions'); ?></li>
                        <li><?php _e('Change Implementation','covasolutions'); ?></li>
                        <li><?php _e('Business Development Trip 2','covasolutions'); ?></li>
                        <li><?php _e('Presentation of Adapted Product / Service','covasolutions'); ?></li>
                        <li><?php _e('Reach Agreements','covasolutions'); ?></li>
                        <li><?php _e('Hire a Rep (if needed)','covasolutions'); ?></li>
                        <li><?php _e('Final Follow Up','covasolutions'); ?></li>
                     </ul>
                    <h4><?php _e('Program Wrap Up','covasolutions'); ?></h4>
                    <ul>
                        <li><?php _e('Results Analysis & Planning ','covasolutions'); ?></li>
                        <li><?php _e('Wrap Up Meeting','covasolutions'); ?></li>
                         <li><?php _e('Request an in-company Assessment','covasolutions'); ?></li>
                    </ul>
                </div>

                <a href="mailto:info@covasolutions.com" class="btn-primary btn btn-large"><?php _e('Request an in-company Assessment','covasolutions'); ?></a>

                </div>
        </div>
	</div>    

        

<?php get_footer(); ?>
