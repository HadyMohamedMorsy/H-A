let SecoundSection = document.querySelector('.Secound-Section .row');
let setallvaluehere = "";

fetch('./json/products.json')
  .then((response) => {
    return response.json();
  })
  .then((myJson) => {
    myJson.Product.map(item => {
        setallvaluehere = 
        `<div class="${item.col} Products">
            <img src=${item.IMG} alt="${item.alt}" />
            <p>${item.name}</p>
            <span>${item.price}</span>
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
