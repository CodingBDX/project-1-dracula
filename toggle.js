const elsToggle = document.querySelector('.dark-light');
const elsEn = document.querySelector('.en');
const elsFr = document.querySelector('.fr');

let mySound = new Audio('thunder.wav');
let mySoundBackground = new Audio('halloween.mp3');
mySoundBackground.loop = true;
mySoundBackground.volume = 0.2;
addEventListener('load', (event) => {
mySoundBackground.play();    
});
onload = (event) => { };
elsToggle.addEventListener('click', function () {
    
    document.body.classList.toggle("light");
    window.document.body.classList.toggle("blink");
    mySound.play();
    mySound.volume = 0.50;
    
})
