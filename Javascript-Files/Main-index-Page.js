$(document).ready(function(){
    $(window).scroll(function(){
        let navbar = $(".scroll");
       if($(window).scrollTop() > 2){
            navbar.addClass("navbar-scroll");
       }else{
            navbar.removeClass("navbar-scroll");
       }
    });
    //  we will edit it when we create arabic page
    $(".menu-burger" ).on( "click", function(){

        $('.left-menu').addClass("return-left-menu");

        $('.background-when-menu').addClass("background");

    });

    $(".cancel").on("click", function(){
        
        $('.left-menu').removeClass("return-left-menu");

        $('.background-when-menu').removeClass("background");

    });


    $('.Login-menu-burger').on("click",function(){

        $('.left-menu').removeClass("return-left-menu");

        $('.background-when-menu').removeClass("background");

        $('.Login-username').removeClass('Login-dissapered');

    });

    $('.login').on("click",function(){

        $('.Login-username').removeClass('Login-dissapered');

    });

    $('.login-cancel').on("click",function(){

        $('.Login-username').addClass('Login-dissapered');

    });

    $('.sign-cancel').on("click",function(){

        $('.sign-username').addClass('Sign-dissapered');

    });

    $('.Sign').on("click",function(){

        $('.sign-username').removeClass('Sign-dissapered');

    });
 
    $('.cancel_search-cancel').on("click",function(){

        $('.bob-search').addClass("bob-search-remove");

        $('.with-search').addClass("with-search-remove");

    });

    $('.cancel_search-cancel').on("click",function(){

        $('.bob-search').addClass("bob-search-remove");

        $('.with-search').addClass("with-search-remove");

    });

    $('.search-nav').on("click",function(e){

        e.preventDefault();

        $('.bob-search').removeClass("bob-search-remove");

        $('.with-search').removeClass("with-search-remove");

    });

    $('.select a').on('click',function(e){

        $(this).parent().siblings().next().removeClass('menu-links-active');

        $(this).addClass('menu-links-active');

    });


});

let cureentlocation = location.href;

const menyItems = document.querySelectorAll('.select');

const len = menyItems.length;

for(let i = 0; i< len; i++){

    if(menyItems[i].firstElementChild.href === cureentlocation){

        menyItems[i].firstElementChild.classList.add("menu-links-active");

    }else{

        menyItems[i].firstElementChild.classList.remove("menu-links-active");
    }
}



let cartlistcancel = document.querySelector('.se-cancel');
let openpluscart = document.querySelector('.open-plus-cart');
let cartlist = document.querySelector('.cart-list');
let cart = document.querySelector('.cart');

cartlistcancel.addEventListener("click",function(){

    cart.classList.remove('actioncart');

    cartlist.classList.remove('actioncartlist');
  });

  openpluscart.addEventListener("click",function(){
    cart.classList.add('actioncart');

    cartlist.classList.add('actioncartlist');
  });

//   });

  let animationscroll = document.querySelectorAll('.animation-scroll');


window.addEventListener('scroll',()=>{

    animationscroll.forEach((item)=>{

        let contentPosition = item.getBoundingClientRect().top;

        let screenposition = window.innerHeight;

        if(contentPosition < screenposition){

            item.classList.add('active');

        }else{

            item.classList.remove('active');
        }

    });
});


