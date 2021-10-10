

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;


        if((module) == ".View-row"){

            let img = document.getElementById('view-Details-show-IMG');
            let UserName = document.getElementById('view-Details-show-name');
            let Fullname = document.getElementById('view-Details-show-FullName');
            let status = document.getElementById('view-Details-show-Status');
            let Join = document.getElementById('view-Details-show-Date-Join');
            let Email = document.getElementById('view-Details-show-Email');
            let ID = document.getElementById('view-Details-show-ID');


            viewque.classList.remove('remove-Delete');


            img.setAttribute('src', select[1].firstElementChild.getAttribute('src'));
            ID.innerHTML = select[0].innerText;
            UserName.innerHTML = select[2].innerText;
            Fullname.innerHTML = select[3].innerText;
            status.innerHTML = select[4].innerText;
            Join.innerHTML = select[5].innerText;
            Email.innerHTML = select[6].innerText;
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
            let EditFullName = document.getElementById('Edit-FullName');
            let Status = document.getElementById('Status');
            let Email = document.getElementById('Edit-Email');
            
            EditID.value = select[0].innerText;
            EditUsername.value = select[2].innerText;
            EditFullName.value = select[3].innerText;
            Status.value = select[4].innerText;
            Email.value = select[6].innerText;
        }


    }