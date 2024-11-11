document.addEventListener('DOMContentLoaded', function () {
    eventListener();
});

function eventListener() {
    const mobileMenu = document.querySelector('.mobile-menu');

    mobileMenu.addEventListener('click', toggleMenu);
}

function toggleMenu() {
    const navegacion = document.querySelector('.navegacion-principal');

    if (navegacion.classList.contains('mostrar'))
        navegacion.classList.remove('mostrar')
    else
        navegacion.classList.add('mostrar')

}