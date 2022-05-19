<!DOCTYPE html>



<html <?php language_attributes(); ?>>



<head>

<link rel="apple-touch-icon" sizes="57x57" href="https://www.iamalidesign.com/explore/wp-content/uploads/2017/03/apple-icon-57x57.png" />

<link rel="apple-touch-icon" sizes="72x72" href="https://www.iamalidesign.com/explore/wp-content/uploads/2017/03/apple-icon-72x72.png" />

<link rel="apple-touch-icon" sizes="114x114" href="https://www.iamalidesign.com/explore/wp-content/uploads/2017/03/apple-icon-114x114.png" />

<link rel="apple-touch-icon" sizes="144x144" href="https://www.iamalidesign.com/explore/wp-content/uploads/2017/03/apple-icon-144x144.png" />

	<?php wp_head(); ?>

</head>



<body id="<?php print get_stylesheet(); ?>" <?php body_class(); ?>>

	<?php do_action( 'body_top' ); ?>

	<a class="skip-content" href="#main"><?php _e( 'Skip to content', 'chosen' ); ?></a>

	<div id="overflow-container" class="overflow-container">

		<div id="max-width" class="max-width">

			<?php do_action( 'before_header' ); ?>

			<header class="site-header" id="site-header" role="banner">

				<div id="menu-primary-container" class="menu-primary-container">

					<?php get_template_part( 'menu', 'primary' ); ?>

					<?php get_template_part( 'content/search-bar' ); ?>

					<?php ct_chosen_social_icons_output(); ?>

				</div>

				<button id="toggle-navigation" class="toggle-navigation" name="toggle-navigation" aria-expanded="false">

					<span class="screen-reader-text"><?php _ex( 'open menu', 'verb: open the menu', 'chosen' ); ?></span>

					<?php echo ct_chosen_svg_output( 'toggle-navigation' ); ?>

				</button>

				<div id="title-container" class="title-container">

					<?php get_template_part( 'logo' ) ?>

				</div>

			</header>

			<?php do_action( 'after_header' ); ?>

			<section id="main" class="main" role="main">

				<?php do_action( 'main_top' );

				if ( function_exists( 'yoast_breadcrumb' ) ) {

					yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );

				}

