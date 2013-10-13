<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ptp_NoVa
 */
?>
	        <footer>
				<div id="top_row">
				  <div class="left">
				    <a href="/" class="f-logo"></a>

				  </div>
				  <div class="middle">
				    <div class="social">
						<p>We're social!</p>
					</div>
				  </div>
				  <div class="right">
					<div class="newsletter">
						<p>Newsletter</p>
						
						<p>
						Subscribe to our monthly newsletter and be the first
						to know about our news and special deals!
						</p>
						<form action="" class="form">
							<input type="text" name="email" class="email" placeholder="enter email">
						</form>
					</div>
				  </div>
				</div>
				<div id="bottom_row">
					<div class="col1">
						2013 PTP Nova
					</div>
					<div class="col2">
						chrissy@ptpnova.com
					</div>
					<div class="col3">
					    571-212-6145
					</div>
					<div class="col4">
					   888-750-4126
					</div>															
				</div>
			
			</footer>
        </div><!--/wrapper-->

        <script src="https://get.gridsetapp.com/23622/overlay/"></script>
        
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
    <?php wp_footer(); ?>    
</html>