$(".j-menu-toggle").click(function () {
    $(this).toggleClass('j-close-btn');
    $(this).parents('.j-header').find('.j-header-menu').toggleClass('j-open');
    $('body').toggleClass('j-body-noscroll');
});