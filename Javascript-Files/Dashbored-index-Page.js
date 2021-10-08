
$(document).ready(function(){
    
    $('#example').DataTable();

    $('.cancel-Dashbored').on("click",function(){

        $(this).parent().parent().addClass('remove-Delete');
    })

});
