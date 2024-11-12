document.addEventListener('DOMContentLoaded', function () {
    eventListener();

    toggleMode();
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

function toggleMode() {
    const prefiereDarkMode = window.matchMedia('(prefers-color-scheme-dark)');
    if (prefiereDarkMode.matches) {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
        
    prefiereDarkMode.addEventListener('change', function() {
        if (prefiereDarkMode.matches) {
            document.body.classList.add('dark-mode');
        } else {
            document.body.classList.remove('dark-mode');
        }
    });
 
    //console.log(prefiereDarkMode.matches);
        //Boton DarkMode
    const botonDarkMode = document.querySelector('.dark-mode-button');
    botonDarkMode.addEventListener('click', function(){
        document.body.classList.toggle('dark-mode'); 
 
        //Para que el modo elegido se quede guardado en local-storage
        if (document.body.classList.contains('dark-mode')) {
            localStorage.setItem('modo-oscuro','true');
        } else {
            localStorage.setItem('modo-oscuro','false');
        }
    });
 
    //Obtenemos el modo del color actual
    if (localStorage.getItem('modo-oscuro') === 'true') {
        document.body.classList.add('dark-mode');
    } else {
        document.body.classList.remove('dark-mode');
    }
    
}