@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-white">Ver estudiante grupo</div>

                <div class="card-body">
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

                    <div class="text-end">
                        <a href="{{ route('estudiantes_grupos.index') }}" class="btn btn-primary">Retornar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
