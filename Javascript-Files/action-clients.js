

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;

        if((module) == ".View-row"){

            let img = document.getElementById('view-Details-show-IMG');
            let Name = document.getElementById('view-Details-show-name');
            let Fullname = document.getElementById('view-Details-show-FullName');
            let gender = document.getElementById('view-Details-show-Gender');
            let status = document.getElementById('view-Details-show-Status');
            let Login = document.getElementById('view-Details-show-Login');
            let Purchase = document.getElementById('view-Details-show-Purchase');
            let Created = document.getElementById('view-Details-show-Created');
            let Birthday = document.getElementById('view-Details-show-Birthday');
            let Country = document.getElementById('view-Details-show-Country');
            let ZIP = document.getElementById('view-Details-show-ZIP');
            let Address = document.getElementById('view-Details-show-Address');
            let Mobile = document.getElementById('view-Details-show-Mobile');
            let Email = document.getElementById('view-Details-show-Email');
            let ID = document.getElementById('view-Details-show-ID');


            viewque.classList.remove('remove-Delete');


            img.setAttribute('src', select[1].firstElementChild.getAttribute('src'));
            ID.innerHTML = select[0].innerText;
            Name.innerHTML = select[2].innerText;
            Fullname.innerHTML = select[3].innerText;
            gender.innerHTML = select[4].innerText;
            status.innerHTML = select[5].innerText;
            Login.innerHTML = select[6].innerText;
            Purchase.innerHTML = select[7].innerText;
            Created.innerHTML = select[8].innerText;
            Birthday.innerHTML = select[9].innerText;
            Country.innerHTML = select[10].innerText;
            ZIP.innerHTML = select[11].innerText;
            Address.innerHTML = select[12].innerText;
            Mobile.innerHTML = select[13].innerText;
            Email.innerHTML = select[14].innerText;
 
        }
        if((module) == ".question-delete-row"){

            viewque.classList.remove('remove-Delete');

            let Question = document.getElementById('question');
            let hiddenDelete = document.getElementById('hiddenDelete');

            Question.innerHTML = "Are You Sure To Delete This" + " " + select[2].innerText + " " + "?";
            hiddenDelete.value = select[0].innerText;

        }

        if((module) == '.Edit-row'){

            viewque.classList.remove('remove-Delete');

            let EditID = document.getElementById('Edit-ID');
            let EditUsername = document.getElementById('Edit-Username');
            let EditZIP = document.getElementById('Edit-ZIP');
            let EditAddress = document.getElementById('Edit-Address');
            let EditMobileNumber = document.getElementById('Edit-Mobile-Number');
            let EditEmail = document.getElementById('Edit-Email');
            let EditFullName = document.getElementById('Edit-FullName');
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
            EditFullName.value = select[3].innerText;
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
        }


    }