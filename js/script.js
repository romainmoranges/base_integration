let bouton = document.getElementById('menu');
let menu = document.getElementsByTagName('nav')[0];

bouton.addEventListener('click', function () {
    menu.classList.toggle('undisplay');
})