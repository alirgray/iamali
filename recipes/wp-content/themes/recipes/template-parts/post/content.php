<?php

/**

 * Template part for displaying posts

 *

 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/

 *

 * @package WordPress

 * @subpackage Twenty_Seventeen

 * @since Twenty Seventeen 1.0

 * @version 1.2

 */



?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php

	if ( is_sticky() && is_home() ) :
		echo twentyseventeen_get_svg( array( 'icon' => 'thumb-tack' ) );
	endif;

	?>

		<?php

		if ( is_single() ) {
			the_title( '<h1 class="entry-title">', '</h1>' );
		} elseif ( is_front_page() && is_home() ) {
			
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			?>
			<div class="featured-image-home"><?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?></div>
			<p class="description"><?php the_field("description"); ?> <br>
			<span class="category"><?php the_category(); ?></span></p>
			<?php

		} else {
			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			
			?>
			<div class="featured-image-home"><?php echo get_the_post_thumbnail( get_the_ID(), 'thumbnail' ); ?></div>
			<p class="description"><?php the_field("description"); ?> <br>
			<span class="category"><?php the_category(); ?></span></p>
			<?php

		}

		?>


	<div class="entry-content">

		<?php

		the_content(

			sprintf(

				/* translators: %s: Post title. */

				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'twentyseventeen' ),

				get_the_title()

			)

		);



		wp_link_pages(

			array(

				'before'      => '<div class="page-links">' . __( 'Pages:', 'twentyseventeen' ),

				'after'       => '</div>',

				'link_before' => '<span class="page-number">',

				'link_after'  => '</span>',

			)

		);

		?>

	</div><!-- .entry-content -->



	<?php

	if ( is_single() ) {

		twentyseventeen_entry_footer();

	}

	?>



</article><!-- #post-<?php the_ID(); ?> -->

