

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

                viewhere.innerHTML += "<li  class='col-lg-4'>" +  headerTable[i].innerHTML+ ":" + "<span>"+ select[i].innerText +"</span>" + "</li>";
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

            Question.innerHTML = "Are You Sure To Delete " + " " + select[2].innerText + " " + "?";
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
            let EditFirstname = document.getElementById('Edit-First-Name');
            let EditSecoundname = document.getElementById('Edit-Secound-Name');
            let EditLasrName = document.getElementById('Edit-Last-Name');
            let Status = document.getElementById('Status');
            
            EditID.value = select[0].innerText;
            EditUsername.value = select[2].innerText;
            EditFirstname.value = select[8].innerText;
            EditSecoundname.value = select[9].innerText;
            EditLasrName.value = select[10].innerText;
            Status.value = select[4].innerText;
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

});