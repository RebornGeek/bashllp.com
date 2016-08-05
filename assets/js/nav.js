$(document).ready(function(){

    if($(window).width() > 991){
        $('.nav-wrap ul li').hover(function(){
            $(this).find('ul').toggle();
        });
    }

    $('.mobile-menu-icon').click(function(){
        $('ul.menu').toggle();
    });
});
