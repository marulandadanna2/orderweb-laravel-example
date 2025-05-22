@extends('templates.base')
@section('title', 'Editar orden ')
@section('header', 'Editar orden')
@section('content')
     <div class="row">
        <div class="col-lg-12 mb-4">
            <form action="{{ route('order.update', $order) }}" method="POST">
                @csrf
                @method('PUT')
                <div class="row form-group">
                    <div class="col-lg-12 mb-4">
                        <label for="date">Fecha legalizacion</label>
                        <input type="date" class="form-control" name="legalization_date" id="date" value="{{ $order['legalization_date'] }}" required>
                    </div>
                    <div class="col-lg-6 mb-4">
                        <label for="address">Direccion</label>
                        <input type="text" class="form-control" name="address" id="address" value="{{ $order['address'] }}" required>
                    </div>
                </div>
                <div class="row form-group">
                    <div class="coll-lg-6 mb-4">
                        <label for="city">Ciudad</label>
                       <select name="city" id="city" class="form-control">
                        @foreach ($cities as $city )
                        <option value="{{ $city['value'] }}" @if ($city['value'] ==$order['city']) selected @endif>
                            {{ $city['name'] }}
                        </option>                        
                        @endforeach
                        </select>
                    </div>      
                    <div class="col-lg-6 mb-4">
                        <label for="causal_id">Causal</label>
                        <select name="causal_id" id="causal_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ($causals as $causal )
                            <option value="{{ $causal['id'] }}" @if ($causal['id']==$order['causal_id']) selected @endif>
                                {{ $causal['description'] }}
                            </option>                               
                            @endforeach
                        </select>
                    </div>    
                    <div class="col-lg-6 mb-4">
                        <label for="observation_id">Observacion</label>
                        <select name="observation_id" id="observation_id" class="form-control">
                            <option value="">Seleccione</option>
                            @foreach ( $observations as $observation )
                            <option value="{{ $causal['id'] }}"@if ($observation['id']==$order['observation_id']) selected @endif>
                                {{ $causal['description'] }}
                            </option>                               
                            @endforeach
                        </select>
                    </div>
                </div>    
                <div class="row">
                    <div class="col-lg-6">
                        <button type="submit" class="btn btn-primary btn-block">Guardar</button>
                    </div>
                    <div class="col-lg-6">
                        <a href="{{ route('order.edit') }}" class="btn btn-secondary btn-block">Cancelar</a>
                    </div>
                </div>
            </form>

            <hr>

            <div class="row">
                <div class="col-lg-12 mb-4">
                    <div class="card shadow mb-4">
                        <div class="card-header">
                            <h6 class="font-weight-bold text-primary">Añadir o retirar actividades</h6>
                        </div>
                        <div class="card-body">
                            <div class="row form-group">
                                <div class="col-lg-6">
                                    <label for="table_data">Actividdes agregadas</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
     </div>

@endsection