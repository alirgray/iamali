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
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="featured-image"><?php echo get_the_post_thumbnail(); ?></div>
			<ul class="times">
				<?php if( get_field('prep_time') ): ?>
    			<li><strong>Prep time:</strong> <?php the_field('prep_time'); ?></li>
				<?php endif; ?>
				<?php if( get_field('cook_time') ): ?>
    			<li><strong>Cook time:</strong> <?php the_field('cook_time'); ?></li>
				<?php endif; ?>
				<?php if( get_field('total_time') ): ?>
    			<li><strong>Total time:</strong> <?php the_field('total_time'); ?></li>
				<?php endif; ?>
			</ul>
			<p class="servings"><strong>Servings:</strong> <?php the_field("servings"); ?></p>
			<p><?php the_field("description"); ?></p>
			<h2>Ingredients</h2>
			<?php the_field("ingredients"); ?>
			<h2>Instructions</h2>
			<?php the_field("instructions"); ?>
			<?php if( get_field('notes') ): ?>
				<h2>Notes</h2>
				<?php the_field("notes"); ?>
			<?php endif; ?>
			<?php if( get_field('nutrition') ): ?>
				<h2>Nutrition information</h2>
				<?php the_field("nutrition"); ?>
			<?php endif; ?>
			<h2>Details</h2>
			<?php 
				$link = get_field('source');
				if( $link ): 
    		$link_url = $link['url'];
    		$link_title = $link['title'];
    		$link_target = $link['target'] ? $link['target'] : '_self';
    	?>
    	<p class="less-space"><strong>Source:</strong> <a href="<?php echo esc_url( $link_url ); ?>" target="<?php echo esc_attr( $link_target ); ?>"><?php echo esc_html( $link_title ); ?></a></p>
			<?php endif; ?>
			<p class="less-space categories"><strong>Categories:</strong></p>
			<?php the_category(); ?>
			<p class="edit"><?php edit_post_link(__('edit')); ?></p>
		</main><!-- #main -->
	</div><!-- #primary -->
	<?php //get_sidebar(); ?>
</div><!-- .wrap -->

<?php
get_footer();
