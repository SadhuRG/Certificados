function cambiarPagina(url) {
    if (!url) return;

    fetch(url)
        .then(response => response.text())
        .then(html => {
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');
            
            // Actualizar la tabla
            const nuevaTabla = doc.querySelector('#certificados tbody');
            const tablaActual = document.querySelector('#certificados tbody');
            if (nuevaTabla && tablaActual) {
                tablaActual.innerHTML = nuevaTabla.innerHTML;
            }
            
            // Actualizar los controles de paginación
            const nuevaPaginacion = doc.querySelector('.flex.justify-between.mt-5.gap-8');
            const paginacionActual = document.querySelector('.flex.justify-center.mt-6.gap-4');
            if (nuevaPaginacion && paginacionActual) {
                paginacionActual.innerHTML = nuevaPaginacion.innerHTML;
            }

            // Reinicializar los eventos
            inicializarPaginacion();
            inicializarBotonesEditar();

            // Actualizar la URL sin recargar la página
            window.history.pushState({}, '', url);
        })
        .catch(error => {
            console.error('Error al cargar la página:', error);
        });
}