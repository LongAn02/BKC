$(function(){
    $(window).scroll(function(){
        if(($(this).scrollTop()) > 850 ){
            $('#backToTop').css({
                'display' : 'block',
            });
        }else{
            $('#backToTop').css({
                'display' : 'none',
            });
        }
    });

    $('#backToTop, #iconcart').mouseover(function(){
        $(this).css({
            'background-color' :'#2563ef',
            'transition' : '1s',
        });
    });

    $('#backToTop, #iconcart').mouseout(function(){
        $(this).css({
            'background-color' :'#e890ab',
            'transition' : '1s',
        });
    });
});
