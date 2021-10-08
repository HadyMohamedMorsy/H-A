
    $(document).ready(function() {


        var table = $('#example').DataTable();
         
        $('#example tbody .last-Action a').on('click',function (e) {

            $($(this).data('module')).removeClass('remove-Delete');

            e.preventDefault();
            var Select = $(this).parent().parent();
            var data = table.row(Select).data();

            var src = data[1].replace('<img src="','').replace('"','').replace('>','').replace("alt=",'').replace('"','').replace('"','').replace(data[2],'');
            console.log(src);

            if($(this).data('module') == ".View-row"){

                $($(this).data('module')).removeClass('remove-Delete');

                $('#view-Details-show-IMG').attr('src',src);
                $('#view-Details-show-name').text(data[2]);
                $('#view-Details-show-FullName').text(data[3]);
                $('#view-Details-show-Status').text(data[4]);
                $('#view-Details-show-Date-Created').text(data[5]);
                $('#view-Details-show-Purchases').text(data[6]);
            }


        });
    } );
