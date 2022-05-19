<?php

/*

  Template Name: Full Width

 */

?>



<?php get_header(); ?>



<div id="content" class="site-content">



    <?php

    $page_title = get_post_meta($post->ID, "page_title", true);    

    $allowed_html_array = park_allowed_html();



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

    if (have_posts()) :

        while (have_posts()) : the_post();

            ?>

            <div id="post-<?php the_ID(); ?>" <?php post_class('page-content-wrapper center-relative'); ?> >                

                <div class="page-content">

                    <?php the_content(); ?>

                    <div class="clear"></div>

                </div>

            </div>                

            <?php

            comments_template();

        endwhile;

    endif;

    ?>    



</div>



<?php get_footer(); ?>