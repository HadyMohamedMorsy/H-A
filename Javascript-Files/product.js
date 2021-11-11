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
                <div class="icon-heart" id="${item.Product_ID}" onclick="funcId(this.id)"> <i class="far fa-heart"></i> </div>
                <a class="Add-to-cart" id="${item.Product_ID}Cart" onclick="funcIdcart(this.id)">
                      <p> Add To Cart </p>
                </a>
              </div>
              <div class="product-content">
                  <h3><a href="#">${item.Product_Name}</a> </h3>
                  <p href="#">${item.Product_Price}</p>
              </div>
        </div>`;
            SecoundSection.innerHTML += setallvaluehere;

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

function funcIdcart(id){
    
    alert(id);
}