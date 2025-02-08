document.addEventListener('DOMContentLoaded', function() {
    // Usar delegación de eventos para los botones de eliminar
    document.addEventListener('click', async function(e) {
        // Verificar si el click fue en un botón de eliminar
        if (e.target.closest('button[class*="bg-red-500"]')) {
            e.preventDefault();
            const boton = e.target.closest('button[class*="bg-red-500"]');
            const fila = boton.closest('tr');
            const certificadoId = boton.getAttribute('data-certificado-id');
            
            if (confirm('¿Estás seguro de que deseas eliminar este certificado?')) {
                try {
                    // Optimistic UI: Ocultar la fila inmediatamente
                    fila.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                    fila.style.opacity = '0';
                    fila.style.transform = 'translateX(-20px)';

                    const response = await fetch(`/admin/certificados/${certificadoId}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });

                    if (response.ok) {
                        await new Promise(resolve => setTimeout(resolve, 300));
                        await actualizarTabla();
                    } else {
                        throw new Error('Error al eliminar el certificado');
                    }
                } catch (error) {
                    console.error('Error:', error);
                    fila.style.opacity = '1';
                    fila.style.transform = 'translateX(0)';
                    alert('Hubo un error al eliminar el certificado');
                }
            }
        }
        
        // Verificar si el click fue en un botón de paginación
        if (e.target.closest('.pagination-button')) {
            e.preventDefault();
            const button = e.target.closest('.pagination-button');
            const url = button.getAttribute('href');
            if (url) {
                try {
                    const response = await fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    });
                    const html = await response.text();
                    const parser = new DOMParser();
                    const doc = parser.parseFromString(html, 'text/html');

                    // Actualizar la tabla
                    const nuevaTabla = doc.querySelector('#certificados tbody');
                    const tablaActual = document.querySelector('#certificados tbody');
                    if (nuevaTabla && tablaActual) {
                        tablaActual.style.opacity = '0';
                        setTimeout(() => {
                            tablaActual.innerHTML = nuevaTabla.innerHTML;
                            tablaActual.style.opacity = '1';
                        }, 150);
                    }

                    // Actualizar la paginación
                    const nuevaPaginacion = doc.querySelector('.flex.justify-between.mt-5.gap-8');
                    const paginacionActual = document.querySelector('.flex.justify-between.mt-5.gap-8');
                    if (nuevaPaginacion && paginacionActual) {
                        paginacionActual.style.opacity = '0';
                        setTimeout(() => {
                            paginacionActual.innerHTML = nuevaPaginacion.innerHTML;
                            paginacionActual.style.opacity = '1';
                        }, 150);
                    }

                    // Actualizar la URL sin recargar la página
                    window.history.pushState({}, '', url);
                } catch (error) {
                    console.error('Error al cambiar de página:', error);
                }
            }
        }
    });

    async function actualizarTabla() {
        try {
            const response = await fetch(window.location.href, {
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                }
            });
            const html = await response.text();
            const parser = new DOMParser();
            const doc = parser.parseFromString(html, 'text/html');

            const nuevaTabla = doc.querySelector('#certificados tbody');
            const tablaActual = document.querySelector('#certificados tbody');
            if (nuevaTabla && tablaActual) {
                tablaActual.style.opacity = '0';
                setTimeout(() => {
                    tablaActual.innerHTML = nuevaTabla.innerHTML;
                    tablaActual.style.opacity = '1';
                }, 150);
            }

            const nuevaPaginacion = doc.querySelector('.flex.justify-between.mt-5.gap-8');
            const paginacionActual = document.querySelector('.flex.justify-between.mt-5.gap-8');
            if (nuevaPaginacion && paginacionActual) {
                paginacionActual.style.opacity = '0';
                setTimeout(() => {
                    paginacionActual.innerHTML = nuevaPaginacion.innerHTML;
                    paginacionActual.style.opacity = '1';
                }, 150);
            }
        } catch (error) {
            console.error('Error al actualizar la tabla:', error);
        }
    }

    // Agregar estilos CSS para las transiciones
    const style = document.createElement('style');
    style.textContent = `
        #certificados tbody {
            transition: opacity 0.3s ease;
        }
        .flex.justify-between.mt-5.gap-8 {
            transition: opacity 0.3s ease;
        }
        tr {
            transition: opacity 0.3s ease, transform 0.3s ease;
        }
    `;
    document.head.appendChild(style);
});
