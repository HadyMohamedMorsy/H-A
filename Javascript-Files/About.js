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

}, 100)