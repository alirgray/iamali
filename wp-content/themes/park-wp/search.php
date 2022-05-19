<?php get_header(); ?>	

<div id="content" class="site-content">

    <div class="header-content content-1170 center-relative block search-title">

        <h1 class="entry-title"><span class="underline"><?php echo get_search_query(); ?></span></h1>

    </div>



    <div class="results-holder block center-relative content-1170">          

        <?php

        if (have_posts()) :

            while (have_posts()) : the_post();

                ?>



                <article id="post-<?php the_ID(); ?>" <?php post_class('relative blog-item-holder center-relative'); ?> >

                    <h2 class="entry-title"><a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a></h2> 

                </article>   



                <?php

            endwhile;

            echo '<div class="pagination-holder">';

            the_posts_pagination();

            echo '</div>';

        else:

            echo '<h2>' . esc_html__("No results", 'park-wp') . '</h2>';

        endif;

        ?>



    </div>

</div>





<?php get_footer(); ?>