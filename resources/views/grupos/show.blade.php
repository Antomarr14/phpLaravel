@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Ver grupo</div>

                <div class="card-body">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" value="{{ $grupo->nombre }}" disabled>
                    </div>

                    <div class="mb-3">
                        <label for="descripcion" class="form-label">Descripción</label>
                        <textarea class="form-control" id="descripcion" name="descripcion" disabled>{{ $grupo->descripcion }}</textarea>
                    </div>

                    <div class="text-end">
                        <a href="{{ route('grupos.index') }}" class="btn btn-primary">Retornar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
