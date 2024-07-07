@extends('layouts.app')

@section('content')
<div class="jumbotron jumbotron-fluid text-center bg-primary text-white">
    <div class="container">
        <h1 class="display-4">¡Bienvenido a Mi Web!</h1>
        <p class="lead"></p>
    </div>
</div>

<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">¿Qué hacemos?</h2>
                    <p class="card-text">En Mi Web nos especializamos en mostrar datos de estudiantes y docentes.</p>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="card mb-4">
                <div class="card-body">
                    <h2 class="card-title">Últimas Noticias</h2>
                    <p class="card-text">Mantente al día con las últimas novedades sobre estudiantes y docentes.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
