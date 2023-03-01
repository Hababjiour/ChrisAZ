jQuery(document).ready(function ($) {


    // menu hamburger
    var content = $('#hamburger-content');
    var button = $('#hamburger-button');
    var overlay = $('#hamburger-overlay');
    var sidebarBody = $('#hamburger-sidebar-body');
    var hamburger = $('#hamburger');

    var activatedClass = 'hamburger-activated';

    //Duplicate the menu content in mobile menu
    var duplicate = content.html();
    sidebarBody = sidebarBody.html(duplicate);

    //Add the class 'hamburger-activated' for open the mobile menu
    button.click(function (e) {
        e.preventDefault();
        hamburger.addClass(activatedClass);
    });


    //If click outside the menu, the menu will close
    overlay.click(function (e) {
        e.preventDefault();
        hamburger.removeClass(activatedClass);
    });

    //If a scroll, the menu will close
    $(document).scroll(function (e) {
        e.preventDefault();
        hamburger.removeClass(activatedClass);
    });//Fin du menu hamburger


    //hover menu footer svg
    $('div.svgContact a').mouseenter(function () {
        $(this).find('path').removeClass('cls-footer').addClass('cls-footerhover');
        $(this).find('circle').removeClass('cls-footer').addClass('cls-footerhover');
        $(this).find('rect').removeClass('cls-footer').addClass('cls-footerhover');
    });
    $('div.svgContact a').mouseleave(function () {
        $(this).find('path').removeClass('cls-footerhover').addClass('cls-footer');
        $(this).find('circle').removeClass('cls-footerhover').addClass('cls-footer');
        $(this).find('rect').removeClass('cls-footerhover').addClass('cls-footer');
    });

    //Add green list style type 
    $('main ul li').prepend(function(){

        return "<div style=\"position:absolute;width:8px;height:8px;top:-1px;left:-20px;\"><svg id=\"Calque_1\" data-name=\"Calque 1\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 31 31\"><defs><style>.cls-1{fill:#54af32;}</style></defs><circle class=\"cls-1\" cx=\"15.5\" cy=\"15.5\" r=\"15.5\"/></svg></div>";

    });


    //Change color of the submenu's triangle when hover
    $('.sub-menu li:first-child').mouseenter(function(){
        $(this).toggleClass('special');
    });
    $('.sub-menu li:first-child').mouseleave(function(){
        $(this).toggleClass('special');
    });




});



