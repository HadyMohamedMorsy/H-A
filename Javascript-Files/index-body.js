const slidersContent = document.querySelector('.per-image-tes');

const slidersImges = document.querySelectorAll('.per-image-tes .cont-flex-test');

const next = document.querySelector('.right');

const prev = document.querySelector('.left');

let circle = document.querySelector('.curosel-circle');

for(let i = 0; i < slidersImges.length - 2; i++){

    let span = document.createElement('span');

    span.setAttribute('data-index', i);

    span.setAttribute('class', "circle");

    circle.appendChild(span);
}

circle.firstElementChild.classList.add('active');

let circlespan = document.querySelectorAll('.curosel-circle span');


let current = 1;

let index = 0;



const size = slidersImges[0].clientWidth;


slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

console.log(size);


next.addEventListener('click', () => {
    if (current >= slidersImges.length - 1) return;
    slidersContent.style.transition = 'transform 0.4s ease-in-out';
    current++;
    index++;
    slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

    circlespan.forEach((element) =>{
        element.classList.remove('active')
    
    });

    if(index > 1){

        index = 0;
    }

    circlespan[index].classList.add('active');

    console.log(current);


});

prev.addEventListener('click', () => {
    if (current <= 0) return;

    slidersContent.style.transition = 'transform 0.4s ease-in-out';

    current--;

    index--;

    slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

    circlespan.forEach((element) =>{
        element.classList.remove('active')
    
    });

    if(index < 0){

        index = 1;
    }

    circlespan[index].classList.add('active');

    console.log(current);

});
for (var i = 0; i < circlespan.length; i++) {
    circlespan[i].onclick = function() {

        current = parseInt(this.getAttribute('data-index')) + 1;

        index = current - 1;

        slidersContent.style.transition = 'transform 0.4s ease-in-out';

        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

        console.log(current);

        circlespan.forEach((element) =>{

            element.classList.remove('active');
        
        });

        this.classList.add('active');
    }
}

function myFunction() {
    setInterval(function(){

        if (current >= slidersImges.length - 1) return;

        current++;

        index++;

        slidersContent.style.transition = 'transform 0.4s ease-in-out';

        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';

        circlespan.forEach((element) =>{

            element.classList.remove('active');
        
        });

        if(index > 1){

            index = 0;
        }

        circlespan[index].classList.add('active');
       
    }, 5000);
 }
 myFunction();
slidersContent.addEventListener('transitionend', () => {
    if (slidersImges[current].id === "last-clone") {
        slidersContent.style.transition = 'none';
        current = slidersImges.length - 2;
        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';
    }
    if (slidersImges[current].id === "first-clone") {
        slidersContent.style.transition = 'none';
        current = slidersImges.length - current;
        slidersContent.style.transform = 'translateX(' + (-size * current) + 'px)';
    }
});


