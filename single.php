<?php
/**
 * The Template for displaying all single posts.
 *
 * @package ptp_NoVa
 */

get_header(); ?>

	<div id="primary_blog" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php include 'blog_header_content.php'; ?>

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'content', 'single' ); ?>

			<?php ptp_nova_content_nav( 'nav-below' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() )
					comments_template();
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>