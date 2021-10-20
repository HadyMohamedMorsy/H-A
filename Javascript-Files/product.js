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
