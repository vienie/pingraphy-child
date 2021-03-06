<?php
/**
 * Template part for displaying single posts.
 *
 * @package Pingraphy
 */

$position = array(); //TODO: remove code

?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>		
	</header><!-- .entry-header -->

	<?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail">
				<?php the_post_thumbnail('pingraphy-single-thumbnail'); ?>
			</div>
	<?php endif; ?>
	<div class="content-wrap">
		<div class="entry-meta">
			<?php pingraphy_header_posted_on(); ?> <?php if (function_exists("DISPLAY_ACURAX_ICONS")) { DISPLAY_ACURAX_ICONS(); } ?>
		</div><!-- .entry-meta -->

		<div class="entry-content">
			<?php the_content(); ?>
			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'pingraphy' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
	</div>
	<footer class="entry-footer clearfix">
		<?php the_tags( '<ul><li>', '</li><li>', '</li></ul>' ); ?>
		<?php pingraphy_footer_post_meta(); ?>
		<?php edit_post_link('<i class="fa fa-pencil-square-o"></i>', '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->