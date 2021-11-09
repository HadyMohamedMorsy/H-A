let aboutus = "Air winged, above, seed whales face so void which so. Fish bring light blessed, midst light set and us rule said dominion";
let count = 0;
let newstring = "";
let abouttext = document.querySelector('.about-us');

setInterval(()=>{

    newstring = aboutus.slice(0, count);

    if (count > aboutus.length) {
        count = 0;

    } else {
        count++;
    }

    abouttext.innerText = newstring;

}, 100);

let counts = document.querySelectorAll('.count');

let speed = 400;

window.addEventListener('scroll',()=>{

    counts.forEach((item)=>{

        let contentPosition = item.getBoundingClientRect().top;

        let screenposition = window.innerHeight;

        let updatCount = ()=>{

            let target =  +item.getAttribute('data-count');

            let counter = +item.innerText;

            let inc = target / speed;

            if(counter < target){

                item.innerText = counter + inc;

                setTimeout(updatCount , 200);

            }else{

                counter.innerText = target;
            }

        }

        if(contentPosition < screenposition){

            updatCount();
            
        }

    });
});

