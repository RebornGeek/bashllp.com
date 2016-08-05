$(document).ready(function(){

    $(window).resize(function() {
        if($(window).width() > 768){


            $('ul.menu').css({'display':''});
        }else {
            $('ul.menu').css({'display':'none'});
        }
    });

    $('.mobile-menu-icon').click(function(){
        $('ul.menu').toggle();
    });
});
