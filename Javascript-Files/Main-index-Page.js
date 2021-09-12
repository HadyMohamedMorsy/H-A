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

        $('.left-menu').addClass("translate");

        $('.background-when-menu').addClass("background");

    });

    $(".cancel").on("click", function(){
        
        $('.left-menu').removeClass("translate");

        $('.background-when-menu').removeClass("background");

    });

    $('.login').on("click", function(e){
        e.preventDefault();

        $('.Login-username').removeClass('Login-dissapered');


    });

    $('.login-cancel').on("click",function(){

        $('.Login-username').addClass('Login-dissapered');

    })

    $('.Login-menu-burger').on("click",function(){

        $('.left-menu').removeClass("translate");

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