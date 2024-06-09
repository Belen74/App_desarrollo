<!DOCTYPE html>
<html>
<head>
    <title>Editar Clientes</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 5px #888888;
        }
        h2 {
            text-align: center;
        }
        .form-group {
            margin-bottom: 20px;
        }
        label {
            display: block;
            font-weight: bold;
        }
        input[type="text"], input[type="number"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        .btn-container {
            text-align: center;
        }
        button {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Editar Clientes</h2>
        <form method="POST" action="{{ route('clientes.update', $clientes->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" id="nombre" name="nombre" value="{{ $clientes->name }}" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" id="apellido" name="apellido" value="{{ $clientes->apellido }}" required>
            </div>

            <div class="form-group">
                <label for="dni">DNI:</label>
                <input type="number" id="dni" name="dni" value="{{ $clientes->dni }}" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="number" id="telefono" name="telefono" value="{{ $clientes->telefono }}" required>
            </div>

            <div class="btn-container">
            <button type="submit" onclick="mostrarAlertaDeExito()">Guardar Cambios</button>
            </div>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
         function mostrarAlertaDeExito() {
            Swal.fire({
                position: 'top-end',
                icon: 'success',
                title: 'Registro Editado con éxito',
                showConfirmButton: false,
                timer: 1500
            });
        }
        // @if(session('success'))
        //     // Muestra la alerta de éxito si hay un mensaje 'success' en la sesión
        //     mostrarAlertaDeExito();
        // @endif
    </script>
</body>
</html>
