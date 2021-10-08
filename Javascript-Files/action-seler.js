
        var table = $('#example').DataTable();
         
        $('#example tbody .last-Action a').on('click',function (e) {

            e.preventDefault();

            var Select = $(this).parent().parent();
            var data = table.row(Select).data();

            var src = data[1].replace('<img src="','').replace('"','').replace('>','').replace("alt=",'').replace('"','').replace('"','').replace(data[2],'');
            console.log(src);

            if($(this).data('module') == ".View-row"){

                $($(this).data('module')).removeClass('remove-Delete');
;
            }


        });