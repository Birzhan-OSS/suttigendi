<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package hometown
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'hometown' ); ?></a>

	<!--<div class="announcement-bar pt-2 pb-2">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-sm-12">
					<ul class="announcement-bar__list">
						<li>
							<a href="">123123</a>
						</li>
						<li>
							<a href="">123123</a>
						</li>
						<li>
							<a href="">123123</a>
						</li>
					</ul>
				</div>
				<div class="col-md-8 d-flex justify-content-end col-sm-12">
					<ul class="announcement-bar__list">
						<li>
							<a href="">123123</a>
						</li>
						<li>
							<a href="">123123</a>
						</li>
						<li>
							<a href="">123123</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>-->


	<header id="masthead" class="site-header">
		<div class="container pt-2 pb-2">
			<div class="row align-items-center">
				<div class="col site-header__logo d-flex justify-content-center justify-content-md-start pb-2">
				<?php the_custom_logo(); ?>
				</div>
				<div class="col-md-5 ">
					<!-- #site-navigation -->
						<nav id="site-navigation" class="main-navigation">

							<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php esc_html_e( 'Primary Menu', 'hometown' ); ?></button>
							<?php
							wp_nav_menu(
								array(
									'theme_location' => 'menu-1',
									'menu_id'        => 'primary-menu',
								)
							);
							?>
						</nav>
					<!-- #site-navigation -->
				</div>
				<div class="col d-flex justify-content-center justify-content-md-end align-items-center pt-2">
					card
				</div>
			</div>

		</div>

		
	</header><!-- #masthead -->