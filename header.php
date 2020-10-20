<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php do_action( 'wp_body_open' ); ?>
<div class="site" id="page">

	<header id="header" itemscope itemtype="http://schema.org/WebSite">
		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e( 'Skip to content', 'understrap' ); ?></a>

		<?php get_template_part( 'sidebar-templates/sidebar', 'ocs_btn' ); ?>

		<?php get_template_part( 'sidebar-templates/sidebar', 'header-above' ); ?>

		<div class="brand">
			<?php if ( 'container' == $container ) : ?>
				<div class="container">
			<?php endif; ?>

			<a rel="home" href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" itemprop="url">
				<img class="brand-img img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/alefpa-logo.svg" style="width: 220px; height: 76px;"/>

				<div class="brand-name-description">
					<?php if ( is_front_page() /*&& is_home()*/ ) : ?>

						<h1 class="site-name"><?php bloginfo( 'name' ); ?></h1>

					<?php else : ?>

						<p class="site-name h1"><?php bloginfo( 'name' ); ?></p>

					<?php endif; ?>
					
					<p class="site-description"><?php bloginfo('description'); ?>
				</div>
			</a>

			<?php if ( 'container' == $container ) : ?>
				</div>
			<?php endif; ?>
		</div>

		<nav class="navbar navbar-expand-lg">

			<?php if ( 'container' == $container ) : ?>
				<div class="container">
			<?php endif; ?>

				<?php wp_nav_menu(
					array(
						'theme_location'  => 'primary',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'navbarNavDropdown',
						'menu_class'      => 'navbar-nav',
						'fallback_cb'     => '',
						'menu_id'         => 'main-menu',
						'depth'           => 2,
						'walker'          => new Understrap_WP_Bootstrap_Navwalker(),
					)
				); ?>

			<?php if ( 'container' == $container ) : ?>
			</div>
			<?php endif; ?>

		</nav>
	</header>
