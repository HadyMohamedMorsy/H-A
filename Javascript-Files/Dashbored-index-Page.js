
$(document).ready(function(){



    $('.last-Action a').on("click",function(e){

        e.preventDefault();

        $($(this).data('users')).removeClass('remove-Delete');

    });
    
    $('#example').DataTable();


    
    $('.cancel-Dashbored').on("click",function(){

        $(this).parent().parent().addClass('remove-Delete');
    })

});
