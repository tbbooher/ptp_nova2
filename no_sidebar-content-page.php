<?php
/*
 Template Name: Content Page
 * The template for displaying pages with content only. (no sidebar)
 *
 * @package ptp_NoVa
 */

get_header(); ?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'content', 'page' ); ?>

				<?php
					// If comments are open or we have at least one comment, load up the comment template
					if ( comments_open() || '0' != get_comments_number() )
						comments_template();
				?>

			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
