

    function clickhere(id){
        let module = document.getElementById(id).getAttribute("data-module");

        if((module) == ".View-row"){

            let  select = document.getElementById(id).parentElement.parentElement.children;
            let viewque = document.querySelector(module);

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


    }