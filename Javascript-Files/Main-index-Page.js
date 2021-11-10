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

const cureentlocation = location.href;

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
    cart.style.top = "100%";
    cart.style.left = "100%";
    cart.style.right = "100%";
    cart.style.bottom = "100%";

    cartlist.style.right = "-100%";
  });

  openpluscart.addEventListener("click",function(){
    cart.style.top = "0%";
    cart.style.left = "0%";
    cart.style.right = "0%";
    cart.style.bottom = "0%";
    
    cartlist.style.right = "0%";
  });

// let SignINclose = document.querySelector('.login-cancel');
// let SignINopen = document.querySelector('.login');
// let contentSign = document.querySelector('.Login-user');
// let ParentSign = document.querySelector('.Login-username');

// SignINclose.addEventListener("click",function(){
//     ParentSign.style.top = "100%";
//     ParentSign.style.left = "100%";
//     ParentSign.style.right = "100%";
//     ParentSign.style.bottom = "100%";

//     contentSign.style.top = "-200%";
//     contentSign.style.left = "-200%";
//   });

//   SignINopen.addEventListener("click",function(){
//     ParentSign.style.top = "0%";
//     ParentSign.style.left = "0%";
//     ParentSign.style.right = "0%";
//     ParentSign.style.bottom = "0%";
    
//     contentSign.style.top = "50%";
//     contentSign.style.left = "50%";
//   });

// let SignINout = document.querySelector('.sign-cancel');
// let Signoutopen = document.querySelector('.Sign');
// let contentSignout = document.querySelector('.sign-user');
// let ParentSignout = document.querySelector('.sign-username');

// SignINout.addEventListener("click",function(){
//     ParentSignout.style.top = "100%";
//     ParentSignout.style.left = "100%";
//     ParentSignout.style.right = "100%";
//     ParentSignout.style.bottom = "100%";

//     contentSignout.style.top = "-200%";
//     contentSignout.style.left = "-200%";
//   });

//   Signoutopen.addEventListener("click",function(){
//     ParentSignout.style.top = "0%";
//     ParentSignout.style.left = "0%";
//     ParentSignout.style.right = "0%";
//     ParentSignout.style.bottom = "0%";
    
//     contentSignout.style.top = "50%";
//     contentSignout.style.left = "50%";
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

