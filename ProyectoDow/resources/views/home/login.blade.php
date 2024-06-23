<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-custom.min.css') }}">
    <title>Sistema de Gestión de Contenidos (CMS)</title>

    <style>
        body {
            background: linear-gradient(to bottom, #660066 0%, #ff99cc 100%);
        }

        .full-height {
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-container {
            max-width: 1000px;
            padding: 60px;
            border-radius: 150px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .logo-container {
            text-align:start;
            margin-bottom: 20px;
        }

        .logo-container img {
            width: 250px; /* Ajusta el tamaño de la imagen según sea necesario */
        }

        .title {
            text-align: center;
            color: #040404;
        }

        .form-container {
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="container-fluid full-height">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="login-container">
                    <div class="logo-container">
                        <img src="{{ asset('images/rincon.png') }}" alt="Logo">
                    </div>
                    <h4 class="title">Sistema de Gestión de Contenidos (CMS)</h4>
                    <h4 class="title">DOW301 - Diseño y Programación Orientada a la WEB</h4>
                    <form action="{{ route('home.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="username" class="form-label">Correo Electrónico</label>
                            <input type="text" id="username" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>
                        <div class="mb-3 text-end">
                            <button type="submit" class="btn btn-primary">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>

</html>
