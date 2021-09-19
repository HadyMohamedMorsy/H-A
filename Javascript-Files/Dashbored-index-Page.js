
$(document).ready(function(){

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