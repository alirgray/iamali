"use strict";



var count = 1;



jQuery(document).on('ready', function () {

    if (parseInt(ajax_var_portfolio.posts_per_page) < parseInt(ajax_var_portfolio.total)) {

        jQuery('.more-posts-portfolio').css('visibility', 'visible');

        jQuery('.more-posts-portfolio').animate({opacity: 1}, 1500);

    } else {

        jQuery('.more-posts-portfolio').css('display', 'none');

    }





    jQuery('.more-posts-portfolio:visible').on('click', function () {

        count++;

        loadArticlePortfolio(count);

        jQuery('.more-posts-portfolio').css('display', 'none');

        jQuery('.more-posts-portfolio-loading').css('display', 'inline-block');

    });

});



function loadArticlePortfolio(pageNumber) {

    jQuery.ajax({

        url: ajax_var_portfolio.url,

        type: 'POST',

        data: "action=infinite_scroll&page_no=" + pageNumber + '&loop_file=loop-portfolio',

        success: function (html) {

            var $newItems = jQuery(html);



            //Add new items to the gallery

            jQuery('.grid').isotope('insert', $newItems);

            // initialize Isotope after all images have loaded

            jQuery('.grid').imagesLoaded(function () {

                jQuery('.grid').isotope();

                jQuery('.grid-sizer, .grid-item').innerWidth(jQuery(".grid-sizer, .grid-item").innerWidth());

                animateElement();



                if (count == ajax_var_portfolio.num_pages)

                {

                    jQuery('.more-posts-portfolio').css('display', 'none');

                    jQuery('.more-posts-portfolio-loading').css('display', 'none');

                    jQuery('.no-more-posts-portfolio').css('display', 'inline-block');

                } else

                {

                    jQuery('.more-posts-portfolio').css('display', 'inline-block');

                    jQuery('.more-posts-portfolio-loading').css('display', 'none');

                }

            });

        }

    });

    return false;

}