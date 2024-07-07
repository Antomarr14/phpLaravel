<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!-- Styles -->
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background-color: #2d3748;
            color: #e2e8f0;
            background-image: url('https://source.unsplash.com/random');
            background-size: cover;
            background-position: center;
            margin: 0;
            padding: 0;
        }
        .btn {
            background-color: #64748b;
            color: #e2e8f0;
            border-radius: 5px;
            padding: 10px 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            text-decoration: none; /* added */
            display: inline-block; /* added */
        }
        .btn:hover {
            background-color: #4f5d74;
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .card {
            background-color: #4f5d74;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0px 2px 5px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
            margin-bottom: 20px; /* added */
        }
        .card:hover {
            box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.2);
        }
        .flex {
            display: flex; /* added */
            justify-content: center; /* added */
        }
        .content {
            max-width: 900px; /* added */
            margin: auto; /* added */
            text-align: center; /* modified */
            padding: 20px; /* modified */
        }
        h1 {
            font-size: 3rem; /* modified */
            font-weight: bold; /* added */
            margin-bottom: 20px; /* added */
            color: #e2e8f0; /* modified */
        }
        p {
            font-size: 1.2rem; /* modified */
            line-height: 1.6; /* added */
        }
    </style>
</head>
<body class="antialiased">
    <div class="content">
        <div class="flex">
            <h1>Bienvenido a Laravel</h1>
        </div>
        <div class="mt-8">
            <p class="text-xl">
                Laravel es un framework de PHP de código abierto que se
                enfoca en la simplicidad y la elegancia.
            </p>
            <div class="mt-4">
                <a href="{{ route('login') }}" class="btn">Iniciar sesión</a>
                <a href="{{ route('register') }}" class="btn ml-4">Registrarse</a>
            </div>
        </div>
        <div class="mt-8 flex flex-wrap justify-center">
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="card">
                    <h2 class="text-xl font-bold">Características</h2>
                    <p class="text-lg mt-4">
                        Laravel incluye muchas características que lo hacen
                        ideal para el desarrollo web moderno.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="card">
                    <h2 class="text-xl font-bold">Comunidad</h2>
                    <p class="text-lg mt-4">
                        Laravel tiene una comunidad activa y en crecimiento
                        que ofrece soporte y recursos para los desarrolladores.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/3 p-4">
                <div class="card">
                    <h2 class="text-xl font-bold">Documentación</h2>
                    <p class="text-lg mt-4">
                        Laravel cuenta con una excelente documentación que
                        lo hace fácil de aprender y usar.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
