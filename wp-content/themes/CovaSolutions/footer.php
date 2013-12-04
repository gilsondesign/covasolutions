        
        <footer id="footer">
        	<div class="container_12">
            	<div class="grid_12">
            		<h2><?php _e('Contact CovaSolutions','covasolutions'); ?></h2>
                </div>
            </div>
        	<div class="container_12">
            	<div class="grid_4">
                    <h4><?php _e('Main Office','covasolutions'); ?></h4>
                    <div id="address">
                        <p><?php _e('501 Cambria Ave. Suite 107','covasolutions'); ?></p>
                        <p><?php _e('Bensalem, PA 19020','covasolutions'); ?></p>
                        <p><a href="<?php bloginfo('url'); ?>/contact-us/"><?php _e('Map this location','covasolutions'); ?></a></p>
				</div>
                    <div id="contactInfo">
                        <p><?php _e('Phone: (+1) 215 253 3747','covasolutions'); ?></p>
                        <p><?php _e('Fax: (+1) 215.689.4295','covasolutions'); ?></p>
                        <p><?php _e('Email: ','covasolutions'); ?><a href="mailo:info@covasolutions.com">info@covasolutions.com</a></p>
                    </div>
                    
                    
					
					<img style="margin-top:25px;" src="<?php bloginfo('template_directory'); ?>/img/w-expertos_120x120.png" alt="Sello de calidad digital del Consejo Internacional de Expertos de Womenalia" />
					
					<div id="copyright">&copy;<?php echo date("Y"); echo " "; bloginfo('name'); ?></div>

                </div>
                <div class="grid_4">
                    <h4><?php _e('Follow CovaSolutions','covasolutions'); ?></h4>
                    <div id="socialMedia">
                        <div class="socialMediaIcon">
                            <a href="https://www.facebook.com/pages/Cova-Solutions/179147342118591"><img src="<?php bloginfo('template_directory'); ?>/img/facebook.png" alt="Visit us on Facebook" /></a>
                        </div>
                        <div class="socialMediaIcon">
                            <a href="https://twitter.com/CovaSolutions"><img src="<?php bloginfo('template_directory'); ?>/img/twitter.png" alt="Follow us on Twitter" /></a>
                        </div>
                        <div class="socialMediaIcon">
                            <a href="https://plus.google.com/u/0/111222398466218161276/about"><img src="<?php bloginfo('template_directory'); ?>/img/googleplus.png" alt="Visit us on Google+" /></a>
                        </div>
                        <div class="socialMediaIcon">
                            <a href="http://www.linkedin.com/profile/view?id=8175052&trk=nav_responsive_tab_profile"><img src="<?php bloginfo('template_directory'); ?>/img/linkedin.png" alt="Visit us on LinkedIN" /></a>
                        </div>
                    </div>
                </div>
                <div class="grid_4">
                    <h4><?php _e('Send Us a Message','covasolutions'); ?></h4>
                    <?php if(qtrans_getLanguage() == "en") : ?>
                        <?php echo do_shortcode( '[contact-form-7 id="114" title="Footer Contact Form"]' ); ?>
                    <?php endif ?>
                    <?php if(qtrans_getLanguage() == "es") : ?>
                        <?php echo do_shortcode( '[contact-form-7 id="115" title="Footer Contact Form Spanish"]' ); ?>
                    <?php endif ?>
                </div>
			
            </div>
		</footer>

	</div>
	<?php wp_footer(); ?>


<!-- here comes the javascript -->

<!-- jQuery is called via the Wordpress-friendly way via functions.php -->

<!-- this is where we put our custom functions -->
<script src="<?php bloginfo('template_directory'); ?>/_/js/functions.js"></script>

<!-- Asynchronous google analytics; this is the official snippet.
	 Replace UA-XXXXXX-XX with your site's ID and uncomment to enable.
	 
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-XXXXXX-XX']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
-->

<!-- Google Analytics tracking - there is better way to do this for PHP implementation -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-20690871-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
	
	
</body>

</html>
