

    function clickhere(id){

        let module = document.getElementById(id).getAttribute("data-module");

        let viewque = document.querySelector(module);

        let  select = document.getElementById(id).parentElement.parentElement.children;

        let viewhere = document.querySelector('.view-here');

        if((module) == ".View-row"){

            viewque.classList.remove('remove-Delete');

            let headerTable = document.querySelectorAll('.header-table th');

            let newtable = headerTable.length-2;

            for(let i =0; i<=newtable; i++){

                viewhere.innerHTML += "<li>" +  headerTable[i].innerHTML+ ":" + "<span>"+ select[i].innerText +"</span>" + "</li>";
            }

            let newviewhere = document.querySelectorAll(".view-here li");

            newviewhere[1].remove();

            let img = document.getElementById('view-Details-show-IMG');
            
            img.setAttribute('src', select[1].firstElementChild.getAttribute('src'));
        }

        if((module) == ".question-delete-row"){

            viewque.classList.remove('remove-Delete');

            let Question = document.getElementById('question');
            let hiddenDelete = document.getElementById('hiddenDelete');

            Question.innerHTML = "Are You Sure To Delete This" + " " + select[2].innerText + " " + "?";
            hiddenDelete.value = select[0].innerText;

        }
        if((module) == ".Done-row"){

            viewque.classList.remove('remove-Delete');

            let Done = document.getElementById('Done');
            let DoneDelete = document.getElementById('DoneDelete');

            Done.innerHTML = "Are You Sure To Approve " + " " + select[2].innerText + " " + "?";
            DoneDelete.value = select[0].innerText;

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