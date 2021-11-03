$(document).ready(function(){
    
    $('.click-drop-burger-small').on('click',function(){

        $(this).parent().css({
            "left" : "-400px"
        })
        $('.Dashbored-content').css({
            "padding-left" : "340px"
        })

        $('aside').css({
            "left" : "0px"
        })

    });

    $('.click-drop-burger-large').on('click',function(){

        $(this).parent().css({
            "left" : "-400px"
        })
        $('.Dashbored-content').css({
            "padding-left" : "140px"
        })

        $('.mobile-header-dashbored').css({
            "left" : "0px"
        })

    });

});