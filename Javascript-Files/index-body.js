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

    qty.innerHTML = +qty.innerHTML + 1;

    });

})

min.forEach((item)=>{

    item.addEventListener('click',function(){

    let qty = item.parentElement.querySelector('.Qty');

    qty.innerHTML = +qty.innerHTML - 1;

    });

})