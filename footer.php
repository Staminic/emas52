<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( (is_active_sidebar( 'footer_above_left' )) || (is_active_sidebar( 'footer_above_right' )) ) : ?>

	<div id="wrapper-footer-above">

		<div class="<?php echo esc_attr( $container ); ?>" id="footer-full-content" tabindex="-1">

			<div class="row">

				<?php get_template_part( 'sidebar-templates/sidebar', 'footer-above-left' ); ?>

				<?php get_template_part( 'sidebar-templates/sidebar', 'footer-above-right' ); ?>

			</div>

		</div>

	</div>

<?php endif ?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">
					
					<a class="my-3" href="/mentions-legales">Mentions légales</a>
					
					<div class="logos">

						<a href="https://www.occitanie.ars.sante.fr/" target="_blank" rel="noopener"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/ars-occitanie-logo.png" alt="Logo de l'ARS Occitanie" /></a>
					
						<a href="https://www.ameli.fr/pyrenees-orientales/" target="_blank" rel="noopener"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/assurance-maladie-logo.png" alt="Logo de l'Assurance maladie" /></a>
					
					</div>

				</footer>

			</div>

		</div>

	</div>

</div>

</div>

<?php wp_footer(); ?>

</body>

</html>

