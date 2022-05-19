<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Seventeen
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
    	<blockquote>"<?php the_field("text"); ?>" <cite>&mdash; <?php the_field("attribute");?> <em><?php the_field("origin");?></em></cite></blockquote>
			<p class="rating <?php the_field("rating");?>"></p>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
