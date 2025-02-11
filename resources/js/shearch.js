document.addEventListener('DOMContentLoaded', function() {
    const searchInput = document.getElementById('table-search');
    
    searchInput.addEventListener('input', function(e) {
        const searchTerm = e.target.value.toLowerCase();
        const rows = document.querySelectorAll('#certificados tbody tr');
        
        rows.forEach(row => {
            const codigo = row.querySelector('td:nth-child(3)').textContent.toLowerCase();
            const titular = row.querySelector('td:nth-child(4)').textContent.toLowerCase();
            const grupo = row.querySelector('td:nth-child(5)').textContent.toLowerCase();
            
            // Busca coincidencias en código, titular o grupo
            const matches = 
                codigo.includes(searchTerm) || 
                titular.includes(searchTerm) || 
                grupo.includes(searchTerm);
            
            // Muestra u oculta la fila según si hay coincidencia
            row.style.display = matches ? '' : 'none';
        });
        
        // Actualizar el contador de resultados
        updateResultCounter();
    });
    
    function updateResultCounter() {
        const visibleRows = document.querySelectorAll('#certificados tbody tr[style=""]').length;
        const totalRows = document.querySelectorAll('#certificados tbody tr').length;
        const counter = document.querySelector('.text-sm.text-black');
        
        if (counter) {
            counter.textContent = `${visibleRows} de ${totalRows}`;
        }
    }

    // Exponer la función updateResultCounter globalmente
    window.updateResultCounter = updateResultCounter;
});