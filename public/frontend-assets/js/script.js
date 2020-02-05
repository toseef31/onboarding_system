var $ = jQuery.noConflict();

$(document).ready(function() {
    jQuery('ul.sf-menu').superfish({
        animation: {
            height: 'show'
        },  
        delay: 100 
    }); 
    $("#toggle-btn").click(function() {
        $(".sf-menu").slideToggle("slow"); 
    });

    $('.toggle-subarrow').click(
        function() {
            $(this).parent().toggleClass("mob-drop");
    });
		
		var header = $(".header-inner");
    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 100 && $(this).width() > 769) {
            header.addClass("navbar-fixed-top");
        } else {
            header.removeClass('navbar-fixed-top');
        }
    });	  
	  $(this).find(".h4 i").each(function(){
            $(this).addClass("green");
    }); 
}); 
$(window).scroll(function() {
    var nav = $('#header-inner');
    var top = 200;
    if ($(window).scrollTop() >= top) {

        nav.addClass('navbar-fixed-top');

    } else {
        nav.removeClass('navbar-fixed-top');
    }
});