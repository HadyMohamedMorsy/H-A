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

    $('.login').on("click", function(e){
        e.preventDefault();

        $('.Login-username').removeClass('Login-dissapered');


    });

    $('.Sign').on("click", function(e){
        
        e.preventDefault();

        $('.sign-username').removeClass('Sign-dissapered');


    });

    $('.login-cancel').on("click",function(){

        $('.Login-username').addClass('Login-dissapered');

    });

    $('.sign-cancel').on("click",function(){

        $('.sign-username').addClass('Sign-dissapered');

    })

    $('.Login-menu-burger').on("click",function(){

        $('.left-menu').removeClass("return-left-menu");

        $('.background-when-menu').removeClass("background");

        $('.Login-username').removeClass('Login-dissapered');

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


});


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

