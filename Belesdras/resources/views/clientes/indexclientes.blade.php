<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>clientes</title>
    <link rel="stylesheet" href="{{ asset('css/clientes.css') }}">
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
                            <a href="{{route('index_profesionales')}}">
                                <i class='bx bxs-user-circle'></i>
                                <span class="text nav-text">Profesional</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indexclientes')}}">
                                <i class='bx bx-user'></i>
                                <span class="text nav-text">Cliente</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indexturnos')}}">
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
                            <a href="{{route('indextelefonos')}}">
                                <i class='bx bx-phone'></i>
                                <span class="text nav-text">Teléfonos</span>
                            </a>
                        </li>

                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-phone'></i>
                                <span class="text nav-text">reportes</span>
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
                <h1>Clientes</h1>
                <div class="input-group">
                    <input type="search" placeholder="Buscar...">
                    <img src="{{asset('img/search.png')}}" alt="">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                </div>
                <button id="open-popup" class="neon-button" style="border: transparent;">Agregar Usuario</button>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>
                            <tr>
                                <th> Id <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Nombre <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Apellido<span class="icon-arrow">&UpArrow;</span></th>
                                <th> dni <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Telefono <span class="icon-arrow">&UpArrow;</span></th>
                                <th> Opciones <span class="icon-arrow">&UpArrow;</span></th>
                            </tr>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($clientes as $cliente)
                        <tr>
                            <td> {{$cliente->id}} </td>
                            <td> <img src="{{asset('img/usuario3.png')}}" alt="">{{$cliente->name}}</td>
                            <td> {{$cliente->apellido}} </td>
                            <td> {{$cliente->dni}} </td>
                            <td> {{$cliente->telefono}} </td>
                            <td>
                                <a href="{{ route('clientes.edit', ['id' => $cliente->id]) }}">
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                                </a>
                                <form method="POST" action="{{ route('clientes.delete', ['id' => $cliente->id]) }}" style="display: inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                </form>
                                
                            </td>
                        </tr>
                        @endforeach
                        <!-- <tr>
                            <td> 002 </td>
                            <td> <img src="usuario3.png" alt="">David Johnson</td>
                            <td> (555) 987-6543</td>
                            <td> DavidDoe@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 003 </td>
                            <td> <img src="usuario5.png" alt="">María García</td>
                            <td> (555) 555-5555</td>
                            <td> MariaGarxi@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 004 </td>
                            <td> <img src="usuario6.png" alt="">Ana López</td>
                            <td> (555) 555-5551</td>
                            <td> AL@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 005 </td>
                            <td> <img src="Usuario8.png" alt="">Michael Brown</td>
                            <td> (555) 555-5552</td>
                            <td> MB@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 006 </td>
                            <td> <img src="usuario1.png" alt="">Sofia Rodríguez</td>
                            <td> (555) 555-5553</td>
                            <td> SR@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 007 </td>
                            <td> <img src="usuario6.png" alt="">Jennifer Davis</td>
                            <td> (555) 555-5554</td>
                            <td> JD@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 008 </td>
                            <td> <img src="usuario4.png" alt="">Daniel Pérez</td>
                            <td> (555) 555-5556</td>
                            <td> DP@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 009 </td>
                            <td> <img src="usuario3.png" alt="">Alejandro Fernández</td>
                            <td> (555) 555-5557</td>
                            <td> AF@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 010 </td>
                            <td> <img src="Usuario8.png" alt="">Carlos González</td>
                            <td> (555) 555-5558</td>
                            <td> CG@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 011 </td>
                            <td> <img src="usuario2.png" alt="">Andrea Ramírez</td>
                            <td> (555) 555-5559</td>
                            <td> AR@example.com</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr>
                        <tr>
                            <td> 012 </td>
                            <td> <img src="usuario1.png" alt="">Natalia Torres</td>
                            <td> (555) 555-5510</td>
                            <td> NT@example.com</td>
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
            <form action="{{route('indexclientes.store')}}" method="POST">
                @csrf
                <h2>Registro</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="cafe-outline"></ion-icon></span>
                    <input type="text" name="nombre" id="" required>
                    <label>Nombre</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="apellido" id="" required>
                    <label>Apellido</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                    <input type="number" name="dni" id="" required>
                    <label>DNI</label>
                </div>
               
                <div class="input-box">
                    <span class="icon"><ion-icon name="call-outline"></ion-icon></span>
                    <select name="telefono" required multiple>
                        <option value="">Selecciona un teléfono</option>
                        @foreach($telefonos as $telefono)
                            <option value="{{ $telefono->telefono }}">{{ $telefono->telefono}}</option>
                        @endforeach
                </select>
                 </div>
                <button type="submit" name="Confirmar">Confirmar</button>
            </form>
        </div>
    </div>
    <script src="{{ asset('js/script_clientes.js') }}"></script>
    <script src="{{ asset('js/buscar_clientes.js') }}"></script>
    <script src="{{ asset('js/tabla_clientes.js') }}"></script>
    <script>
        document.getElementById("open-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("close-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });
    </script>
</body>
</html>
