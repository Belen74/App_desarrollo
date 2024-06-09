<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <title>Iniciar Sesión</title>
</head>
<body>
    <section>
        <div class="background-image"></div>
    <div class="login-box">
        <form action="{{route('login')}}" method="post">
            @csrf 
            <img src="bel.png" alt="" srcset="">
            <h2>Inicio</h2> 
            <div class="input-box">
                <span class="icon"><ion-icon name="person-outline"></ion-icon>
                </span>
                <input type="email" name="email" id="" required>
                <label>Usuario</label>
            </div>
            <div class="input-box">
                <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                <input type="password" name="password" id="" required>
                <label>Contraseña</label>
            </div>
            <div class="remember-forgot">
                <label><input type="checkbox" name="" id="">Recuerdame</label>
                <a href="#">Olvido su contraseña?</a>
            </div>
            <button type="submit">Iniciar sesión</button>
            <div class="register-link">
            <p>No estás registrado? <a href="{{ route('register') }}">Registrarse</a></p>
            </div>
        </form>
    </div>
</section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>