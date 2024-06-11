$(document).ready(function(){

    // Función para verificar y actualizar el progreso solo una vez
    function actualizarProgresoUnaVez(clave) {
        if (!localStorage.getItem(clave)) {
            // No se ha actualizado antes, proceder con la actualización
            $.ajax({
                url: 'aprende/actualizar_progreso',
                method: 'POST',
                dataType: 'json',
                success: function(response) {
                    if (response.status === 'success') {
                        // actualizarBarraProgreso();
                    }
                    // Marcar como actualizado
                    localStorage.setItem(clave, 'true');
                    // Redirigir a la siguiente vista después de un breve retraso
                    setTimeout(function() {
                        window.location.href = clave;
                    }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
                }
            });
        } else {
            // Ya se ha actualizado, simplemente redirigir
            setTimeout(function() {
                window.location.href = clave;
            }, 500); // Retraso de 0.5 segundos para redirigir
        }
    }

    $('#siguiente').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('e'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'e';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'e';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });

    $('#siguiente2').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('i'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'i';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'i';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });
    $('#siguiente3').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('o'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'o';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'o';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });
    $('#siguiente4').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('u'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'u';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'u';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });
    $('#siguiente5').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('b'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'b';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'b';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });
    $('#siguiente6').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('c'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'c';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'c';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });
    $('#siguiente7').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('d'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'd';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = 'd';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });

    $('#siguiente8').click(function(e){
        e.preventDefault();
        actualizarProgresoUnaVez('../menu'); // Clave única para este botón

        // $.ajax({
        //     url: 'aprende/actualizar_progreso',
        //     method: 'POST',
        //     dataType: 'json',
        //     success: function(response) {
        //         if(response.status === 'success') {
        //             // actualizarBarraProgreso();

        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = '../menu';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         } else {
        //             // Redirigir a la siguiente vista después de un breve retraso
        //             setTimeout(function(){
        //                 window.location.href = '../menu';
        //             }, 500); // Retraso de 0.5 segundos para actualizar la barra de progreso antes de redirigir
        //         }
        //     }
        // });
    });

    // Función para cerrar sesión
    function cerrarSesion() {
        // Borrar todo el localStorage
        localStorage.clear();
        // Redirigir a la página de inicio de sesión o de cierre de sesión
        window.location.href = 'login'; // Ajusta esta URL según tu aplicación
    }

    // Asociar la función cerrarSesion con el botón de cerrar sesión
    $('#cerrarSesion').click(function(e) {
        e.preventDefault();
        cerrarSesion();
    });

    function actualizarBarraProgreso() {
        var progressBar = $('#progress-bar');
        var currentProgress = parseFloat(progressBar.attr('style').match(/width: (\d+\.?\d*)%/)[1]);
        var newProgress = Math.min(currentProgress + 12.5, 100);
        progressBar.attr('style', 'width:' + newProgress + '%');
        progressBar.text(newProgress + '%');
    }
});