

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
            let ID = document.getElementById('ID');
            
            parent.value = select[1].innerText;
            Chiled.value = select[2].innerText;
            user.value = select[6].innerText;
            ID.value = select[0].innerText;

        }


    }

    let chech = document.getElementById('chech');
    
    let Parent = document.getElementById('Parent-cataroy');

    chech.addEventListener('click',()=>{
        if (chech.checked == true) {
            Parent.removeAttribute('disabled');
        }else{
            Parent.setAttribute('disabled', true);
            Parent.value = "";
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