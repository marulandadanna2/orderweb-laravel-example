@extends('templates.base')
@section('title', 'Crear tecnico')
@section('header', 'Crear tecnico')
@section('content')
     <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="" method="POST">
                @csrf
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="descrption">Descripcion</label>
                        <input type="text" class="form-control" name="document" id="document" required>
                    </div>
                    <div class="col-lg-12 mb-4">
                        <label for="hours">Horas</label>
                        <input type="number" class="form-control" name="hours" id="hours" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('causal.index') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>
        </div>
     </div>

@endsection