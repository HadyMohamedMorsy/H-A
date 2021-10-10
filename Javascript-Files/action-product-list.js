

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;

        console.log(select);

        if((module) == ".View-row"){

            let img = document.getElementById('view-Details-show-IMG');
            let ID = document.getElementById('view-Details-show-ID');
            let IDCatagroy = document.getElementById('view-Details-show-ID-catagory');
            let Name = document.getElementById('view-Details-show-Name');
            let NameCatagroy = document.getElementById('view-Details-show-Name-Catagroy');
            let QTY = document.getElementById('view-Details-show-Qty');
            let Price = document.getElementById('view-Details-show-Price');
            let Status = document.getElementById("view-Details-show-Status");
            let AlertQty = document.getElementById('view-Details-show-Alert');
            let Brand = document.getElementById('view-Details-show-Brand');
            let Avalible = document.getElementById('view-Details-show-Avalible');
            let Created = document.getElementById('view-Details-show-Created');
            let Description = document.getElementById('view-Details-show-Description');
            let UserName = document.getElementById('view-Details-show-UserName');


            viewque.classList.remove('remove-Delete');


            img.setAttribute('src', select[1].firstElementChild.getAttribute('src'));
            ID.innerHTML = select[0].innerText;
            IDCatagroy.innerHTML = select[7].innerText;
            Name.innerHTML = select[2].innerText;
            NameCatagroy.innerHTML = select[3].innerText;
            QTY.innerHTML = select[4].innerText;
            Price.innerHTML = select[5].innerText;
            Status.innerHTML = select[6].innerText;
            AlertQty.innerHTML = select[8].innerText;
            Brand.innerHTML = select[9].innerText;
            Avalible.innerHTML = select[10].innerText;
            Created.innerHTML = select[11].innerText;
            Description.innerHTML = select[13].innerText;
            UserName.innerHTML = select[12].innerText;
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

            let EditID = document.getElementById('Edit-id');
            let EditIDcatagoy = document.getElementById('Edit-id-catagroy');
            let Namecatagoy = document.getElementById('Edit-Name-catagroy');
            let NameProduct = document.getElementById('Edit-Name');
            let QTY = document.getElementById('Edit-QTY');
            let Price = document.getElementById('Edit-price');
            let Alert = document.getElementById('Edit-Alert');
            let Brand = document.getElementById('Edit-Brand');
            let UserCreated = document.getElementById('Edit-User-Created');
            let Description = document.getElementById('Edit-Description');
            
            EditID.value = select[0].innerText;
            EditIDcatagoy.value = select[7].innerText;
            Namecatagoy.value = select[3].innerText;
            NameProduct.value = select[2].innerText;
            QTY.value = select[4].innerText;
            Price.value = select[5].innerText;
            Alert.value = select[8].innerText;
            Brand.value = select[9].innerText;
            UserCreated.value = select[12].innerText;
            Description.value = select[13].innerText;

        }


    }