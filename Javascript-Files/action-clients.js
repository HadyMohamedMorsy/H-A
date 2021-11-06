

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
            let EditZIP = document.getElementById('Edit-ZIP');
            let EditAddress = document.getElementById('Edit-Address');
            let EditMobileNumber = document.getElementById('Edit-Mobile-Number');
            let EditEmail = document.getElementById('Edit-Email');
            let EditFirstname = document.getElementById('Edit-First-name');
            let Editsecoundname = document.getElementById('Edit-Secound-name');
            let Editlastname = document.getElementById('Edit-Last-name');
            let EditBirthday = document.getElementById('Edit-Birthday');
            let Country = document.getElementById('Edit-Country');
            let Gender = document.getElementById('Gender');
            let Status = document.getElementById('Status');
            
            EditID.value = select[0].innerText;
            EditUsername.value = select[2].innerText;
            EditZIP.value = select[11].innerText;
            EditAddress.value = select[12].innerText;
            EditMobileNumber.value = select[13].innerText;
            EditEmail.value = select[14].innerText;

            // date
            let date = select[9].innerText;
            let datebirthday = new Date(date);
            let Year = datebirthday.getFullYear();
            let Month = datebirthday.getMonth()+1;
            let day = String(datebirthday.getDate());
            let finalDate = Year+ '-' + Month + '-' + day;
            // date
            EditBirthday.value = finalDate;
            Country.value = select[10].innerText;
            Gender.value = select[4].innerText;
            Status.value = select[5].innerText;

            EditFirstname.value = select[15].innerText;
            Editsecoundname.value = select[16].innerText;
            Editlastname.value = select[17].innerText;
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