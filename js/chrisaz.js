jQuery(document).ready(function ($) {

    const mygreen = '#3cc319';

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


    //Submenu
    //Change color of the submenu's triangle when hover
    $('.sub-menu li:first-child').mouseenter(function(){
        $(this).toggleClass('special');
    });
    $('.sub-menu li:first-child').mouseleave(function(){
        $(this).toggleClass('special');
    });

    //Menu laptop *********/
    $('#menu-item-361>a').html(function(){
        return "<p>A propos</p><div style=\"width:10px;margin-left:10px;\"><svg id=\"Calque_2\" data-name=\"Calque 2\" xmlns=\"http://www.w3.org/2000/svg\" viewBox=\"0 0 40.98 35.49\"><polygon class=\"cls-2\" points=\"20.49 35.49 10.24 17.75 0 0 20.49 0 40.98 0 30.73 17.75 20.49 35.49\"/></svg></div>";
    });

    $('#menu-item-361>a').css({
        "display":"flex"
    })

  

    /*Animation du sub menu*/
    $('#menu-item-361').mouseenter(function(){
        $('.sub-menu').css({
            'visibility':'visible',
            'opacity':'1'
        })
        $('#menu-item-361 a').css({
            'color':mygreen
        })
    });
    
    $('#menu-item-361').mouseleave(function(){
        $('.sub-menu').css({
            'visibility':'hidden',
            'opacity':'0'
        })
        $('#menu-item-361 a').css({
            'color':'white'
        })
    });
    /*Fin de l'animation du sub menu*/

    //Toggle pour submenu smartphone
    $('#hamburger-sidebar .menu-item-361').click(function(){
        $('#hamburger-sidebar .menu-item-361 ul').toggle(   );
    });
    //Fin du submenu


    //Session home.php
    //Hover sur les articles 
    $('.articleContainer a').mouseenter(function(){
        $(this).css({
            "box-shadow":"0 0 10px black"
        })
    });
    $('.articleContainer a').mouseleave(function(){
        $(this).css({
            "box-shadow":"0 0 10px #6b6b6b"
        })
    });

});



