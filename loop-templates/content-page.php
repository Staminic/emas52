<?php
/**
 * Partial template for content in page.php
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;
?>

<article <?php post_class(); ?> id="post-<?php the_ID(); ?>">

	<?php get_template_part( 'sidebar-templates/sidebar', 'hero-widget' ); ?>

	<?php echo get_the_post_thumbnail( $post->ID, 'full' ); ?>

	<div class="inner col-lg-10 offset-lg-1">

		<?php get_template_part( 'sidebar-templates/sidebar', 'entry-above' ); ?>

		<header class="entry-header">

			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>

		</header>

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