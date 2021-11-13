let SecoundSection = document.querySelector('.Secound-Section .row');
let setallvaluehere = "";
let drawprotectes;
let gridicon = document.querySelector('.grid-icon');
let smallicon = document.querySelector('.small-icon');
let listicon = document.querySelector('.list-icon');

if(listicon.classList.contains('active')){
    console.log('sara')
}

fetch('API-Product.php')
    .then((response) => {
        return response.json();
    })
    .then((myJson) => {

    (drawprotectes = function (protectes = []) {
        let protecteshtml = protectes.map((item)=>{
            if(gridicon.classList.contains('active')){
                return `
                    <div class="col-lg-3 Products">
                    <div class="product-content-img">
                    <a href="#" class="hover-image"> 
                            <img src=${item.Product_Path_Cover_Img + item.Product_Cover} alt="${item.Product_Name}" class="Image-cover disactive"/>
                            ${item.Product_Imges ? `<img src=${item.Product_Path_Imges + item.Product_Imges[0]} alt='${item.Product_Name}' class='Image-secound active'/>`: ""}
                        </a> 
                        <a class="Add-to-cart" id="${item.Product_ID}" onclick="funcIdcart(this.id)">
                            <p> Add To Cart </p>
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="chiled">
                            <h3><a href="#">${item.Product_Name}</a> </h3>
                            <p href="#">${item.Product_Price}</p>
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
            }
        });
        if(!protectes.length > 0){

            SecoundSection.innerHTML = `<div class="product-empty"> Sorry We dont have Items on Our Website </div>`;

        }else{
            SecoundSection.innerHTML = protecteshtml.join("");
        }



    })(myJson|| protectes);
    

    changedom(myJson);
    
    function changedom(address){
        let protecteshtml = protectes.map((item)=>{
                return `
                    <div class="col-lg-5 Products grid show">
                    <div class="product-content-img">
                    <a href="#" class="hover-image"> 
                            <img src=${item.Product_Path_Cover_Img + item.Product_Cover} alt="${item.Product_Name}" class="Image-cover"/>
                            ${item.Product_Imges ? `<img src=${item.Product_Path_Imges + item.Product_Imges[0]} alt='${item.Product_Name}' class='Image-secound'/>`: ""}
                        </a> 
                        <a class="Add-to-cart" id="${item.Product_ID}" onclick="funcIdcart(this.id)">
                            <p> Add To Cart </p>
                        </a>
                    </div>
                    <div class="product-content">
                        <div class="chiled">
                            <h3><a href="#">${item.Product_Name}</a> </h3>
                            <p href="#">${item.Product_Price}</p>
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


