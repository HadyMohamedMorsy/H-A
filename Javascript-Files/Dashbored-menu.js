$(document).ready(function(){
    
    $('.list-of-dashbored li a').on('click',function(e){


        $(this).parent().siblings().removeClass('active');

        $(this).parent().addClass('active');

        $($(this).parent().attr('data-aside')).siblings().removeClass('active');

        $($(this).parent().attr('data-aside')).addClass('active');

    });

});

const cureentlocation = location.href;
const menyItems = document.querySelectorAll('.list-of-dashbored li');
const len = menyItems.length;

for(let i = 0; i< len; i++){
    if(menyItems[i].firstElementChild.href === cureentlocation){
        menyItems[i].classList.add("active");
    }else{
        menyItems[i].classList.remove("active");
    }
}