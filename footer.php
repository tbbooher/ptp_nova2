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
				    <p>Partnering with parents to build strong infants and children</p>
				  </div>
				  <div class="middle off-top">
				    <div class="social">
						<em class="ribbon">We're social!</em>
					</div>
					<div id="socials">
						<a class="social-network twitter"></a>
						<a class="social-network facebook" href="https://www.facebook.com/PediatricTherapyPartnersOfNova"></a>
						<a class="social-network linkedin" href="http://www.linkedin.com/pub/chrissy-booher/3/658/aba"></a>
					</div>
				  </div>
				  <div class="right off-top">
					<div class="newsletter">
						<em class="ribbon">Blog</em>						
						<p>
							Read our latest posts on strong children, love and peace.
						</p>
						<p>
							Display latest blog posts.
						</p>
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


    </body>
    <?php wp_footer(); ?>
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
    <script type="text/javascript">
    	(function() {
    		var config = {
    			kitId: 'wut2wet',
    			scriptTimeout: 3000
    		};
    		var h=document.getElementsByTagName("html")[0];h.className+=" wf-loading";var t=setTimeout(function(){h.className=h.className.replace(/(\s|^)wf-loading(\s|$)/g," ");h.className+=" wf-inactive"},config.scriptTimeout);var tk=document.createElement("script"),d=false;tk.src='//use.typekit.net/'+config.kitId+'.js';tk.type="text/javascript";tk.async="true";tk.onload=tk.onreadystatechange=function(){var a=this.readyState;if(d||a&&a!="complete"&&a!="loaded")return;d=true;clearTimeout(t);try{Typekit.load(config)}catch(b){}};var s=document.getElementsByTagName("script")[0];s.parentNode.insertBefore(tk,s)
    	})();
    </script>        
</html>