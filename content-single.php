<?php
/**
 * @package ptp_NoVa
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header d-all m-all t-all">
		<h1 class="entry-title d2-d11"><?php the_title(); ?></h1>

		<div class="entry-meta d2-d11">
			<?php ptp_nova_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<section class="entry-content d-all m-all t-all d-padinfull">
		<?php the_content(); ?>
		<?php
		  wp_link_pages( array(
			'before' => '<div class="page-links">' . __( 'Pages:', 'ptp_nova' ),
			'after'  => '</div>',
			) );
		?>
	</section><!-- .entry-content -->

	<footer class="entry-meta d-all m-all d-padinfull">
		<?php
			/* translators: used between list items, there is a space after the comma */
			$category_list = get_the_category_list( __( ', ', 'ptp_nova' ) );

			/* translators: used between list items, there is a space after the comma */
			$tag_list = get_the_tag_list( '', __( ', ', 'ptp_nova' ) );

			if ( ! ptp_nova_categorized_blog() ) {
				// This blog only has 1 category so we just need to worry about tags in the meta text
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ptp_nova' );
				} else {
					$meta_text = __( 'Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ptp_nova' );
				}

			} else {
				// But this blog has loads of categories so we should probably display them here
				if ( '' != $tag_list ) {
					$meta_text = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ptp_nova' );
				} else {
					$meta_text = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" rel="bookmark">permalink</a>.', 'ptp_nova' );
				}

			} // end check for categories on this blog

			printf(
				$meta_text,
				$category_list,
				$tag_list,
				get_permalink()
			);
		?>

		<?php edit_post_link( __( 'Edit', 'ptp_nova' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-## -->
