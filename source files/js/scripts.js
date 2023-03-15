/*!
* Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

/*Dropdown Menu*/
$('.dropdown').click(function () {
    $(this).attr('tabindex', 1).focus();
    $(this).toggleClass('active');
    $(this).find('.dropdown-menu').slideToggle(300);
});
$('.dropdown').focusout(function () {
    $(this).removeClass('active');
    $(this).find('.dropdown-menu').slideUp(300);
});
$('.dropdown .dropdown-menu li').click(function () {
    $(this).parents('.dropdown').find('span').text($(this).text());
    $(this).parents('.dropdown').find('input').attr('value', $(this).attr('id'));
});
/*End Dropdown Menu*/


$(document).ready(function () {
    $('.zumbaopenBtn').click(function (e) {
        $('.responsive-iframe').attr('src', 'https://www.youtube.com/embed/mZeFvX3ALKY');
        setTimeout(function () { $('.zumbapopup').removeClass('ZanimationClose').addClass('ZanimationOpen'); }, 100);
        $('.zumbaobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .zumbaobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.zumbaobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').removeAttr('src');
        $('.zumbapopup').removeClass('ZanimationOpen').addClass('ZanimationClose');

    });

    $('.yogaopenBtn').click(function (e) {
        $('.responsive-iframe').attr('src', 'https://www.youtube.com/embed/v7AYKMP6rOE');
        setTimeout(function () { $('.yogapopup').removeClass('YanimationClose').addClass('YanimationOpen'); }, 100);
        $('.yogaobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .yogaobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.yogaobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').removeAttr('src');
        $('.yogapopup').removeClass('YanimationOpen').addClass('YanimationClose');
    });

    $('.gymopenBtn').click(function (e) {
        $('.responsive-iframe').attr('src', 'https://www.youtube.com/embed/zcTBdZcmUp0');
        setTimeout(function () { $('.gympopup').removeClass('GanimationClose').addClass('GanimationOpen'); }, 100);
        $('.gymobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .gymobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.gymobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').removeAttr('src');
        $('.gympopup').removeClass('GanimationOpen').addClass('GanimationClose');
    });

    $('.CopenBtn').click(function (e) {
        $('.responsive-iframe').attr('src', 'https://www.youtube.com/embed/4Hl1WAGKjMc');
        setTimeout(function () { $('.Cpopup').removeClass('CanimationClose').addClass('CanimationOpen'); }, 100);
        $('.Cobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .Cobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.Cobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').removeAttr('src');
        $('.Cpopup').removeClass('CanimationOpen').addClass('CanimationClose');
    });

    $('.SopenBtn').click(function (e) {
        $('.responsive-iframe').attr('src', 'https://www.youtube.com/embed/uiI6Z_0Q2Io');
        setTimeout(function () { $('.Spopup').removeClass('SanimationClose').addClass('SanimationOpen'); }, 100);
        $('.Sobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .Sobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.Sobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').removeAttr('src');
        $('.Spopup').removeClass('SanimationOpen').addClass('SanimationClose');
    });

     


});