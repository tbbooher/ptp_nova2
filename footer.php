	<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ptp_NoVa
 */
?>
	        </section><!-- content -->
	        <footer>
				<div id="top_row">
				  <div class="left">
				    <a href="/" class="f-logo"></a>
				    <p class="well with_border">Partnering with Parents to Build Strong Infants and Children</p>
				  </div>
				  <div class="middle off-top">
				    <div class="social">
						<em class="ribbon">We're social!</em>
					</div>
					<div id="socials">
						<a class="social-network twitter" href="https://twitter.com/ptpnova"></a>
						<a class="social-network facebook" href="https://www.facebook.com/PediatricTherapyPartnersOfNova"></a>
						<a class="social-network linkedin" href="http://www.linkedin.com/pub/chrissy-booher/3/658/aba"></a>
						<a class="social-network google" href="https://plus.google.com/b/108311981073389198133/"></a>
					</div>
				  </div>
				  <div class="right off-top">
					<div class="newsletter">
						<em class="ribbon">BLOG POSTS</em>
							<ul class="well with_border">
								<?php
								$args = array( 'numberposts' => '5', 'post_status' => 'publish' );
								$recent_posts = wp_get_recent_posts( $args  );
								foreach( $recent_posts as $recent ){
									echo '<li><a href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].'</a> </li> ';
								}
								?>
							</ul>
					</div>
				  </div>
				</div>
				<div id="bottom_row">
				    <div class="inner_wrapper">
				    	<div class="col1">
				    	    <i class="glyphicon glyphicon-copyright-mark"></i>				    	
				    		<span class="text">2013 PTP Nova</span>
				    	</div>
				    	<div class="col2">
				    	    <i class="glyphicon glyphicon-envelope"></i>
				    		<span class="text">chrissy@ptpnova.com</span>
				    	</div>
				    	<div class="col3">
				    	    <i class="glyphicon glyphicon-earphone"></i>				    	
				    		<span class="text">571-212-6145</span>
				    	</div>
				    	<div class="col4">
				    	    <i class="glyphicon glyphicon-print"></i>				    	
				    		<span class="text">888-750-4126</span>
				    	</div>
				    </div>									
				</div>
			
			</footer>
        </div><!--/wrapper-->

        <?php wp_footer(); ?>
        
        <script>
        	var navigation = responsiveNav(".nav-collapse", {
		        animate: true,        // Boolean: Use CSS3 transitions, true or false
		        transition: 250,      // Integer: Speed of the transition, in milliseconds
		        label: "Menu",        // String: Label for the navigation toggle
		        insert: "after",      // String: Insert the toggle before or after the navigation
		        customToggle: "",     // Selector: Specify the ID of a custom toggle
		        openPos: "relative",  // String: Position of the opened nav, relative or static
		        jsClass: "js",        // String: 'JS enabled' class which is added to <html> el
		        init: function(){},   // Function: Init callback
		        open: function(){},   // Function: Open callback
		        close: function(){}   // Function: Close callback
           });
        </script>  
    </body>
   
</html>