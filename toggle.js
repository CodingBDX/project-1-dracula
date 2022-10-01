const elsToggle = document.querySelector('.dark-light');
const elsEn = document.querySelector('.en');
const elsFr = document.querySelector('.fr');


elsToggle.addEventListener('click', function () {
    
    document.body.classList.toggle("light");
})

elsEn.addEventListener('click', function () {
    document.location.href = "indexEnglish.php";
})



elsFr.addEventListener('click', function () {
    document.location.href = "index.php";
})