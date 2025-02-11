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
                        if (window.updateResultCounter) {
                            window.updateResultCounter();
                        }
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
                    
                    // Reinicializar los eventos de paginación
                    const botonesAnteriorSiguiente = paginacionActual.querySelectorAll('button[data-url]');
                    botonesAnteriorSiguiente.forEach(boton => {
                        boton.addEventListener('click', function() {
                            const url = this.getAttribute('data-url');
                            if (url) {
                                fetch(url, {
                                    headers: {
                                        'X-Requested-With': 'XMLHttpRequest'
                                    }
                                })
                                .then(response => response.text())
                                .then(html => {
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
                                            // Reinicializar los eventos nuevamente
                                            actualizarEventosPaginacion();
                                        }, 150);
                                    }

                                    // Actualizar la URL sin recargar la página
                                    window.history.pushState({}, '', url);
                                });
                            }
                        });
                    });
                }, 150);
            }
        } catch (error) {
            console.error('Error al actualizar la tabla:', error);
        }
    }

    // Función auxiliar para actualizar eventos de paginación
    function actualizarEventosPaginacion() {
        const botonesAnteriorSiguiente = document.querySelectorAll('.flex.justify-between.mt-5.gap-8 button[data-url]');
        botonesAnteriorSiguiente.forEach(boton => {
            boton.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                if (url) {
                    fetch(url, {
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.text())
                    .then(html => {
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
                                actualizarEventosPaginacion();
                            }, 150);
                        }

                        window.history.pushState({}, '', url);
                    });
                }
            });
        });
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

    // Función para manejar el checkbox principal
    const handleMasterCheckbox = () => {
        const masterCheckbox = document.querySelector('#checkbox-all-search');
        const individualCheckboxes = document.querySelectorAll('tbody input[type="checkbox"]');
        const deleteButton = document.querySelector('#deleteMultiple');

        if (masterCheckbox) {
            masterCheckbox.addEventListener('change', function() {
                const visibleRows = Array.from(document.querySelectorAll('tbody tr')).filter(row => 
                    row.style.display !== 'none'
                );

                visibleRows.forEach(row => {
                    const checkbox = row.querySelector('input[type="checkbox"]');
                    if (checkbox) {
                        checkbox.checked = this.checked;
                    }
                });

                updateDeleteButton();
            });
        }

        // Manejar checkboxes individuales
        document.querySelector('tbody').addEventListener('change', function(e) {
            if (e.target.type === 'checkbox') {
                updateDeleteButton();
                updateMasterCheckbox();
            }
        });
    };

    // Función para actualizar el estado del botón de eliminación
    const updateDeleteButton = () => {
        const deleteButton = document.querySelector('#deleteMultiple');
        const checkedBoxes = document.querySelectorAll('tbody input[type="checkbox"]:checked');
        
        if (deleteButton) {
            deleteButton.disabled = checkedBoxes.length === 0;
        }
    };

    // Función para actualizar el estado del checkbox principal
    const updateMasterCheckbox = () => {
        const masterCheckbox = document.querySelector('#checkbox-all-search');
        const visibleCheckboxes = Array.from(document.querySelectorAll('tbody tr')).filter(row => 
            row.style.display !== 'none'
        ).map(row => row.querySelector('input[type="checkbox"]'));
        
        if (masterCheckbox && visibleCheckboxes.length > 0) {
            const allChecked = visibleCheckboxes.every(checkbox => checkbox.checked);
            const someChecked = visibleCheckboxes.some(checkbox => checkbox.checked);
            
            masterCheckbox.checked = allChecked;
            masterCheckbox.indeterminate = someChecked && !allChecked;
        }
    };

    // Manejar el botón de eliminación múltiple
    const handleMultipleDelete = () => {
        const deleteButton = document.querySelector('#deleteMultiple');
        
        if (deleteButton) {
            deleteButton.addEventListener('click', async function() {
                const checkedBoxes = document.querySelectorAll('tbody input[type="checkbox"]:checked');
                const ids = Array.from(checkedBoxes).map(checkbox => 
                    checkbox.closest('tr').querySelector('button[data-certificado-id]').getAttribute('data-certificado-id')
                );

                if (ids.length === 0) return;

                if (confirm(`¿Estás seguro de que deseas eliminar ${ids.length} certificado(s)?`)) {
                    try {
                        // Optimistic UI: Ocultar las filas inmediatamente
                        checkedBoxes.forEach(checkbox => {
                            const row = checkbox.closest('tr');
                            row.style.transition = 'opacity 0.3s ease, transform 0.3s ease';
                            row.style.opacity = '0';
                            row.style.transform = 'translateX(-20px)';
                        });

                        // Realizar las eliminaciones en paralelo
                        await Promise.all(ids.map(id => 
                            fetch(`/admin/certificados/${id}`, {
                                method: 'DELETE',
                                headers: {
                                    'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                                    'X-Requested-With': 'XMLHttpRequest'
                                }
                            })
                        ));

                        await new Promise(resolve => setTimeout(resolve, 300));
                        await actualizarTabla();
                        if (window.updateResultCounter) {
                            window.updateResultCounter();
                        }
                        
                    } catch (error) {
                        console.error('Error:', error);
                        // Revertir cambios visuales en caso de error
                        checkedBoxes.forEach(checkbox => {
                            const row = checkbox.closest('tr');
                            row.style.opacity = '1';
                            row.style.transform = 'translateX(0)';
                        });
                        alert('Hubo un error al eliminar los certificados');
                    }
                }
            });
        }
    };

    // Inicializar todas las funcionalidades
    handleMasterCheckbox();
    handleMultipleDelete();
    updateDeleteButton();

    // Reinicializar después de actualizar la tabla
    document.addEventListener('tableUpdated', function() {
        handleMasterCheckbox();
        updateDeleteButton();
        updateMasterCheckbox();
    });
});
