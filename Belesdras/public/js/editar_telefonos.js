// JavaScript para generar las tarjetas de turnos dinámicamente
// ...

const eliminarBotones = document.querySelectorAll(".eliminar-btn");
const editarBotones = document.querySelectorAll(".editar-btn");

eliminarBotones.forEach((boton, index) => {
    boton.addEventListener("click", () => {
        // Aquí puedes agregar la lógica para eliminar el turno en el índice 'index'
        // Por ejemplo, puedes usar 'listaDeTurnos.splice(index, 1);' para eliminar el turno.
        // Luego, actualiza la vista de las tarjetas de turnos.
        listaDeTurnos.splice(index, 1);
        actualizarTarjetas();
    });
});

editarBotones.forEach((boton, index) => {
    boton.addEventListener("click", () => {
        // Aquí puedes agregar la lógica para editar el turno en el índice 'index'
        // Por ejemplo, puedes mostrar un cuadro de diálogo de edición y actualizar los datos del turno.
        // Luego, actualiza la vista de las tarjetas de turnos.
        // Puedes usar una función o un modal para la edición.
        alert(`Editar turno en el índice ${index}`);
    });
});

function actualizarTarjetas() {
    // Limpia el contenedor de tarjetas
    turnosContainer.innerHTML = "";

    // Genera nuevamente las tarjetas con la lista actualizada de turnos
    listaDeTurnos.forEach((turno) => {
        const tarjeta = document.createElement("div");
        tarjeta.className = "tarjeta";

        tarjeta.innerHTML = `
            <div class="titulo">${turno.nombreCliente}</div>
            <div class="cuerpo">
                <p><strong>Hora:</strong> ${turno.hora}</p>
                <p><strong>Día:</strong> ${turno.dia}</p>
                <p><strong>Servicio:</strong> ${turno.servicio}</p>
                <p><strong>Precio:</strong> ${turno.precio}</p>
                <p><strong>Estado de Pago:</strong> ${turno.estadoPago}</p>
            </div>
            <div class="pie">
                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
            </div>
        `;

        turnosContainer.appendChild(tarjeta);
    });

    // Asigna nuevamente los eventos a los botones de editar y eliminar
    eliminarBotones = document.querySelectorAll(".eliminar-btn");
    editarBotones = document.querySelectorAll(".editar-btn");

    eliminarBotones.forEach((boton, index) => {
        boton.addEventListener("click", () => {
            // Lógica para eliminar el turno
            listaDeTurnos.splice(index, 1);
            actualizarTarjetas();
        });
    });

    editarBotones.forEach((boton, index) => {
        boton.addEventListener("click", () => {
            // Lógica para editar el turno
            alert(`Editar turno en el índice ${index}`);
        });
    });
}
