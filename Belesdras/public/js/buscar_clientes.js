const filas = document.querySelectorAll('.responsive-table tbody tr');

// Agrega un controlador de eventos 'input' para el campo de búsqueda
searchInput.addEventListener('input', () => {
    const searchTerm = searchInput.value.toLowerCase();

    // Itera a través de las filas y muestra u oculta según el término de búsqueda
    filas.forEach((fila) => {
        const text = fila.innerText.toLowerCase();
        if (text.includes(searchTerm)) {
            fila.style.display = 'table-row';
        } else {
            fila.style.display = 'none';
        }
    });
});