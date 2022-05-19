<?php

/*

  Template Name: Portfolio

 */

?>



<?php get_header(); ?>



<div id="content" class="site-content">



    <?php

    $page_title = get_post_meta($post->ID, "page_title", true);

    $header_image = get_post_meta($post->ID, "page_header_image", true);

    $allowed_html_array = cocobasic_allowed_plugin_html();



    if (get_post_meta($post->ID, "page_show_title", true) !== 'no') {

        echo '<div class="header-content content-1170 center-relative block">';

        if ($page_title != '') {

            if ($page_title != '') {

                echo ' <h1 class="entry-title">' . wp_kses($page_title, $allowed_html_array) . '</h1>';

            } else {

                the_title('<h1 class="entry-title">', '</h1>');

            }

        } else {

            the_title('<h1 class="entry-title">', '</h1>');

        }

        echo '</div>';

    }

    ?>



    <?php

    if (post_type_exists('portfolio')) {

        $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

        $posts_per_page = get_theme_mod('park_portfolio_num_items', get_option('posts_per_page'));

        query_posts('post_type=portfolio&posts_per_page=' . $posts_per_page . '&paged=' . $page);



        if (have_posts()) :

            if (function_exists('cocobasic_get_cat')):

                require get_parent_theme_file_path('templates/portfolio-filter.php');

            endif;

            echo '<div id = "portfolio" class = "grid">';

            echo '<div class = "grid-sizer"></div>';

            require get_parent_theme_file_path('templates/loop-portfolio.php');

            echo '</div><div class = "block center-relative center-text more-posts-portfolio-holder"><a target = "_self" class = "more-posts-portfolio">' . esc_html__('LOAD MORE', 'park-wp') . '</a><a class = "more-posts-portfolio-loading">' . esc_html__('LOADING', 'park-wp') . '</a><a class = "no-more-posts-portfolio">' . esc_html__('NO MORE', 'park-wp') . '</a></div>';

        endif;

    }

    else {

        if (have_posts()) :

            while (have_posts()) : the_post();

                ?>

                <div id="post-<?php the_ID(); ?>" <?php post_class('page-content-wrapper center-relative content-970'); ?> >                

                    <div class="page-content">

                        <?php the_content(); ?>

                    </div>

                </div>      

                <?php

            endwhile;

        endif;

    }

    ?>   



</div>



<?php get_footer(); ?>