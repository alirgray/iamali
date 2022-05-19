"use strict";



var count = 1;



jQuery(document).on('ready', function () {

    if (parseInt(ajax_var.posts_per_page_index) < parseInt(ajax_var.total_index)) {

        jQuery('.more-posts').css('visibility', 'visible');

        jQuery('.more-posts').animate({opacity: 1}, 1500);

    } else {

        jQuery('.more-posts').css('display', 'none');

    }





    jQuery('.more-posts:visible').on('click', function () {

        count++;

        loadArticleIndex(count);

        jQuery('.more-posts').css('display', 'none');

        jQuery('.more-posts-loading').css('display', 'inline-block');

    });

});



function loadArticleIndex(pageNumber) {

    jQuery.ajax({

        url: ajax_var.url,

        type: 'POST',

        data: "action=infinite_scroll_index&page_no_index=" + pageNumber + '&loop_file_index=loop-index',

        success: function (html) {

            jQuery(".blog-holder").append(html);



            jQuery(".blog-holder").imagesLoaded(function () {



                jQuery('.blog-item-holder.has-post-thumbnail:nth-child(2n)').each(function () {

                    var x = jQuery(".blog-holder").width() - jQuery(this).find('.post-thumbnail').width() - (parseFloat(jQuery(this).find('.post-thumbnail').css('max-width')) - jQuery(this).find('.post-thumbnail').width()) / 2;

                    jQuery(this).find('.post-thumbnail').css('transform', 'translateX(' + x + 'px)');

                    x = jQuery(this).find('.entry-holder').innerWidth() - 87 + jQuery(this).find('.post-thumbnail').width() - x;

                    jQuery(this).find('.entry-holder').css('transform', 'translateX(-' + x + 'px)');

                });



                animateElement();



                if (count == ajax_var.num_pages_index)

                {

                    jQuery('.more-posts').css('display', 'none');

                    jQuery('.more-posts-loading').css('display', 'none');

                    jQuery('.no-more-posts').css('display', 'inline-block');

                } else

                {

                    jQuery('.more-posts').css('display', 'inline-block');

                    jQuery('.more-posts-loading').css('display', 'none');

                }

            });

        }

    });

    return false;

}