
$(document).ready(function(){

    $(".list-of-dashbored li a").on("click",function(e){

        e.preventDefault();
    
        $('.Dasbored-content').addClass('none-Dashbored');
    
        $($(this).data('right')).removeClass('none-Dashbored');
    
    });

    $('#Seller').DataTable();

    $('.last-Action a').on("click",function(e){

        e.preventDefault();

        $($(this).data('users')).removeClass('remove-Delete');

    });
    
    $('#example').DataTable();

    $('.last-Action a').on("click",function(e){

        e.preventDefault();

        $($(this).data('clients')).removeClass('remove-Delete');

    });

    $('.cancel-Dashbored').on("click",function(){

        $(this).parent().parent().addClass('remove-Delete');
    })
});