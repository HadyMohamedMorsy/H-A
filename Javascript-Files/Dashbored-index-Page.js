
$(document).ready(function(){
    
    $('#example').DataTable();

    $('.cancel-Dashbored').on("click",function(){
        
        if( $(this).parent().parent().hasClass('View-row')){
            $(".view-here").html(" ")
        }

        $(this).parent().parent().addClass('remove-Delete');


    })

});
