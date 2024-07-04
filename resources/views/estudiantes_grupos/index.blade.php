@extends('layouts.app')

@section('content')
<div class="container">
    @if (session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    <h1>Lista de Estudiantes por Grupo</h1>

    <form action="{{ route('estudiantes_grupos.index') }}" method="GET">
        @csrf
        <div class="row mb-3">
            <div class="col-sm-4">
                <label for="estudiante_id" class="form-label">Estudiante</label>
                <select name="estudiante_id" class="form-control" required>
                    <option value="">Seleccione un estudiante</option>
                    @foreach ($estudiantes as $estudiante)
                        <option value="{{ $estudiante->id }}">{{ $estudiante->nombre }} {{ $estudiante->apellido }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-sm-4 d-flex align-items-end">
                <button type="submit" class="btn btn-primary me-2">Buscar</button>
                <a href="{{ route('estudiantes_grupos.create') }}" class="btn btn-secondary">Crear Nuevo</a>
            </div>
        </div>
    </form>

    <div class="table-responsive">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Estudiante</th>
                    <th>Grupo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($estudianteGrupos as $estudianteGrupo)
                    <tr>
                        <td>{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}</td>
                        <td>{{ $estudianteGrupo->grupo->nombre }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <a href="{{ route('estudiantes_grupos.edit', $estudianteGrupo->id) }}" class="btn btn-warning btn-sm">Editar</a>
                                <a href="{{ route('estudiantes_grupos.show', $estudianteGrupo->id) }}" class="btn btn-info btn-sm">Ver</a>
                                <a href="{{ route('estudiantes_grupos.delete', $estudianteGrupo->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('¿Estás seguro?')">Eliminar</a>
                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">No hay registros disponibles.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="row mt-4">
        <div class="col-sm-12 d-flex justify-content-center">
            {{ $estudianteGrupos->links() }}
        </div>
    </div>
</div>
@endsection
