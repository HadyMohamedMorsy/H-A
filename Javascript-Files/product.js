let SecoundSection = document.querySelector('.Secound-Section .row');
let setallvaluehere = "";

fetch('./json/products.json')
  .then((response) => {
    return response.json();
  })
  .then((myJson) => {
    myJson.Product.map(item => {
        setallvaluehere = 
        `<div class="col-lg-3 Products">
          <div class="product-content-img">
             <img src=${item.IMG} alt="${item.alt}" />
             <div class="icon-heart"> <i class="far fa-heart"></i> </div>
             <div class="icon-heart-full"> <i class="fas fa-heart"></i> </div>
              <div class="Add-to-cart">
                    <p> Add To Cart </p>
              </div>
          </div>
          <div class="product-content">
            <h3><a href="#">${item.name}</a> </h3>
            <span>${item.price}</span>
          </div>
        </div>`;
        SecoundSection.innerHTML += setallvaluehere;

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
