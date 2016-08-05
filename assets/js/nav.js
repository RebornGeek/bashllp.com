$(document).ready(function(){
    $('.nav-wrap ul li').hover(function(){
        $(this).find('ul').show();
    }, function(){
        $(this).find('ul').hide();
    });
});
