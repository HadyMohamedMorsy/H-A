

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;

        let viewhere = document.querySelector('.view-here');

        if((module) == ".View-row"){

            viewque.classList.remove('remove-Delete');
            viewque.classList.add('Add-Delete');

            let headerTable = document.querySelectorAll('.header-table th');

            let newtable = headerTable.length-2;

            for(let i =0; i<=newtable; i++){

                viewhere.innerHTML += "<li class='col-lg-4'>" +  headerTable[i].innerHTML+ ":" + "<span>"+ select[i].innerText +"</span>" + "</li>";
            }

            let newviewhere = document.querySelectorAll(".view-here li");

            newviewhere[1].remove();

            let img = document.getElementById('view-Details-show-IMG');
            img.setAttribute('src', select[1].firstElementChild.getAttribute('src'));
        }

        if((module) == ".question-delete-row"){

            viewque.classList.remove('remove-Delete');
            viewque.classList.add('Add-Delete');

            let Question = document.getElementById('question');
            let hiddenDelete = document.getElementById('hiddenDelete');

            Question.innerHTML = "Are You Sure To Delete This" + " " + select[2].innerText + " " + "?";
            hiddenDelete.value = select[0].innerText;

        }
        if((module) == ".Done-row"){

            viewque.classList.remove('remove-Delete');
            viewque.classList.add('Add-Delete');

            let Done = document.getElementById('Done');
            let DoneDelete = document.getElementById('DoneDelete');

            Done.innerHTML = "Are You Sure To Approve " + " " + select[2].innerText + " " + "?";
            DoneDelete.value = select[0].innerText;

        }

        if((module) == '.Edit-row'){

            viewque.classList.remove('remove-Delete');
            viewque.classList.add('Add-Delete');

            let EditID = document.getElementById('Edit-ID');
            let EditUsername = document.getElementById('Edit-Username');
            let EditFirstname = document.getElementById('Edit-First-name');
            let EditSecoundName = document.getElementById('Edit-Secound-name');
            let EditLastName = document.getElementById('Edit-Last-name');
            let Status = document.getElementById('Status');
            let Email = document.getElementById('Edit-Email');
            
            EditID.value = select[0].innerText;
            EditUsername.value = select[2].innerText;
            Status.value = select[4].innerText;
            Email.value = select[6].innerText;
            EditFirstname.value = select[7].innerText;
            EditSecoundName.value = select[8].innerText;
            EditLastName.value = select[9].innerText;
        }


    }

    $(document).ready(function(){
    
        $('.click-drop-burger-small').on('click',function(){
    
            $(this).parent().css({
                "left" : "-400px"
            })
            $('.Content-table').css({
                "padding-left" : "340px"
            })
    
            $('aside').css({
                "left" : "0px"
            })
    
        });
    
        $('.click-drop-burger-large').on('click',function(){
    
            $(this).parent().css({
                "left" : "-400px"
            })
            $('.Content-table').css({
                "padding-left" : "140px"
            })
    
            $('.mobile-header-dashbored').css({
                "left" : "0px"
            })
    
        });
    //     let table = $('#example').DataTable();
    //         $('#BTN_Deactivate_User').on('click', function() {
    //             //$("#BTN_Deactivate_User").attr("disabled", "disabled");
    //             var user_id = $('#hiddenDelete').val();
    //             $.ajax({
    //                 url: "Datebase/Action-By-Ajax/User-Mangement/Deactivate-User-Status.php",
    //                 type: "POST",
    //                 data: {
    //                     User_ID: user_id
    //                 },
    //                 cache: false,
    //                 success: function(dataResult) {
    //                     // alert('Success Deactivate User Status');
    //                     // console.log(dataResult);
    //                     $.get('Datebase/Action-By-Ajax/User-Mangement/GET-User-After-Action.php?User_ID=' + user_id, function (Data ,Status ,XHR) {
    //                         // console.log(JSON.parse(Data).HA_U_User_Status);
    //                         // console.log(Status);
    //                         // console.log(XHR.status);
    //                         if (XHR.status == 200) {
    //                             if (JSON.parse(Data).HA_U_User_Status == "Deactivated") {
    //                                 let row = document.querySelector('#T_Row_' + user_id).children[4];
    //                                 row.innerHTML = JSON.parse(Data).HA_U_User_Status;
    //                                 document.querySelector('#D' + user_id).remove();
    //                                 let hay = document.querySelector('#T_Row_' + user_id);
    //                                 table.row($(hay)).remove().draw(false);
    //                             }
    //                         }else{
    //                             // Code
    //                         }
    //                     });
    //                 }
    //             });
    //         });
    });


     

    // (function Removerow(){
    //     let stats = document.querySelectorAll('.Status');
    //     stats.forEach((item)=>{
    //         if(item.innerHTML == "Deactivated"){
    //             item.parentElement.remove();
    //         }
    //     });
    // })();
