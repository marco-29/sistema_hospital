// Obtiene el elemento del splash screen
var splashScreen = document.getElementById('splashScreen');

// Espera a que termine la animación de transición
splashScreen.addEventListener('transitionend', function(event) {
    // Verifica que el evento de transición sea para la opacidad
    if (event.propertyName === 'opacity') {
        // Oculta el splash screen
        splashScreen.style.display = 'none';
    }
});

// Simula el tiempo de carga (puedes ajustar el tiempo según tus necesidades)
setTimeout(function() {
    // Agrega la clase para iniciar la animación de desaparición
    splashScreen.classList.add('hidden');
}, 2000); // 2000 milisegundos (2 segundos) en este caso