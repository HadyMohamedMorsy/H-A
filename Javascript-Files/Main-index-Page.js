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
    $('.Dashbored').on("click",function(e){

        e.preventDefault();

        $('.right-Edit').removeClass("none-Dashbored");

        $('.Edit-profile').addClass("none-Dashbored");



    });

    $('.Edit-profile').on("click",function(e){

        e.preventDefault();

        $('.right-Edit').removeClass("none-Dashbored");

        $('.right-Edit').addClass("none-Dashbored");


    });
});



