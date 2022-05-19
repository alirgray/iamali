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
		
		$fieldID = get_field_object("rating");


		if ( is_single() ) {

			the_title( '<h1 class="entry-title">', '</h1>' );

		} elseif ( is_front_page() && is_home() ) {

			/*the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );*/
			?>
			<blockquote>"<?php the_field("text"); ?>" <cite>&mdash; <?php the_field("attribute");?> <em><?php the_field("origin");?></em></cite></blockquote>
			<p class="rating <?php the_field("rating");?>"></p><!--<?php the_category(); ?>-->
			<?php

		} else {

			?>
			<blockquote>"<?php the_field("text"); ?>" <cite>&mdash; <?php the_field("attribute");?> <em><?php the_field("origin");?></em></cite></blockquote>
			<p class="rating <?php the_field("rating");?>"></p><!--<?php the_category(); ?>-->
			<?php

		}

		?>



	<?php if ( '' !== get_the_post_thumbnail() && ! is_single() ) : ?>

		<div class="post-thumbnail">

			<a href="<?php the_permalink(); ?>">

				<?php the_post_thumbnail( 'twentyseventeen-featured-image' ); ?>

			</a>

		</div><!-- .post-thumbnail -->

	<?php endif; ?>



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

