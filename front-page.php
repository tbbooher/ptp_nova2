<?php
/**
 * @package WordPress
 * @subpackage Lysander
 * @since HTML5 Reset 2.0
 */
 get_header(); ?>
            <!-- slideshow -->
            <section class="featured">
				<div class="flexslider">
					  <ul class="slides">
					    <li>
					      <img src="<?php bloginfo('template_url'); ?>/images/slide1.jpg" />
					    </li>
					    <li>
					      <img src="<?php bloginfo('template_url'); ?>/images/slide2.jpg" />
					    </li>
					    <li>
					      <img src="<?php bloginfo('template_url'); ?>/images/slide4.jpg" />
					    </li>
					  </ul>
				</div>	
			</section>

			<!-- buckets section -->
			<section class="buckets m-full d-full">
				<div class="describe_row">
					<div class="m-full left">
					    <div class="message">
							<h3><strong>We</strong> love kids</h3>
							<p>We focus totally on kids. With over 15
						   	years of experience treating clients.
							</p>						   
						   <div class="bottom">
							   <a class="button" href="/about/">LEARN MORE</a>
						   </div>
						</div>
					</div>
					<div class="m-full middle">
					    <div class="message">
							<h3><strong>We</strong> come to you</h3>
							<p>Because there’s no better learning
							   environment than your own home. 
							</p>
						   	<div class="bottom">
							   	<a class="button" href="/services/">LEARN MORE</a>
						   	</div>
						</div>
					</div>
					<div class="m-full right">
					  	<div class="message">
							<h3><strong>We</strong> make kids stronger</h3>
							<p>Our experience and methods help to keep
							   your kids healthy and strong. 					   
							</p>
						   	<div class="bottom">
							   	<a class="button" href="/testimonials/">LEARN MORE</a>
						   	</div>
						</div>
					</div>
				</div>
				<div class="describe_row">
					<div class="m-full left">
					    <div class="pic">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/kids.jpg">
								<figcaption><a href="/about/">See our experience »</a></figcaption>
							</figure>
						</div>
					</div>
					
					<div class="m-full middle">
					    <div class="pic">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/house.jpg">
								<figcaption><a href="/about/">Area of coverage »</a></figcaption>
							</figure>
						</div>
					</div>
					
					<div class="m-full right">
					    <div class="pic">
							<figure>
								<img src="<?php bloginfo('template_url'); ?>/images/boy.jpg">
								<figcaption><a href="/services/">Our services »</a></figcaption>
							</figure>
						</div>
					</div>
				</div>
			</section>
			
<?php get_footer(); ?>