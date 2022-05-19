<?php get_header(); ?>

<div id="content" class="site-content">

    <?php

    $allowed_html_array = park_allowed_html();

    if (get_theme_mod('blog_title') != ''):

        echo '<div class="header-content content-1170 center-relative block">';

        echo '<h1 class="entry-title">';

        echo wp_kses(__(get_theme_mod('blog_title') ? get_theme_mod('blog_title') : 'You can\'t wait for inspiration, <br> you have to go after it with a club.', 'park-wp'), $allowed_html_array);

        echo '</h1>';

        echo '</div>';

    endif;





    $page = (get_query_var('paged')) ? get_query_var('paged') : 1;

    query_posts('post_type=post&paged=' . $page);



    if (have_posts()) :

        echo '<div class="blog-holder block center-relative content-1170">';

        require get_parent_theme_file_path('templates/loop-index.php');

        echo '</div><div class="clear"></div><div class="block center-relative center-text more-posts-index-holder"><a target="_self" class="more-posts">' . esc_html__('LOAD MORE', 'park-wp') . '</a><a class="more-posts-loading">' . esc_html__('LOADING', 'park-wp') . '</a><a class="no-more-posts">' . esc_html__('NO MORE', 'park-wp') . '</a></div>';

    endif;

    echo '<div class="clear"></div>';

    ?>   

</div>



<?php get_footer(); ?>