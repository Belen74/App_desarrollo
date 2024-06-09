<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/registro.css') }}">
    <title>Registrarse</title>
</head>
<body>
    <section>
        <div class="background-image"></div>
        <div class="login-box">
            <form action="{{route('register')}}" method="post">
                @csrf
                <img src="bel.png" alt="" srcset="">
                <h2>Registro</h2>
                <div class="input-box">
                    <span class="icon"><ion-icon name="person-outline"></ion-icon></span>
                    <input type="text" name="name" id="" required placeholder="">
                    <label>Ingresar usuario</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="mail-outline"></ion-icon></span>
                    <input type="email" name="email" id="" required placeholder="">
                    <label>Correo</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password" id="" required placeholder = "">
                    <label>Contraseña</label>
                </div>
                <div class="input-box">
                    <span class="icon"><ion-icon name="lock-closed"></ion-icon></span>
                    <input type="password" name="password_confirmation" id="" required placeholder="">
                    <label>Confirmar contraseña</label>
                </div>
                <button type="submit">Confirmar</button>
                <div class="register-link">
                <p>Ya estás registrado? <a href="{{ route('login') }}">Iniciar Sesión</a></p>
                </div>
            </form>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>
</html>
