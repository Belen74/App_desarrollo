    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Telefonos</title>
        <link rel="stylesheet" href="{{asset('css/telefonos.css')}}">
        <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.css">
        <style>
            /* Estilos para los botones del modal */
    .login-box button {
        background-color: #4CAF50; /* Color de fondo verde */
        color: white; /* Texto en color blanco */
        border: none; /* Sin borde */
        padding: 10px 20px; /* Espaciado interno */
        text-align: center; /* Alineación de texto centrada */
        text-decoration: none; /* Sin subrayado */
        display: inline-block;
        font-size: 16px; /* Tamaño de fuente */
        margin: 5px 2px;
        cursor: pointer;
        border-radius: 5px; /* Bordes redondeados */
    }

    /* Estilos para el botón Confirmar en el modal */
    .login-box button[type="submit"] {
        background-color: white; /* Cambiar el color de fondo para el botón Confirmar */
        color: black;
    }

    /* Estilos para el botón Agregar (Expandir hacia la derecha) */
    #open-popup {
        width: auto; /* Para que el ancho se ajuste al contenido */
        padding: 10px 20px; /* Espaciado interno para el botón Agregar */
    }

    /* Estilos para el botón Editar y Eliminar (juntos) */
    .neon-button.eliminar-btn,
    .neon-button.editar-btn {
        margin-right: 10px; /* Espacio entre los botones Editar y Eliminar */
    }
        
        </style>
    </head>
    <body>
        <nav class="sidebar close">
            <header>
                <div class="text logo">
                    <span class="name">Belesdras</span>
                    <span class="profe">Desarrollador</span>
                </div>
                <i class="bx bx-menu toggle"></i>
            </header>
            <div class="menu-bar">
                <div class="menu">
                    <div class="menu-links">
                        <ul>
                            <li class="search-box">
                                <i class='bx bx-search-alt-2'></i>
                                <input id="searchInput" type="text" placeholder="Buscar....">
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bxs-user-circle'></i>
                                    <span class="text nav-text">Profesional</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-user'></i>
                                    <span class="text nav-text">Cliente</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-notepad'></i>
                                    <span class="text nav-text">Turnos</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-calculator'></i>
                                    <span class="text nav-text">Facturación</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bxs-bell-ring'></i>
                                    <span class="text nav-text">Notificaciones</span>
                                </a>
                            </li>
                            <li class="nav-link">
                                <a href="#">
                                    <i class='bx bx-phone'></i>
                                    <span class="text nav-text">Teléfonos</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="bottom-content">
                    <ul>
                        <li>
                            <a href="{{route('logout')}}">
                                <i class='bx bx-log-out'></i>
                                <span class="text nav-text">Salir</span>
                            </a>
                        </li>
                        <li class="mode">
                            <div class="sun-moon">
                                <i class="bx bx-moon icon moon"></i>
                                <i class="bx bx-sun icon sun"></i>
                            </div>
                            <span class="mode-text text">Modo oscuro</span>
                            <div class="toggle-switch">
                                <span class="switch"></span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </nav>
    <section class="home">
        <main class="table">
            <section class="table__header">
                <h1>Telefonos</h1>
                <div class="input-group">
                    <input type="search" placeholder="Buscar...">
                    <img src="search.png" alt="">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                </div>
                <button id="open-popup" class="neon-button" style="border: transparent;">Agregar Telefonos</button>
            </section>
            <!-- Tabla de Profesionales -->
            <section class="table__body">
                <h2>Telefonos</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Id<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Tipo Telefono<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Tipo Persona<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Telefono<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Opciones<span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($telefonos as $telefono)
                        <tr>
                            <td>{{$telefono->id}}</td>
                            <td>{{$telefono->tipo_tel}}</td>
                            <td>{{$telefono->tipo_persona}}</td>
                            <td>{{$telefono->telefono}}</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        @endforeach
                        <!-- Agrega más filas de profesionales según tus necesidades -->
                        <!-- <tr>
                            <td>002</td>
                            <td>Norma Eimarchi</td>
                            <td>12345678</td>
                            <td>n@example.com</td>
                            <td>(555) 123-4567</td>
                            <td>(555) 203-4567</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td> -->
                    </tbody>
                </table>
            </section>
            <!-- Tabla de Clientes -->
            <!-- <section class="table__body">
                <h2>Clientes</h2>
                <table>
                    <thead>
                        <tr>
                            <th>Id<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Nombre<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Teléfono<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Teléfono 2<span class="icon-arrow">&UpArrow;</span></th>
                            <th>Opciones<span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>101</td>
                            <td>Juan Perez</td>
                            <td>(555) 987-6543</td>
                            <td>(555) 987-6443</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td>102</td>
                            <td>Juan Perez</td>
                            <td>(555) 987-6543</td>
                            <td>(555) 987-6443</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </section> -->
        </main>
    </section>
    <div id="popup" class="popup">
        <div class="login-box">
            <span class="close" id="close-popup">&times;</span>
            <form action="{{ route('indextelefonos.store') }}" method="POST">
                @csrf
                <h2>Registro</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="cafe-outline"></ion-icon></span>
                    <label for="tipo_tel"></label>
                    <select name="tipo_tel" id="tipo_tel">
                        <option value="" disabled selected>Seleccione el tipo de telefono</option>
                        <option value="movil">Móvil</option>
                        <option value="fijo">Fijo</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <label for="tipo_persona"></label>
                    <select name="tipo_persona" id="tipo_persona">
                        <option value="" disabled selected>Seleccione el tipo de persona</option>
                        <option value="profesional">Profesional</option>
                        <option value="cliente">Cliente</option>
                    </select>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                    <input type="number" name="telefono" id="telefonos" required>
                    <label for="telefonos">Teléfono</label>
                </div>

                <button type="submit" name="Confirmar">Confirmar</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/script_telefonos.js') }}"></script>
    <script src="{{ asset('js/tabla_telefonos.js') }}"></script>
    <script src="{{ asset('js/buscar_telefonos.js') }}"></script>
    <script src="{{ asset('js/editar_telefonos.js') }}"></script>

    <script>
        document.getElementById("open-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("close-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });

        // JavaScript para manejar eliminar y editar
        const table = document.querySelector('table');
        table.addEventListener('click', function(event) {
            const target = event.target;
            if (target.classList.contains('eliminar-btn')) {
                const row = target.closest('tr');
                row.remove();
            }
            if (target.classList.contains('editar-btn')) {
                // Lógica para editar la fila
                // ...
            }
        });
    </script>
</body>
</html>