<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turnos</title>
    <link rel="stylesheet" href="{{asset('css/turnos.css')}}">
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
                                <i class='bx bxs-user-circle'></i>
                                <span class="text nav-text">Profesional</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="{{route('indexclientes')}}">
                                <i class='bx bx-user-circle'></i>
                                <span class="text nav-text">Clientes</span>
                            </a>
                        </li>
                        <li class="nav-link">
                            <a href="#">
                                <i class='bx bx-calculator'></i>
                                <span class="text nav-text">Facturación</span>
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
                <h1>Turnos</h1>
                <div class="input-group">
                    <input type="search" placeholder="Buscar...">
                    <img src="search.png" alt="">
                </div>
                <div class="export__file">
                    <label for="export-file" class="export__file-btn" title="Export File"></label>
                    <input type="checkbox" id="export-file">
                </div>
                <button id="open-popup" class="neon-button" style="border: transparent;">Agregar Turno</button>
            </section>
            <section class="table__body">
                <table>
                    <thead>
                        <tr>

                            <th> ID<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Cliente<span class="icon-arrow">&UpArrow;</span></th>
                            <th> Profesional Encargado<span class="icon-arrow">&UpArrow;</span></th>
                            <!-- <th> Servicio <span class="icon-arrow">&UpArrow;</span></th> -->
                            <th> Dia <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Hora <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Estado de pago <span class="icon-arrow">&UpArrow;</span></th>
                            <th> Estado del turno <span class="icon-arrow">&UpArrow;</span></th>
                            <!-- <th> Celular <span class="icon-arrow">&UpArrow;</span></th> -->
                            <th> Opciones <span class="icon-arrow">&UpArrow;</span></th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($turnos as $turno)
                        <tr>
                            <td>{{ $turno->id}}</td>
                            <td>
                                {{ $turno->cliente->name }} {{ $turno->cliente->apellido }}
                            </td>
                            <td>
                                {{ $turno->profesional->name}} {{ $turno->profesional->apellido }}
                            </td>
                            <td>{{ $turno->fecha }}</td>
                            <td>{{ substr($turno->hora, 0, 5) }}</td>
                            <td>                               
                                 @if ($turno->estado_pago == 1)

                                    Pagado

                                    @elseif ($turno->estado_pago == 2)

                                    Pendiente

                                    @else

                                    Cancelado

                                    @endif  
                            </td>
                            <td>                               
                                @if ($turno->estado_pago == 1)

                                    Confirmado

                                    @elseif ($turno->estado_pago == 2)

                                    Pendiente

                                    @else

                                    Cancelado

                                    @endif
                                    </td>
                            <td>
                                <a href="{{ route('turnos.edit', ['id' => $turno->id]) }}">
                                    <button class="neon-button editar-btn" style="border: transparent;"> <i class="fas fa-pencil-alt"></i> Editar</button>
                                </a>
                                    <form method="POST" action="{{ route('turnos.delete', ['id' => $turno->id]) }}" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="neon-button eliminar-btn" style="border: transparent;" onclick="return confirm('¿Realmente desea dar de baja el turno ?')"><i class="fas fa-trash mr-2"></i>Eliminar</button>
                                    </form>
                            </td>
                        </tr>
                    @endforeach

                        <!-- <tr>
                            <td> Carla torres</td>
                            <td> Maquillaje</td>
                            <td> 15:00</td>
                            <td> 23/10/2023</td>
                            <td> (555) 555-5511</td>
                            <td>
                                <button class="neon-button eliminar-btn" style="border: transparent;">Eliminar</button>
                                <button class="neon-button editar-btn" style="border: transparent;">Editar</button>
                            </td>
                        </tr> -->
                        <!-- Puedes agregar más filas como la de arriba para más turnos -->
                    </tbody>
                </table>
            </section>
        </main>
    </section>
    <div id="popup" class="popup">
        <div class="login-box">
            <span class="close" id="close-popup">&times;</span>
            <form action="{{route('indexturnos.store')}}" method = "POST">
                @csrf
                <h2>Registrar Turno</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                    <select name="id_clientes" id="id_clientes" required>
                        <option value="" disabled selected>Seleccionar Cliente...</option>
                        <!-- Aquí cargamos dinámicamente la lista de clientes -->
                        @foreach($listaClientes as $cliente)
                            <option value="{{ $cliente['id'] }}">{{ $cliente['name'] }}  {{ $cliente['apellido'] }}</option>
                        @endforeach   
                        <!-- Puedes agregar más opciones de clientes aquí -->
                    </select>

                    <select name="id_profesionales" id="id_profesionales" required>
                        <option value="" disabled selected>Seleccionar Profesional...</option>
                        <!-- Aquí cargamos dinámicamente la lista de clientes -->
                        @foreach($listaProfesionales as $profesional)
                            <option value="{{ $profesional['id'] }}">{{ $profesional['name'] }}  {{ $profesional['apellido'] }}</option>
                        @endforeach   
                        <!-- Puedes agregar más opciones de clientes aquí -->
                    </select>     

                </div>
                <!-- <div class="input-box">
                    <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                    <select name="servicio" id="servicio" required>
                        <option value="uñas">Uñas</option>
                        <option value="maquillaje">Maquillaje</option>
                        <option value="Ambos">Ambos</option>
                    </select>
                </div> -->
                <div class="input-box">
                    <span class="icon"><ion-icon name="calendar-outline"></ion-icon></span>
                    <input type="date" name="fecha" id="fecha" required>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="time-outline"></ion-icon></span>
                    <input type="time" name="hora" id="hora" required>
                </div>
                   <div class="input-box">
                    <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                    <select name="estado_pago" id="servicio" required>
                    <option value="" disabled selected>Seleccionar Estado del pago...</option>
                        <option value="pagado">Pagado</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="cancelado">Cancelado</option>
                    </select>
                </div>

                   <div class="input-box">
                    <span class="icon"><ion-icon name="reader-outline"></ion-icon></span>
                    <select name="estado_turno" id="servicio" required>
                    <option value="" disabled selected>Seleccionar Estado turno...</option>
                        <option value="pendiente">Pendiente</option>
                        <option value="confirmado">Confirmado</option>
                        <option value="cancelado">Cancelado</option>
                    </select>
                </div>
            
                <button type="submit" name="Confirmar">Confirmar</button>
                
            </form>

        </div>
    </div>    
    <script src="script.js"></script>
    <script src="tabla.js"></script>
    <script src="buscar.js"></script>
    <script>
        document.getElementById("open-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "block";
        });

        document.getElementById("close-popup").addEventListener("click", function() {
            document.getElementById("popup").style.display = "none";
        });

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
        })
    </script>
    <script>
        function confirmarEliminacion() {
            Swal.fire({
                title: '¿Estás seguro?',
                text: "¡No podrás deshacer esta acción!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminarlo'
            }).then((result) => {
                if (result.isConfirmed) {
                    // Si se confirma la eliminación, envía el formulario para eliminar el registro
                    document.querySelector('form').submit();
                }
            });
        }
</script>
</body>
</html>
