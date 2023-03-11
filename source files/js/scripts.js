/*!
* Start Bootstrap - Grayscale v7.0.5 (https://startbootstrap.com/theme/grayscale)
* Copyright 2013-2022 Start Bootstrap
* Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-grayscale/blob/master/LICENSE)
*/
//
// Scripts
// 

window.addEventListener('DOMContentLoaded', event => {

    // Navbar shrink function
    var navbarShrink = function () {
        const navbarCollapsible = document.body.querySelector('#mainNav');
        if (!navbarCollapsible) {
            return;
        }
        if (window.scrollY === 0) {
            navbarCollapsible.classList.remove('navbar-shrink')
        } else {
            navbarCollapsible.classList.add('navbar-shrink')
        }

    };

    // Shrink the navbar 
    navbarShrink();

    // Shrink the navbar when page is scrolled
    document.addEventListener('scroll', navbarShrink);

    // Activate Bootstrap scrollspy on the main nav element
    const mainNav = document.body.querySelector('#mainNav');
    if (mainNav) {
        new bootstrap.ScrollSpy(document.body, {
            target: '#mainNav',
            offset: 74,
        });
    };

    // Collapse responsive navbar when toggler is visible
    const navbarToggler = document.body.querySelector('.navbar-toggler');
    const responsiveNavItems = [].slice.call(
        document.querySelectorAll('#navbarSupportedContent .nav-link')
    );
    responsiveNavItems.map(function (responsiveNavItem) {
        responsiveNavItem.addEventListener('click', () => {
            if (window.getComputedStyle(navbarToggler).display !== 'none') {
                navbarToggler.click();
            }
        });
    });

});

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
        setTimeout(function () { $('.zumbapopup').removeClass('ZanimationClose').addClass('ZanimationOpen'); }, 100);
        $('.zumbaobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .zumbaobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.zumbaobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').detach();
        $('.zumbapopup').removeClass('ZanimationOpen').addClass('ZanimationClose');

    });

    $('.yogaopenBtn').click(function (e) {
        setTimeout(function () { $('.yogapopup').removeClass('YanimationClose').addClass('YanimationOpen'); }, 100);
        $('.yogaobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .yogaobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.yogaobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').detach();
        $('.yogapopup').removeClass('YanimationOpen').addClass('YanimationClose');
    });

    $('.gymopenBtn').click(function (e) {
        setTimeout(function () { $('.gympopup').removeClass('GanimationClose').addClass('GanimationOpen'); }, 100);
        $('.gymobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .gymobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.gymobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').detach();
        $('.gympopup').removeClass('GanimationOpen').addClass('GanimationClose');
    });

    $('.CopenBtn').click(function (e) {
        setTimeout(function () { $('.Cpopup').removeClass('CanimationClose').addClass('CanimationOpen'); }, 100);
        $('.Cobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .Cobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.Cobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').detach();
        $('.Cpopup').removeClass('CanimationOpen').addClass('CanimationClose');
    });

    $('.SopenBtn').click(function (e) {
        setTimeout(function () { $('.Spopup').removeClass('SanimationClose').addClass('SanimationOpen'); }, 100);
        $('.Sobscure').fadeIn(50);
        e.preventDefault();
    });

    $('.closeBtn, .Sobscure').click(function (e) {
        e.preventDefault();
        setTimeout(function () { $('.Sobscure').fadeOut(350); }, 50);
        $('.responsive-iframe').detach();
        $('.Spopup').removeClass('SanimationOpen').addClass('SanimationClose');
    });
});