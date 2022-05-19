<?php global $post; ?>

<?php $portfolio_content = ''; ?>



<?php while (have_posts()) : the_post(); ?>



    <?php



    $allowed_html_array = cocobasic_allowed_plugin_html();

    $portfolio_content .= '<div class="grid-item">';

    $portfolio_content .= '<div class="item-wrapper animate">';

    if (has_post_thumbnail($post->ID)) {

        $portfolio_content .= '<div class="portfolio-thumbnail"><a href="' . get_the_permalink($post->ID) . '">' . get_the_post_thumbnail() . '</a></div>';

    }

    $portfolio_content .= '<div class="entry-holder">';

    $portfolio_content .= '<h2 class="entry-title"><a href="' . get_the_permalink($post->ID) . '">' . get_the_title() . '</a></h2>';

    $portfolio_content .= '</div></div></div>';

endwhile;

?>



<?php echo wp_kses($portfolio_content, $allowed_html_array); ?>