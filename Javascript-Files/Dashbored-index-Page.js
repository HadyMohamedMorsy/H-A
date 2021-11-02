
$(document).ready(function(){
    
        var table = $('#example').DataTable( {
            lengthChange: false,
            buttons: [ 'copy', 'excel']
        } );
     
        table.buttons().container()
            .appendTo( '#example_wrapper .col-md-6:eq(0)' );

    $('.cancel-Dashbored').on("click",function(){
        
        if( $(this).parent().parent().hasClass('View-row')){
            $(".view-here").html(" ")
        }

        $(this).parent().parent().addClass('remove-Delete');


    });



});
