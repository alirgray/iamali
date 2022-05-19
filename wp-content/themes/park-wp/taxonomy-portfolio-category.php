<?php

get_header();

$queried_object = get_queried_object();

?>	

<div id="content" class="site-content">

    <div class="header-content content-1170 center-relative block taxonomy-title">

        <h1 class="entry-title"><span class="underline"><?php echo esc_html($queried_object->name); ?></span></h1>

    </div>



    <?php

    if (function_exists('cocobasic_get_cat')):

        require get_parent_theme_file_path('templates/portfolio-filter.php');

    endif;

    echo '<div id="portfolio" class="grid">';

    echo '<div class = "grid-sizer"></div>';





    $portfolio_content = '';

    $allowed_html_array = cocobasic_allowed_plugin_html();



    while (have_posts()) : the_post();



        $portfolio_content .= '<div class="grid-item">';

        $portfolio_content .= '<div class="item-wrapper animate">';

        if (has_post_thumbnail($post->ID)) {

            $portfolio_content .= '<div class="portfolio-thumbnail"><a href="' . get_the_permalink($post->ID) . '">' . get_the_post_thumbnail() . '</a></div>';

        }

        $portfolio_content .= '<div class="entry-holder">';

        $portfolio_content .= '<h2 class="entry-title"><a href="' . get_the_permalink($post->ID) . '">' . get_the_title() . '</a></h2>';

        $portfolio_content .= '</div></div></div>';



    endwhile;



    echo wp_kses($portfolio_content, $allowed_html_array);



    echo '</div>';



    echo '<div class="pagination-holder">';

    the_posts_pagination();

    echo '</div>';

    ?>

</div>

<?php get_footer(); ?>