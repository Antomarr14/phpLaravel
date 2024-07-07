@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-danger text-white">
                    Eliminar estudiante grupo
                </div>

                <div class="card-body">
                    <form action="{{ route('estudiantes_grupos.destroy', $estudianteGrupo->id) }}" method="POST">
                        @csrf
                        @method('DELETE')

                        <div class="mb-3">
                            <label for="estudiante_nombre" class="form-label">Estudiante</label>
                            <input type="text" class="form-control" id="estudiante_nombre" 
                                value="{{ $estudianteGrupo->estudiante->nombre }} {{ $estudianteGrupo->estudiante->apellido }}" disabled>
                        </div>

                        <div class="mb-3">
                            <label for="grupo_nombre" class="form-label">Grupo</label>
                            <input type="text" class="form-control" id="grupo_nombre" 
                                value="{{ $estudianteGrupo->grupo->nombre }}" disabled>
                        </div>

                        <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="submit" class="btn btn-danger me-md-2" onclick="return confirm('¿Estás seguro?')">Eliminar</button>
                            <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-secondary">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
