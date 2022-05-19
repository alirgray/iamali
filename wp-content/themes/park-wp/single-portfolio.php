<?php get_header(); ?>



<div id="content" class="site-content">

    <?php

    if (have_posts()) :

        while (have_posts()) : the_post();

            $allowed_html_array = cocobasic_allowed_plugin_html();

            $header_content = get_post_meta($post->ID, "portfolio_header_content", true);

            ?>		



            <div id="post-<?php the_ID(); ?>" <?php post_class('center-relative content-1170'); ?>>                                              

                <div class="entry-content"> 

                    <?php if ($header_content != ''): ?>

                        <div class="top-content">

                            <?php echo do_shortcode(wp_kses($header_content, $allowed_html_array)); ?>

                        </div>

                    <?php endif; ?>               

                    <div class="content-wrapper">                   

                        <?php the_content(); ?>      

                    </div>                                                        

                    <div class="clear"></div>

                </div>                

            </div>  

            <div class="nav-links">                

                <div class="content-570 center-relative">

                    <?php

                    $prev_post = get_previous_post();

                    if (is_a($prev_post, 'WP_Post')):

                        ?>

                        <div class="nav-previous">                                                                          

                            <?php previous_post_link('%link'); ?>

                            <div class="clear"></div>

                            <div class="cat-links">

                                <ul>

                                     <?php echo cocobasic_get_cat($prev_post->ID, 'list'); ?>

                                </ul>

                            </div> 

                        </div>

                    <?php endif; ?>

                    <?php

                    $next_post = get_next_post();

                    if (is_a($next_post, 'WP_Post')):

                        ?>                

                        <div class="nav-next">                                                  

                            <?php next_post_link('%link'); ?>                     

                            <div class="clear"></div>

                            <div class="cat-links">

                                <ul>

                                     <?php echo cocobasic_get_cat($next_post->ID, 'list'); ?>

                                </ul>

                            </div>                             

                        </div>

                    <?php endif; ?>

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