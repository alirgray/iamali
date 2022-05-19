<?php

global $post;

?>

<?php while (have_posts()) : the_post(); ?>    



    <article id="post-<?php the_ID(); ?>" <?php post_class('animate relative blog-item-holder center-relative'); ?> >

        <?php if (has_post_thumbnail($post->ID)) : ?>                    

            <div class="post-thumbnail">

                <a href="<?php the_permalink($post->ID); ?>"><?php echo get_the_post_thumbnail(); ?></a>

            </div>                            

        <?php endif; ?>



        <div class="entry-holder">

            <div class="entry-info">                  

                <div class="cat-links">

                    <ul>

                        <?php

                        foreach ((get_the_category()) as $category) {

                            echo '<li><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></li>';

                        }

                        ?>

                    </ul>

                </div>                                                                

            </div>

            <h2 class="entry-title"><a href="<?php the_permalink($post->ID); ?>"><?php the_title(); ?></a></h2> 

            <div class="excerpt"><?php the_excerpt(); ?></div>

            <p class="read-more-arrow"><a href="<?php the_permalink($post->ID); ?>"><span class="fa fa-arrow-right" aria-hidden="true"></span></a></p>

        </div>



        <div class="clear"></div>

    </article>   



<?php endwhile; ?>