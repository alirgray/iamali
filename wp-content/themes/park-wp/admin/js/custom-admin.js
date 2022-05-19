(function ($) {



    "use strict";



    // COLORS                         

    wp.customize('park_global_color', function (value) {

        value.bind(function (to) {

            var inlineStyle, customColorCssElemnt;

            inlineStyle = '<style class="custom-color-css1">';



            inlineStyle += '.site-wrapper .sm-clean a.current, .site-wrapper .sm-clean a:hover, .site-wrapper .main-menu.sm-clean .sub-menu li a.current, .site-wrapper .main-menu.sm-clean .sub-menu li a:hover, .site-wrapper .sm-clean a span.sub-arrow, .site-wrapper .read-more-arrow a:hover { color: ' + to + '; }';

            inlineStyle += '.site-wrapper blockquote, .site-wrapper .big-text { border-color: ' + to + '; }';

            inlineStyle += '.site-wrapper .underline:after, .site-wrapper .blog-item-holder .entry-info .cat-links a:after, .site-wrapper .replay-at-author:after, .site-wrapper .quote-author:after, .site-wrapper .portfolio-category a:after { background-color: ' + to + '; }';

            inlineStyle += 'body .site-wrapper ::selection { background-color: ' + to + '; }';

            inlineStyle += 'body .site-wrapper ::-moz-selection { background-color: ' + to + '; }';

            

            inlineStyle += '</style>';



            customColorCssElemnt = $('.custom-color-css1');



            if (customColorCssElemnt.length) {

                customColorCssElemnt.replaceWith(inlineStyle);

            } else {

                $('head').append(inlineStyle);

            }



        });

    });



    wp.customize('park_body_background_color', function (value) {

        value.bind(function (to) {

            var inlineStyle, customColorCssElemnt;

            inlineStyle = '<style class="custom-color-css2">';

            inlineStyle += 'body { background-color: ' + to + '!important }';

            inlineStyle += '</style>';



            customColorCssElemnt = $('.custom-color-css2');



            if (customColorCssElemnt.length) {

                customColorCssElemnt.replaceWith(inlineStyle);

            } else {

                $('head').append(inlineStyle);

            }



        });

    });



})(jQuery);