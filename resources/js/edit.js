document.addEventListener('DOMContentLoaded', function() {
    function convertToInput(row) {
        const codigo = row.querySelector('td:nth-child(3)');
        const titular = row.querySelector('td:nth-child(4)');
        const grupo = row.querySelector('td:nth-child(5)');
        const fecha = row.querySelector('td:nth-child(6)');
        const estado = row.querySelector('td:nth-child(7)');
        
        // Guardar valores originales
        const originalCodigo = codigo.textContent.trim();
        const originalTitular = titular.textContent.trim();
        const originalGrupo = grupo.textContent.trim();
        const originalFecha = fecha.textContent.trim();
        const originalEstado = estado.querySelector('span').textContent.trim();
        
        // Crear inputs
        codigo.innerHTML = `<input type="text" class="w-full p-1 border rounded" value="${originalCodigo}">`;
        titular.innerHTML = `<input type="text" class="w-full p-1 border rounded" value="${originalTitular}">`;
        grupo.innerHTML = `<input type="text" class="w-full p-1 border rounded" value="${originalGrupo}">`;
        fecha.innerHTML = `<input type="date" class="w-full p-1 border rounded" value="${originalFecha}">`;
        
        // Crear select para estado
        estado.innerHTML = `
            <select class="w-full p-1 border rounded text-sm">
                <option value="Validado" ${originalEstado === 'Validado' ? 'selected' : ''} class="bg-green-100 text-green-800">Validado</option>
                <option value="Creado" ${originalEstado === 'Creado' ? 'selected' : ''} class="bg-yellow-100 text-yellow-800">Creado</option>
            </select>
        `;
        
        // Cambiar botón editar por guardar manteniendo dimensiones consistentes
        const editButton = row.querySelector('button:first-child');
        editButton.innerHTML = `<img src="/imagenes/icons/save.svg" alt="Guardar" class="w-5 h-5">`;
        editButton.classList.remove('bg-blue-500');
        editButton.classList.add('bg-green-500');
        // Mantenemos las clases de dimensiones y flex
        editButton.className = "p-2 bg-green-500 rounded-lg hover:scale-110 transition-transform w-10 h-10 flex items-center justify-center";
        editButton.onclick = () => saveChanges(row, originalCodigo, originalTitular, originalGrupo, originalFecha);
    }

    function saveChanges(row, originalCodigo, originalTitular, originalGrupo, originalFecha) {
        const codigo = row.querySelector('td:nth-child(3) input').value;
        const titular = row.querySelector('td:nth-child(4) input').value;
        const grupo = row.querySelector('td:nth-child(5) input').value;
        const fecha = row.querySelector('td:nth-child(6) input').value;
        const estado = row.querySelector('td:nth-child(7) select').value;
        const id = row.querySelector('th:nth-child(2)').textContent.trim();

        // Actualizar la vista
        row.querySelector('td:nth-child(3)').textContent = codigo;
        row.querySelector('td:nth-child(4)').textContent = titular;
        row.querySelector('td:nth-child(5)').textContent = grupo;
        row.querySelector('td:nth-child(6)').textContent = fecha;
        
        // Actualizar el estado con el estilo correspondiente
        const estadoCell = row.querySelector('td:nth-child(7)');
        const estadoClases = estado === 'Validado' ? 
            'bg-green-100 text-green-800' : 
            'bg-yellow-100 text-yellow-800';
        
        estadoCell.innerHTML = `
            <span class="px-2 py-1 rounded-full text-sm ${estadoClases}">
                ${estado}
            </span>
        `;

        // Restaurar botón de editar manteniendo dimensiones consistentes
        const saveButton = row.querySelector('button:first-child');
        saveButton.innerHTML = `<img src="/imagenes/icons/editar.svg" alt="Editar" class="w-5 h-5">`;
        // Mantenemos las clases de dimensiones y flex
        saveButton.className = "p-2 bg-blue-500 rounded-lg hover:scale-110 transition-transform w-10 h-10 flex items-center justify-center";
        saveButton.onclick = () => convertToInput(row);

        // Aquí podrías agregar una llamada AJAX para actualizar el backend
        console.log('Guardando cambios para ID:', id, {
            codigo,
            titular,
            grupo,
            fecha,
            estado
        });
    }

    // Agregar evento click a todos los botones de editar
    document.querySelectorAll('.content-section table button:first-child').forEach(button => {
        button.onclick = () => convertToInput(button.closest('tr'));
    });

    // Agregar esta función para manejar la paginación
    function inicializarPaginacion() {
        // Usar los botones con data-url en lugar de onclick
        document.querySelectorAll('button[data-url]').forEach(button => {
            button.addEventListener('click', function() {
                const url = this.getAttribute('data-url');
                if (url) {
                    cambiarPagina(url);
                }
            });
        });
    }

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
                const paginacionActual = document.querySelector('.flex.justify-between.mt-5.gap-8');
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

    // Función para inicializar los botones de editar
    function inicializarBotonesEditar() {
        document.querySelectorAll('.content-section table button:first-child').forEach(button => {
            button.onclick = () => convertToInput(button.closest('tr'));
        });
    }

    // Modificar el evento DOMContentLoaded para incluir la inicialización de la paginación
    inicializarPaginacion();
    inicializarBotonesEditar();
});