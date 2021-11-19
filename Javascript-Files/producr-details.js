let sliderimg = document.querySelector('.slider-img');

let parentImage = document.querySelector('.Images-slider img');


let changeImage = document.querySelector('.Images-slider img').getAttribute('src');

let rightarrow = document.querySelector('.right-arrow');

let leftarrow = document.querySelector('.left-arrow');


if(sliderimg.childElementCount > 0){

    sliderimg.firstElementChild.firstElementChild.classList.add('active');

    let divimages = sliderimg.querySelectorAll('.img-slider');

    let arrayimage = [...divimages];

    let i = 0;

    divimages.forEach((item)=>{

        item.addEventListener('click',()=>{

            divimages.forEach((item)=>{

                item.firstElementChild.classList.remove('active');

            })

            item.firstElementChild.classList.add('active');

            if(item.firstElementChild.classList.contains("active")){

                parentImage.setAttribute('src', item.firstElementChild.getAttribute('src'));
            }


        });

    });

    
    if(changeImage == parentImage.getAttribute('src')){

        sliderimg.firstElementChild.firstElementChild.setAttribute('src',parentImage.getAttribute('src'));
    }

    rightarrow.addEventListener('click',()=>{

        i++;

        if(i > sliderimg.childElementCount - 1){

            i = 0;
        }


        parentImage.setAttribute('src', arrayimage[i].firstElementChild.getAttribute('src'));

        divimages.forEach((item)=>{

            item.firstElementChild.classList.remove('active');

        });


        arrayimage[i].firstElementChild.classList.add('active');


    });

    leftarrow.addEventListener('click',()=>{

        i--;

        if(i < 0){

            i = sliderimg.childElementCount - 1;

        }


        parentImage.setAttribute('src', arrayimage[i].firstElementChild.getAttribute('src'));

        divimages.forEach((item)=>{

            item.firstElementChild.classList.remove('active');

        });

        arrayimage[i].firstElementChild.classList.add('active');
    });

}else{

    rightarrow.style.display = 'none';

    leftarrow.style.display = 'none';
}

if(sliderimg.childElementCount == 1){

    rightarrow.style.display = 'none';

    leftarrow.style.display = 'none';

}

