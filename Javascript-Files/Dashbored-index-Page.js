
$(document).ready(function(){
    
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel','colvis' ]
        } );
     
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );


    $('.cancel-Dashbored').on("click",function(){
        
        if( $(this).parent().parent().hasClass('View-row')){
            $(".view-here").html(" ")
        }

        $(this).parent().parent().addClass('remove-Delete');


    });
    
    $('.click-drop-burger-large').on('click',function(){
        $(this).parent().css({
            "left" : "-400px",
            "display" : "none",
        }
        );
        $('.click-drop-burger-small').parent().css("display","flex");
        $('.container-hady .Content-table').css({"flex-basis" : "95% !important"});
    });
    $('.click-drop-burger-small').on('click',function(){

        $('.click-drop-burger-large').parent().css({
            "left" : "0px",
            "display" : "flex",
        }
        );
        $(this).parent().css("display","none");

        $('.container-hady .Content-table').css({"flex-basis" : "80% !important"});
    });

    $('.click-drop-burger-large').on('click',function(){
        $(this).parent().css({
            "left" : "-400px",
            "display" : "none",
        }
        );
        $('.click-drop-burger-small').parent().css("display","flex");
        $('.right-Edit').css("flex-basis" , "95%");
    });
    
    $('.click-drop-burger-small').on('click',function(){

        $('.click-drop-burger-large').parent().css({
            "left" : "0px",
            "display" : "flex",
        }
        );
        $(this).parent().css("display","none");

        $('.right-Edit').css("flex-basis" , "80%");
    });

    $('.click-drop-burger-large').on('click',function(){
        $(this).parent().css({
            "left" : "-400px",
            "display" : "none",
        }
        );
        $('.click-drop-burger-small').parent().css("display","flex");
        $('.right-add-projects').css("flex-basis" , "95%");
    });
    
    $('.click-drop-burger-small').on('click',function(){

        $('.click-drop-burger-large').parent().css({
            "left" : "0px",
            "display" : "flex",
        }
        );
        $(this).parent().css("display","none");

        $('.right-add-projects').css("flex-basis" , "80%");
    });
    $('.click-drop-burger-large').on('click',function(){
        $(this).parent().css({
            "left" : "-400px",
            "display" : "none",
        }
        );
        $('.click-drop-burger-small').parent().css("display","flex");
        $('.Dashbored-content').css("flex-basis" , "92%");
    });
    
    $('.click-drop-burger-small').on('click',function(){

        $('.click-drop-burger-large').parent().css({
            "left" : "0px",
            "display" : "flex",
        }
        );
        $(this).parent().css("display","none");

        $('.Dashbored-content').css("flex-basis" , "65%");
    });

});
