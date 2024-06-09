<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesionales</title>
    <link rel="stylesheet" href="{{ asset('css/profesionales.css') }}">
    <link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.1/css/all.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
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
                            <a href="{{route('home')}}">
                                <i class='bx bx-home'></i>
                                <span class="text nav-text">Home</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('index_profesionales')}}">
                                <i class='bx bx-user-circle'></i>
                                <span class="text nav-text">Profesionales</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indexclientes')}}">
                                <i class='bx bx-user-circle'></i>
                                <span class="text nav-text">Clientes</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indexturnos')}}">
                                <i class='bx bx-notepad'></i>
                                <span class="text nav-text">Turnos</span>
                            </a>
                        </li>
                        <li class= "nav-link">
                            <a href="#">
                                <i class='bx bxs-bell-ring'></i>
                                <span class="text nav-text">Notificaciones</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indextelefonos')}}">
                                <i class='bx bx-phone'></i>
                                <span class="text nav-text">Teléfonos</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-calculator'></i>
                                <span class="text nav-text">Facturacion</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-notepad'></i>
                                <span class="text nav-text">Reportes</span>
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
    <section class="home">
        <main class="table">
            <section class="table__header">
                <h1>Profesionales</h1>
                <div class="input-group">
                    <input type="search" placeholder="Buscar...">
                    <img src="{{asset('img/search.png')}}}" alt="">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                </div>
                <button id="open-popup" class="neon-button" style="border: transparent;">Agregar Profesional</button>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                            <th> DNI <span class="icon-arrow">&UpArrow;</span></th>
                            <th> apellido <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                            <!-- <th> Email <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Pago <span class="icon-arrow">&UpArrow;</span></th> -->
                            <th> Opciones <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($profesionales as $profesional)
                        <tr>
                            
                            <td> {{$profesional->id}} <img src="usuario1.png" alt=""> </td>
                            <td> {{$profesional->name}}</td>
                            <td> {{$profesional->dni}} </td>
                            <td> {{$profesional->apellido}}</td>
                            <td> {{$profesional->telefono}}</td>
                            <td>
                                <a href="{{ route('profesionales.edit', ['id' => $profesional->id]) }}">
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                                </a>
                                <form method="POST" action="{{ route('profesionales.delete', ['id' => $profesional->id]) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        <!-- <tr>
                            <td> 2 </td>
                            <td> <img src="usuario3.png" alt="">Programador</td>
                            <td> ????? </td>
                            <td> Federico Peral</td>
                            <td> 2604???????</td>
                            <td> fedeperal@gmail.com</td>
                            <td> <strong> $300.90 </strong></td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 3 </td>
                            <td> <img src="usuario1.png" alt="">Programador</td>
                            <td> ????? </td>
                            <td> Maria Franchetti</td>
                            <td> 2604???????</td>
                            <td> agusfran@gmail.com</td>
                            <td> <strong> $300.90 </strong></td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 4 </td>
                            <td> <img src="usuario4.png" alt="">Administrador</td>
                            <td> ????? </td>
                            <td> Franco</td>
                            <td> 2604???????</td>
                            <td> francocentroe@gmail.com</td>
                            <td> <strong> $100.90 </strong></td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 5 </td>
                            <td> <img src="usuario5.png" alt="">Contador</td>
                            <td> ????? </td>
                            <td> Camila</td>
                            <td> 2604???????</td>
                            <td> camila1234@gmail.com</td>
                            <td> <strong> $100.90 </strong></td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr> -->
                    </tbody>
                </table>
            </section>
        </main>
    </section>
    <div id="popup" class="popup">
        <div class="login-box">
            <span class="close" id="close-popup">&times;</span>
            <form action="{{ route('index_profesionales.store') }}" method="POST">
    @csrf
    <h2>Registro</h2>

    <div class="input-box">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
        <input type="text" name="nombre" required>
        <label>Nombre</label>
    </div>

    <div class="input-box">
        <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
        <input type="text" name="apellido" required>
        <label>APELLIDO</label>
    </div>

    <div class="input-box">
        <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
        <input type="number" name="dni" required>
        <label>DNI</label>
    </div>

    <div class="input-box">
        <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
        <select name="telefono" required >
            <option value="">Selecciona un teléfono</option>
            @foreach($telefonos as $telefono)
                <option value="{{ $telefono->telefono }}">{{ $telefono->telefono }}</option>
            @endforeach
        </select>
    </div>
    <button type="submit">Confirmar</button>
</form>
        </div>
    </div>
    <script src="{{ asset('js/buscar_prof.js') }}"></script>
    <script src="{{ asset('js/script_prof.js') }}"></script>
    <script src="{{ asset('js/tabla_prof.js') }}"></script>
    <script>
        document.getElementById("open-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("close-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            document.getElementById("eliminar-link").addEventListener("click", function(event) {
                event.preventDefault(); // Prevenir la acción predeterminada del enlace

                var confirmacion = confirm("¿Estás seguro de que deseas eliminar el registro?");

                if (confirmacion) {
                    // Redirigir al enlace de eliminación
                    window.location.href = this.getAttribute("href");
                }
            });
        });
    </script>
</body>
</html>
