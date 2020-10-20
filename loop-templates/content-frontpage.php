<?php
/**
 * Frontpage content partial template.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="inner">

		<div class="entry-content">

			<?php the_content(); ?>

			<?php
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . __( 'Pages:', 'understrap' ),
					'after'  => '</div>',
				)
			);
			?>

		</div>

		<footer class="entry-footer">

			<?php edit_post_link( __( 'Edit', 'understrap' ), '<span class="edit-link">', '</span>' ); ?>

		</footer>

	</div>

</article>