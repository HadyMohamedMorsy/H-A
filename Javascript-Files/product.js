let SecoundSection = document.querySelector('.Secound-Section .row');
let setallvaluehere = "";
let drawprotectes;

fetch('API-Product.php')
    .then((response) => {
        return response.json();
    })
    .then((myJson) => {
            (drawprotectes = function(protectes = []) {
                    let protecteshtml = protectes.map((item) => {
                                return `
                    <div class="col-lg-3 Products">
                    <div class="product-content-img">
                        <a href="Product-Details.php?Product_ID=${item.Product_ID}" class="not-hover-image hover-image"> 
                                <img src=${item.Product_Path_Cover_Img + item.Product_Cover} alt="${item.Product_Name}" class="Image-cover ${item.Product_Imges.length == 0 ? `` : `disactive`}"/>
                                ${item.Product_Imges.length == 0 ? `` : `<img src=${item.Product_Path_Imges + item.Product_Imges[0]} alt='${item.Product_Name}' class='Image-secound active'/>`}
                        </a> 
                        <a class="Add-to-cart" id="${item.Product_ID}" onclick="funcIdcart(this.id , this)">
                            <p> Add To Cart </p>
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="chiled">
                            <h3><a href="products-show.php">${item.Product_Name}</a> </h3>
                            <p>${item.Product_Price}</p>
                        </div>
                        <div class="icon-here" onmouseleave="nullheart(this)" onmouseenter="heartfull(this)">
                            <div class="heart"  id="${item.Product_ID}" onclick="funcId(this.id,this)"> <i class="far fa-heart"></i> </div>
                            <div class="spinner-grow" role="status">
                                <span class="sr-only">Loading...</span>
                            </div>
                        </div>
                    </div>
                </div>
            `;
        });

        if(!protectes.length > 0){

            SecoundSection.innerHTML = `<div class="product-empty"> Sorry We dont have Items on Our Website </div>`;

        }else{

            SecoundSection.innerHTML = protecteshtml.join("");
        }

    })(myJson|| protectes);

    let prdoucts = document.querySelectorAll('.Products');

    
    function hideen(){

        for(let x = 0; x < 8; x++){

            prdoucts[x].classList.add('show-item')

        }

        for(let y = 0; y < prdoucts.length; y++){

            if(!prdoucts[y].classList.contains('show-item')){

                prdoucts[y].style.display = 'none';

            }
        }
    
    }

    hideen();

    

    let buttonload = document.querySelector('.button-load');

    buttonload.addEventListener('click', condetionload);


    function condetionload(e){

        e.preventDefault();

        for(let z = 0; z < prdoucts.length; z++){

            if(!prdoucts[z].classList.contains('show-item')){

                prdoucts[z].style.display = 'block';

            }
        }

        buttonload.style.display = "none";

    }

    
        let Imagesecounds = document.querySelectorAll('.hover-image');


        Imagesecounds.forEach((item)=>{

            if(item.childElementCount < 2){


                item.classList.add('.not-hover-image');

                item.classList.remove('.hover-image');


            }else{

                item.classList.remove('.not-hover-image');

                item.classList.add('.hover-image');

                let secoundchild = item.querySelector('.Image-secound');

                secoundchild.classList.add('active');

                item.firstElementChild.classList.add('.disactive');

            

            }

        });


    });


let clickfilter = document.querySelector('.click-filter');

let close = document.querySelector('.et-close');
close.addEventListener("click", function() {
    clickfilter.style.top = "100%";
    clickfilter.style.left = "100%";
    clickfilter.style.right = "100%";
    clickfilter.style.bottom = "100%";
});
let filterdone = document.querySelector('.filter-done');

filterdone.addEventListener("click", function() {
    clickfilter.style.top = "0%";
    clickfilter.style.left = "0%";
    clickfilter.style.right = "0%";
    clickfilter.style.bottom = "0%";

});

function heartfull(x) {
    x.firstElementChild.innerHTML = "<i class='fas fa-heart'></i>";
  }

  function nullheart(x) {
    x.firstElementChild.innerHTML = "<i class='far fa-heart'></i>";

  }

  $(document).ready(function(){
    
    $('.shop-display').on('click',function(){
        
        $(this).siblings().removeClass('active');

        $(this).addClass('active');


    });


 });



    function changeclass(change){
        let Products = document.querySelectorAll('.Products');
        if(change.getAttribute('data-display') == ".small"){
            Products.forEach((item)=>{
                item.classList.remove('col-lg-3');
                item.classList.add(`col-lg-4`);
            });
            
        }else{
            Products.forEach((item)=>{
                item.classList.add('col-lg-3');
                item.classList.remove(`col-lg-4`);
            });
        }
    }


