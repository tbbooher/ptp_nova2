<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package ptp_NoVa
 */
?>
	        <section class="footer m-all d-all">
				<a href="/"><div class="f-logo d2-d4"></div></a>
				
				<div class="m-all">
					<p>We're social!</p>
				</div>
				
				<div class="m-all">
					<p>Newsletter</p>
					
					<p>
					Subscribe to our monthly newsletter and be the first
					to know about our news and special deals!
					</p>
					<form action="" class="d7-d11">
						<input type="text" name="email" class="email" placeholder="enter email">
					</form>
				</div>
			
			</section>
        </div><!--/wrapper-->
        
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.10.2.min.js"><\/script>')</script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>
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