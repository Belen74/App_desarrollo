// document.addEventListener('DOMContentLoaded', function() {
//     const tableRows = document.querySelectorAll('.responsive-table tbody tr');

//     tableRows.forEach(row => {
//         row.addEventListener('click', function() {
//             if (row.classList.contains('ok')) {
//                 row.classList.remove('ok');
//                 row.classList.add('cancelado');
//             } else if (row.classList.contains('cancelado')) {
//                 row.classList.remove('cancelado');
//                 row.classList.add('ok');
//             }
//         });
//     });
// });

// Obtén todas las filas de la tabla
const rows = document.querySelectorAll('.responsive-table tbody tr');

// Agrega un controlador de eventos 'click' a cada fila
rows.forEach((row) => {
    row.addEventListener('click', () => {
        // Verifica el estado actual de la fila
        if (row.classList.contains('ok')) {
            // Cambia de "ok" a "cancelado"
            row.classList.remove('ok');
            row.classList.add('cancelado');
            row.querySelector('td:last-child').textContent = 'cancelado';
        } else if (row.classList.contains('cancelado')) {
            // Cambia de "cancelado" a "pendiente"
            row.classList.remove('cancelado');
            row.classList.add('pendiente');
            row.querySelector('td:last-child').textContent = 'pendiente';
        } else if (row.classList.contains('pendiente')) {
            // Cambia de "pendiente" a "ok"
            row.classList.remove('pendiente');
            row.classList.add('ok');
            row.querySelector('td:last-child').textContent = 'Confirmado';
        } else {
            // Si no tiene ninguna de las clases anteriores, puedes establecerla en "ok" como predeterminado
            row.classList.add('ok');
            row.querySelector('td:last-child').textContent = 'Confirmado';
        }
    });
});
