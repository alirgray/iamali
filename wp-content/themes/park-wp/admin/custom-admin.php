<?php

/*

 * Register Theme Customizer

 */

add_action('customize_register', 'park_theme_customize_register');



function park_theme_customize_register($wp_customize) {



    function park_clean_html($value) {

        $allowed_html_array = park_allowed_html();

        $value = wp_kses($value, $allowed_html_array);

        return $value;

    }



    class ParkWP_Customize_Textarea_Control extends WP_Customize_Control {



        public $type = 'textarea';



        public function render_content() {

            ?>

            <label>

                <span class="customize-control-title"><?php echo esc_html($this->label); ?></span>

                <textarea rows="10" style="width:100%;" <?php $this->link(); ?>><?php echo esc_textarea($this->value()); ?></textarea>

            </label>

            <?php

        }



    }



    //------------------------- SEARCH SECTION ---------------------------------------------



    $wp_customize->add_section('park_search_content', array(

        'title' => esc_html__('Search Settings', 'park-wp'),

        'priority' => 30

    ));



    $wp_customize->add_setting('park_show_search', array(

        'default' => 'no',

        'sanitize_callback' => 'park_clean_html'

    ));



    $wp_customize->add_control('park_show_search', array(

        'label' => esc_html__('Show Search in Menu', 'park-wp'),

        'section' => 'park_search_content',

        'settings' => 'park_show_search',

        'type' => 'radio',

        'choices' => array(

            'yes' => esc_html__('Yes', 'park-wp'),

            'no' => esc_html__('No', 'park-wp'),

    )));









    //------------------------- END SEARCH SECTION ---------------------------------------------

    //

    //

    //

    //----------------------------- HOME (BLOG) SECTION  ---------------------------------------------



    $wp_customize->add_section('park_home_section', array(

        'title' => esc_html__('Home (Blog) Settings', 'park-wp'),

        'priority' => 32

    ));



    $wp_customize->add_setting('blog_title', array(

        'default' => '',

        'sanitize_callback' => 'park_clean_html'

    ));



    $wp_customize->add_control(new ParkWP_Customize_Textarea_Control($wp_customize, 'blog_title', array(

        'label' => esc_html__('Home (Blog) Header Text:', 'park-wp'),

        'section' => 'park_home_section',

        'settings' => 'blog_title',

        'priority' => 999

    )));



    $wp_customize->add_setting('park_posts_margin', array(

        'default' => "100px",

        'sanitize_callback' => 'park_clean_html'

    ));



    $wp_customize->add_control('park_posts_margin', array(

        'label' => esc_html__('Space between Posts:', 'park-wp'),

        'section' => 'park_home_section',

        'settings' => 'park_posts_margin',

        'priority' => 999

    ));





    //----------------------------- END HOME (BLOG) SECTION  ---------------------------------------------

    //

    //

    //

    //----------------------------- PORTFOLIO SECTION  ---------------------------------------------

    if (post_type_exists('portfolio')) {

        $wp_customize->add_section('park_portfolio_section', array(

            'title' => esc_html__('Portfolio settings', 'park-wp'),

            'priority' => 32

        ));



        $wp_customize->add_setting('park_portfolio_num_items', array(

            'default' => 4,

            'sanitize_callback' => 'absint'

        ));



        $wp_customize->add_control('park_portfolio_num_items', array(

            'label' => esc_html__('Portfolio num of items to show:', 'park-wp'),

            'section' => 'park_portfolio_section',

            'settings' => 'park_portfolio_num_items',

            'priority' => 999

        ));



        $wp_customize->add_setting('park_portfolio_link', array(

            'default' => "",

            'sanitize_callback' => 'esc_url'

        ));



        $wp_customize->add_control('park_portfolio_link', array(

            'label' => esc_html__('URL to Portfolio page:', 'park-wp'),

            'section' => 'park_portfolio_section',

            'settings' => 'park_portfolio_link',

            'priority' => 999

        ));

    }



    //----------------------------- END PORTFOLIO SECTION  ---------------------------------------------

    //

    //

    //----------------------------- IMAGE SECTION  ---------------------------------------------



    $wp_customize->add_section('park_image_section', array(

        'title' => esc_html__('Images Section', 'park-wp'),

        'priority' => 33

    ));





    $wp_customize->add_setting('park_header_logo', array(

        'default' => get_template_directory_uri() . '/images/logo.png',

        'capability' => 'edit_theme_options',

        'type' => 'option',

        'sanitize_callback' => 'sanitize_text_field'

    ));

    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'park_header_logo', array(

        'label' => esc_html__('Header Logo', 'park-wp'),

        'section' => 'park_image_section',

        'settings' => 'park_header_logo'

    )));



    //----------------------------- END IMAGE SECTION  ---------------------------------------------

    //

    //

    //

    //----------------------------------COLORS SECTION--------------------



    $wp_customize->add_setting('park_global_color', array(

        'default' => '#fffaa3',

        'type' => 'option',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_hex_color'

    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'park_global_color', array(

        'label' => esc_html__('Global Color', 'park-wp'),

        'section' => 'colors',

        'settings' => 'park_global_color'

    )));





    $wp_customize->add_setting('park_body_background_color', array(

        'default' => '#f4f4f1',

        'type' => 'option',

        'capability' => 'edit_theme_options',

        'sanitize_callback' => 'sanitize_hex_color'

    ));

    $wp_customize->add_control(new WP_Customize_Color_Control($wp_customize, 'park_body_background_color', array(

        'label' => esc_html__('Body Background', 'park-wp'),

        'section' => 'colors',

        'settings' => 'park_body_background_color'

    )));





    //----------------------------------------------------------------------------------------------

    //

    //

    //

      //------------------------- FOOTER TEXT SECTION ---------------------------------------------



    $wp_customize->add_section('park_footer_text_section', array(

        'title' => esc_html__('Footer Text', 'park-wp'),

        'priority' => 99

    ));



    $wp_customize->add_setting('park_footer_copyright_content', array(

        'default' => '',

        'sanitize_callback' => 'park_clean_html'

    ));



    $wp_customize->add_control(new ParkWP_Customize_Textarea_Control($wp_customize, 'park_footer_copyright_content', array(

        'label' => esc_html__('Footer Copyright Content:', 'park-wp'),

        'section' => 'park_footer_text_section',

        'settings' => 'park_footer_copyright_content',

        'priority' => 999

    )));





    $wp_customize->add_setting('park_footer_social_content', array(

        'default' => '',

        'sanitize_callback' => 'park_clean_html'

    ));



    $wp_customize->add_control(new ParkWP_Customize_Textarea_Control($wp_customize, 'park_footer_social_content', array(

        'label' => esc_html__('Footer Social Content', 'park-wp'),

        'section' => 'park_footer_text_section',

        'settings' => 'park_footer_social_content',

        'priority' => 999

    )));







    //---------------------------- END FOOTER TEXT SECTION --------------------------

    //

    //

    //--------------------------------------------------------------------------

    $wp_customize->get_setting('park_global_color')->transport = 'postMessage';

    $wp_customize->get_setting('park_body_background_color')->transport = 'postMessage';

    //--------------------------------------------------------------------------

    /*

     * If preview mode is active, hook JavaScript to preview changes

     */

    if ($wp_customize->is_preview() && !is_admin()) {

        add_action('customize_preview_init', 'park_theme_customize_preview_js');

    }

}



/**

 * Bind Theme Customizer JavaScript

 */

function park_theme_customize_preview_js() {

    wp_enqueue_script('park-wp-theme-customizer', get_template_directory_uri() . '/admin/js/custom-admin.js', array('customize-preview'), '20120910', true);

}



/*

 * Generate CSS Styles

 */



class ParkWPLiveCSS {



    public static function park_theme_customized_style() {

        echo ('<style type="text/css">');

        park_generate_css('.site-wrapper .sm-clean a.current, .site-wrapper .sm-clean a:hover, .site-wrapper .main-menu.sm-clean .sub-menu li a.current, .site-wrapper .main-menu.sm-clean .sub-menu li a:hover, .site-wrapper .sm-clean a span.sub-arrow, .site-wrapper .read-more-arrow a:hover', 'color', 'park_global_color');

        park_generate_css('.site-wrapper blockquote, .site-wrapper .big-text', 'border-color', 'park_global_color');

        park_generate_css('.site-wrapper .underline:after, .site-wrapper .blog-item-holder .entry-info .cat-links a:after, .site-wrapper .replay-at-author:after, .site-wrapper .quote-author:after, .site-wrapper .portfolio-category a:after', 'background-color', 'park_global_color');        

        park_generate_css('body .site-wrapper ::selection', 'background-color', 'park_global_color');

        park_generate_css('body .site-wrapper ::-moz-selection', 'background-color', 'park_global_color');

        park_generate_css('body', 'background-color', 'park_body_background_color', '', '!important');        

        echo ('</style>');

    }



}



/*

 * Generate CSS Class - Helper Method

 */



function park_generate_css($selector, $style, $mod_name, $prefix = '', $postfix = '', $echo = true) {

    $return = '';

    $mod = get_option($mod_name);

    if (!empty($mod)) {

        $return = sprintf('%s { %s:%s; }', $selector, $style, $prefix . $mod . $postfix

        );

        if ($echo) {

            echo $return;

        }

    }

    return $return;

}

?>