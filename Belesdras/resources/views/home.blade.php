<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belesdras</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
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
            <!-- <li class="search-box">
                <i class='bx bx-search-alt-2' ></i>
                <input type="text" placeholder="Buscar....">
            </li> -->
            <div class="menu-links"> <!-- Added opening <div> tag here -->
                <li class="search-box">
                    <i class='bx bx-search-alt-2' ></i>
                    <input id="searchInput" type="text" placeholder="Buscar....">
                </li>
                <li class="nav-link">
                    <a href="{{route('index_profesionales')}}">
                        <i class='bx bxs-user-circle' ></i>
                        <span class="text nav-text">Profesional</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="{{route('indexclientes')}}">
                        <i class='bx bxs-user-circle' ></i>
                        <span class="text nav-text">Cliente</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-notepad' ></i>
                        <span class="text nav-text">Turnos</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-calculator' ></i>
                        <span class="text nav-text">Facturación</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="#">
                        <i class='bx bxs-bell-ring' ></i>
                        <span class="text nav-text">Notificaciones</span>
                    </a>
                </li>

                <li class="nav-link">
                    <a href="#">
                        <i class='bx bx-phone' ></i>
                        <span class="text nav-text">Teléfonos</span>
                    </a>
            </div> <!-- Added closing </div> tag here -->
        </div>
        <div class="bottom-content"> <!-- Changed "Bottom-content" to "bottom-content" for consistency -->
        <li class="">
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class='bx bx-log-out'></i>
                <span class="text nav-text">Salir</span>
            </a>
        </li>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <li class="mode">
                <div class="sun-moon">
                    <i class="bx bx-moon icon moon" ></i>
                    <i class="bx bx-sun icon sun" ></i>
                </div>
                <span class="mode-text text">Modo oscuro</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
   </nav>
   <section class="home">
    <div class="text">
        
        Turnos de la semana 
    </div>
    

    <div class="table-container">
        <table class="responsive-table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Cliente</th>
                    <th>Fecha</th>
                    <th>Estado de Pago</th>
                    <th>Estado del Turno</th>
                </tr>
            </thead>
           
        </table>
    </div>
</section>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/tabla.js') }}"></script>
<script src="{{ asset('js/buscar.js') }}"></script>
</body>
</html>