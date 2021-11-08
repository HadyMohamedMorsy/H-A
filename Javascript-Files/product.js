let SecoundSection = document.querySelector('.Secound-Section .row');
let setallvaluehere = "";

fetch('API-Product.php')
  .then((response) => {
    return response.json();
  })
  .then((myJson) => {
    myJson.map(item => {
        setallvaluehere = 
        `<div class="col-lg-3 Products">
              <div class="product-content-img">
               <a href="#"> <img src=${item.Product_Path_Cover_Img + item.Product_Cover} alt="${item.Product_Name}" /> </a> 
                <div class="icon-heart"> <i class="far fa-heart"></i> </div>
                <a href="#" class="Add-to-cart">
                      <p href="#"> Add To Cart </p>
                </a>
              </div>
              <div class="product-content">
                  <h3><a href="#">${item.Product_Name}</a> </h3>
                  <p href="#">${item.Product_Price}</p>
              </div>
        </div>`;
        SecoundSection.innerHTML += setallvaluehere;

    });

    let iconheart = document.querySelectorAll('.icon-heart');
    
    iconheart.forEach((item)=>{

      item.onmouseout = function(e) {

        e.currentTarget.classList.remove('icon-heart');

        e.currentTarget.classList.add('icon-heart-fill');

    }

      item.onmouseover = function(e) {

        if(item.classList.contains("icon-heart")){

          e.currentTarget.firstElementChild.classList.remove('far');

          e.currentTarget.firstElementChild.classList.add('fas');

        }else{

          e.currentTarget.firstElementChild.classList.add('far');

          e.currentTarget.firstElementChild.classList.remove('fas');

        }
      }


    });


  });
  let clickfilter = document.querySelector('.click-filter');

  let close = document.querySelector('.et-close');
  close.addEventListener("click",function(){
    clickfilter.style.top = "100%";
    clickfilter.style.left = "100%";
    clickfilter.style.right = "100%";
    clickfilter.style.bottom = "100%";
  });
  let filterdone = document.querySelector('.filter-done');

  filterdone.addEventListener("click",function(){
    clickfilter.style.top = "0%";
    clickfilter.style.left = "0%";
    clickfilter.style.right = "0%";
    clickfilter.style.bottom = "0%";

  });
