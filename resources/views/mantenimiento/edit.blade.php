@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Corrección de Estado</h3>
                <a href="{{url('mantenimiento')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
            </div>
            <div class="card-body">
                {!! Form::model($mantenimiento, ['action' => ['MantenimientoController@update', $mantenimiento->id], 'method' => 'PUT']) !!}
        <div class="form-row">
            <div class="form-group col-md-4">
            <label for="estatus">Status</label>
            <select class="form-control" name="estatus" id="estatus" required>
              <option value="" @if(old('estatus') == "") selected @endif>Elija un opcion</option>
              <option value="1" @if(old('estatus') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('estatus') == "Tarjeta") selected @endif>Ocupado </option>
            </select>
         </div>
                </div>
        <div class="row justify-content-center mt-4">
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
                {!! Form::close() !!}
            </div>
            
        </div>
       
    </div>
@endsection