<!DOCTYPE html>

<html <?php language_attributes(); ?>>

    <head>        

        <meta charset="<?php bloginfo('charset'); ?>" />        

        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />  		

        <?php wp_head(); ?>

    </head>

    <body <?php body_class(); ?>>

        <div class="site-wrapper">             

            <div class="doc-loader"></div>       



            <div class="menu-wraper center-relative">                          

                <div class="menu-holder">

                    <?php

                    if (get_theme_mod('park_show_search') === 'yes') {

                        $menu_search = '<ul id="%1$s" class="%2$s">%3$s</ul>' . get_search_form(false);

                    } else {

                        $menu_search = '<ul id="%1$s" class="%2$s">%3$s</ul>';

                    }



                    if (has_nav_menu("custom_menu")) {

                        wp_nav_menu(

                                array(

                                    "container" => "nav",

                                    "container_class" => "big-menu",

                                    "container_id" => "header-main-menu",

                                    "fallback_cb" => false,                                    

                                    "menu_class" => "main-menu sm sm-clean",

                                    "theme_location" => "custom_menu",

                                    "items_wrap" => $menu_search,

                                    "walker" => new park_header_menu()

                                )

                        );

                    } else {

                        echo '<nav id="header-main-menu" class="big-menu default-menu"><ul>';

                        wp_list_pages(array("depth" => "3", 'title_li' => ''));

                        echo '</ul>';

                        if (get_theme_mod('park_show_search') === 'yes') {

                            get_search_form();

                        }

                        echo '</nav>';

                    }

                    ?>                       

                </div>

            </div>



            <div class="header-holder center-relative relative content-1170">

                <div class="header-logo">

                    <?php

                    if (esc_url(get_option('park_header_logo')) !== ''):

                        if ((is_page()) && (get_post_meta($post->ID, "page_show_title", true) == 'no')):

                            ?>

                            <h1 class="site-logo">

                                <a href="<?php echo esc_url(site_url('/')); ?>">

                                    <img src="<?php echo esc_url(get_option('park_header_logo', get_template_directory_uri() . '/images/logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />

                                </a>        

                            </h1>                                                                        

                        <?php else: ?>                    

                            <a href="<?php echo esc_url(site_url('/')); ?>">

                                <img src="<?php echo esc_url(get_option('park_header_logo', get_template_directory_uri() . '/images/logo.png')); ?>" alt="<?php echo esc_attr(get_bloginfo('name')); ?>" />

                            </a>               

                        <?php endif; ?>                   

                    <?php endif; ?>                   

                </div>



                <div class="toggle-holder">

                    <div id="toggle">

                        <div class="first-menu-line"></div>

                        <div class="second-menu-line"></div>

                        <div class="third-menu-line"></div>

                    </div>

                </div>

                <div class="clear"></div>	

            </div>                  