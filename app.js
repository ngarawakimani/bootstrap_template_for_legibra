/**
 * Created by Dancan on 5/11/2017.
 */
$(function() {

    $('.navbar-collapse ul li a').click(function() {
        $('.navbar-toggle:visible').click();
    });

    $('#header').css("margin-top","100px");

    $('.dropdown-toggle').click(function () {
        $(this).css({
            "background":"transparent",
            "color":"white"
        });
    });

    $('.carousel').carousel({
        interval:5000
    });

    $('.footer .social i').hover(function () {
        $(this).animate({padding: "10px"});
    });

});
