@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white text-center">Login Estudiante</div>
                <div class="card-body">
                    <form action="{{ route('estudiantes.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label for="email" class="form-label">Correo Electrónico</label>
                            <input type="email" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Contraseña</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">iniciar</button>
                        </div>
                        @error('InvalidCredentials')
                        <div class="alert alert-danger mt-3" role="alert">
                            {{ $message }}
                        </div>
                        @enderror
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
