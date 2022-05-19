"use strict";



jQuery(document).on('ready', function () {



    jQuery(window).on('scroll', function () {

        animateElement();

    });



    jQuery('.single-post .num-comments a, .single-portfolio .num-comments a').on('click', function (e) {

        e.preventDefault();

        jQuery('html, body').animate({scrollTop: jQuery(this.hash).offset().top}, 2000);

        return false;

    });



    //Add before and after "blockquote" custom class

    jQuery('blockquote.inline-blockquote').prev('p').addClass('wrap-blockquote');

    jQuery('blockquote.inline-blockquote').next('p').addClass('wrap-blockquote');

    jQuery('blockquote.inline-blockquote').css('display', 'table');



    //Placeholder show/hide

    jQuery('input, textarea').focus(function () {

        jQuery(this).data('placeholder', jQuery(this).attr('placeholder'));

        jQuery(this).attr('placeholder', '');

    });

    jQuery('input, textarea').blur(function () {

        jQuery(this).attr('placeholder', jQuery(this).data('placeholder'));

    });



    //Fix for footer

    if ((jQuery('.page .comment-form-holder').length) || (jQuery('.page .comments-list-holder').length))

    {

        jQuery(".page .site-content").css('margin-bottom', '0');

    }



    //Fix for menu alignment

    if (!jQuery('.menu-left-text').length)

    {

        jQuery('.menu-holder').addClass('no-left-part');

    }



    singlePaginationHeightFix();



    jQuery(".site-content").fitVids();



    jQuery(".default-menu ul:first").addClass('sm sm-clean main-menu');

});







jQuery(window).on('load', function () {



    //Set menu

    jQuery('.main-menu').smartmenus({

        subMenusSubOffsetX: 1,

        subMenusSubOffsetY: -8,

        markCurrentItem: true

    });



//Show-Hide header sidebar

    jQuery('#toggle, .menu-wraper').on('click', multiClickFunctionStop);

    jQuery('.main-menu, .search-field').on('click', function (e) {

        e.stopPropagation();

    });



    blogLayoutFix();

    contactFormWidthFix();



    // Animate the elemnt if is allready visible on load

    animateElement();





    jQuery('.doc-loader').fadeOut('fast');



});





jQuery(window).on('resize', function () {

    blogLayoutFix();

    contactFormWidthFix();

});



//------------------------------------------------------------------------

//Helper Methods -->

//------------------------------------------------------------------------





var animateElement = function (e) {



    jQuery(".animate").each(function (i) {



        var top_of_object = jQuery(this).offset().top;

        var bottom_of_window = jQuery(window).scrollTop() + jQuery(window).height();

        if ((bottom_of_window) > top_of_object) {

            jQuery(this).addClass('show-it');

        }



    });



};



var blogLayoutFix = function () {



    jQuery('.blog-item-holder.has-post-thumbnail:nth-child(2n)').each(function () {

        var x = jQuery(".blog-holder").width() - jQuery(this).find('.post-thumbnail').width() - (parseFloat(jQuery(this).find('.post-thumbnail').css('max-width')) - jQuery(this).find('.post-thumbnail').width()) / 2;

        jQuery(this).find('.post-thumbnail').css('transform', 'translateX(' + x + 'px)');

        x = jQuery(this).find('.entry-holder').innerWidth() - 87 + jQuery(this).find('.post-thumbnail').width() - x;

        jQuery(this).find('.entry-holder').css('transform', 'translateX(-' + x + 'px)');

    });



};



var contactFormWidthFix = function () {

    jQuery('.wpcf7 input[type=text], .wpcf7 input[type=email], .wpcf7 textarea').innerWidth(jQuery('.wpcf7-form').width());

};



var multiClickFunctionStop = function (e) {

    if (jQuery(e.target).is('.menu-wraper') || jQuery(e.target).is('.menu-right-part') || jQuery(e.target).is('.menu-holder') || jQuery(e.target).is('#toggle') || jQuery(e.target).is('#toggle div'))

    {



        jQuery('#toggle, .menu-wraper').off("click");

        jQuery('#toggle').toggleClass("on");

        if (jQuery('#toggle').hasClass("on"))

        {

            jQuery('.header-holder').addClass('down');

            jQuery('.menu-wraper, .menu-holder').addClass('show');

            jQuery('#toggle, .menu-wraper').on("click", multiClickFunctionStop);

        } else

        {

            jQuery('.header-holder').removeClass('down');

            jQuery('.menu-wraper, .menu-holder').removeClass('show');

            jQuery('#toggle, .menu-wraper').on("click", multiClickFunctionStop);

        }

    }

};



var singlePaginationHeightFix = function () {

    if (jQuery('.single .nav-previous a').height() > jQuery('.single .nav-next a').height())

    {

        jQuery('.single .nav-next a').height(jQuery('.single .nav-previous a').height());

    } else

    {

        jQuery('.single .nav-previous a').height(jQuery('.single .nav-next a').height());

    }

};



function is_touch_device() {

    return !!('ontouchstart' in window);

}