<?php



$allowed_html_array = park_allowed_html();

$portfolio_link = '#';

if (get_theme_mod('park_portfolio_link') != ''):

    $portfolio_link = get_theme_mod('park_portfolio_link');

else:

    if (function_exists('cocobasic_get_portfolio_id')):

        if (cocobasic_get_portfolio_id() != ''):

            $portfolio_link = get_page_link(cocobasic_get_portfolio_id());

        endif;

    endif;

endif;

echo wp_kses('<p class="portfolio-category content-1170 center-relative"><a href="' . $portfolio_link . '">' . esc_html__('All', 'park-wp') . '</a>' . cocobasic_get_cat('all', 'links') . '</p>', $allowed_html_array);

?>