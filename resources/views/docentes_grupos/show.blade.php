@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-primary text-white">Ver docente grupo</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="docente_nombre" class="form-label">Docente</label>
                        <input type="text" class="form-control" id="docente_nombre" 
                        value="{{ $docenteGrupo->docente->nombre }} {{ $docenteGrupo->docente->apellido }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="grupo_nombre" class="form-label">Grupo</label>
                        <input type="text" class="form-control" id="grupo_nombre" 
                        value="{{ $docenteGrupo->grupo->nombre }}" disabled>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('docentes_grupos.index') }}" class="btn btn-primary">Retornar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
