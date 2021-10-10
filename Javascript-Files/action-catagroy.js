

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;

        console.log(select);

        if((module) == ".View-row"){

            let Parent = document.getElementById('view-Details-show-Ctagroy');
            let Child = document.getElementById('view-Details-show-Child');
            let Products = document.getElementById('view-Details-show-Products');
            let Sales = document.getElementById('view-Details-show-Sales');
            let Returns  = document.getElementById('view-Details-show-Returns');
            let User = document.getElementById('view-Details-show-Created');
            let Date = document.getElementById("view-Details-show-Date");


            viewque.classList.remove('remove-Delete');

            Parent.innerHTML = select[0].innerText;
            Child.innerHTML = select[1].innerText;
            Products.innerHTML = select[2].innerText;
            Sales.innerHTML = select[3].innerText;
            Returns.innerHTML = select[4].innerText;
            User.innerHTML = select[5].innerText;
            Date.innerHTML = select[6].innerText;
        }

        if((module) == ".question-delete-row"){

            viewque.classList.remove('remove-Delete');

            let Question = document.getElementById('question');
            let hiddenDelete = document.getElementById('hiddenDelete');

            Question.innerHTML = "Are You Sure To Delete This" + " " + select[0].innerText + " " + "?";
            hiddenDelete.value = select[0].innerText;

        }

        if((module) == '.Edit-row'){

            viewque.classList.remove('remove-Delete');

            let parent = document.getElementById('Edit-parent');
            let Chiled = document.getElementById('Edit-Chiled');
            let user = document.getElementById('Edit-user');
            
            parent.value = select[0].innerText;
            Chiled.value = select[1].innerText;
            user.value = select[5].innerText;

        }


    }

    let chech = document.getElementById('chech');
    
    let Parent = document.getElementById('Parent-cataroy');

    chech.addEventListener('click',()=>{
        if (chech.checked == true) {
            Parent.removeAttribute('disabled');
        }else{
            Parent.setAttribute('disabled', true);
        }
    });

    let Add = document.getElementById('Add');

    let DeleteCatgroy = document.getElementById('Delete-Catgroy');

    Add.addEventListener('click',function(){
        
        let id = document.getElementById("Add").getAttribute("data-Catagroy");

        let select = document.querySelector(id);
    
        select.classList.remove('remove-Delete');

    });

    DeleteCatgroy.addEventListener('click',function(){
        
        let id = document.getElementById("Delete-Catgroy").getAttribute("data-Catagroy");

        let select = document.querySelector(id);
    
        select.classList.add('remove-Delete');

    })

