<?php
/* enqueue parent and child theme stylesheets */
function my_theme_enqueue_styles() {

    $parent_style = 'chosen-style';

    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'chosen-child-style',
        get_stylesheet_directory_uri() . '/style.css',
        array( $parent_style ),
        wp_get_theme()->get('Version')
    );
}
add_action( 'wp_enqueue_scripts', 'my_theme_enqueue_styles' );
?>
<?php
  /* larger content width for tiled galleries */
  if ( ! isset( $content_width ) ) {
      $content_width = 1024;
  }
?>
<?php
/**
 * Register our sidebars and widgetized areas.
 *
 */
function arphabet_widgets_init() {
	register_sidebar( array(
		'name'          => 'Footer widget',
		'id'            => 'footer_widget',
		'before_widget' => '<div>',
		'after_widget'  => '</div>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'arphabet_widgets_init' );
?>