@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white">
                    Detalles de Asistencia
                </div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="grupo" class="form-label">Grupo:</label>
                        <input type="text" class="form-control" id="grupo" value="{{ $asistencia->grupo->nombre }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="estudiante" class="form-label">Estudiante:</label>
                        <input type="text" class="form-control" id="estudiante" value="{{ $asistencia->estudiante->nombre }} {{ $asistencia->estudiante->apellido }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="fecha" class="form-label">Fecha:</label>
                        <input type="text" class="form-control" id="fecha" value="{{ $asistencia->fecha }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="hora_entrada" class="form-label">Hora de Entrada:</label>
                        <input type="text" class="form-control" id="hora_entrada" value="{{ $asistencia->hora_entrada }}" readonly>
                    </div>
                    <div class="text-center">
                        <a href="{{ route('asistencias.index') }}" class="btn btn-primary">Retornar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
