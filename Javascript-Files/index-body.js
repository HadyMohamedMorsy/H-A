let allcontentcart = document.querySelector('.all-content-cart');


let openpluscartremove = document.querySelector('.open-plus-cart');

if(window.location == "http://localhost/H-A/cart.php"){

    openpluscartremove.remove();

}

if(allcontentcart.childElementCount == 0){

   let created =  document.createElement('span');

   created.classList.add('no-items');

   let contentcreated = document.createTextNode('there is no items here');

   created.appendChild(contentcreated);

   allcontentcart.appendChild(created);
   

}

let plus = allcontentcart.querySelectorAll('.plus');

let min = allcontentcart.querySelectorAll('.min');

plus.forEach((item)=>{

    item.addEventListener('click',function(){

    let qty = item.parentElement.querySelector('.Qty');

    let Total = item.parentElement.querySelector('.price-cart .Number-format');

    qty.innerHTML = +qty.innerHTML + 1;

    let totalprice = parseInt(Total.innerHTML) * parseInt(qty.innerHTML);

    Total.innerHTML = totalprice;


    });

})

min.forEach((item)=>{

    item.addEventListener('click',function(){

    let qty = item.parentElement.querySelector('.Qty');
    
    let Total = item.parentElement.querySelector('.price-cart');

    qty.innerHTML = +qty.innerHTML - 1;

    Total.innerHTML = +Total.innerHTML * qty.innerHTML;

    if(qty.innerHTML < 1){

        qty.innerHTML  = 1

    }

    });

})