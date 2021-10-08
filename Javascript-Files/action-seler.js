
    $(document).ready(function() {


        var table = $('#example').DataTable();
         
        $('#example tbody .last-Action .View').on('click',function (e) {
            e.preventDefault();
            var Select = $(this).parent().parent();
            var data = table.row(Select).data();
            alert( 'You clicked on '+data[0]+'\'s row' );
        } );
    } );