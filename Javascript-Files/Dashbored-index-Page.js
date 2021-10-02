
$(document).ready(function(){



    $('.last-Action a').on("click",function(e){

        e.preventDefault();

        $($(this).data('users')).removeClass('remove-Delete');

    });
    
    $('#example').DataTable();

    // $('.last-Action a').on("click",function(e){

    //     e.preventDefault();

    //     $($(this).data('module')).removeClass('remove-Delete');


    // });


    $("#tbody .t-body .last-Action a").each(function(index , i) {

        $(this).on("click", function(){

            var boolKey = $(this).data('module');

            $(boolKey).removeClass('remove-Delete');

            var  retindex = index;

        });

    });

    
    $('.cancel-Dashbored').on("click",function(){

        $(this).parent().parent().addClass('remove-Delete');
    })

});