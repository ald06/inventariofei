@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Corregir Datos</h3>
                <a href="{{url('responsable')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
            </div>
            <div class="card-body">
                {!! Form::model($salones, ['action' => ['SalonesController@update', $salones->id], 'method' => 'PUT']) !!}
        </div>
        <div class="card-body">    
        {!! Form::model($salones, ['action' => 'SalonesController@store']) !!}
        <div class="col">
            <label for="dispositivo">Dispositivo</label>
            <input type="text" id="dispositivo"  name="dispositivo" value="{{ old('dispositivo') }}" class="form-control" required pattern="[A-Za-z0-9]+">
            <div class="form-group col-md-4">
            <label for="estatus">Status</label>
            <select class="form-control" name="status" id="status" required>
              <option value="" @if(old('status') == "") selected @endif>Elija un opcion</option>
              <option value="1" @if(old('status') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('status') == "Tarjeta") selected @endif>Ocupado </option>
            </select>
         </div>
            <label for="rol">Lugar</label>
            <input type="text" id="lugar"  name="lugar" value="{{ old('lugar') }}" class="form-control" required pattern="[A-Za-z0-9]+">
            <label for="fecha">Fecha:</label>
            <input type="date" id="fecha" name="fecha" value="{{ old('fecha') }}" class="form-control" required>
            <label for="responsable">Nombre del Responsable</label>
            <input type="text" id="responsable"  name="responsable" value="{{ old('responsable') }}" class="form-control" required>
        </div>
        <div class="row justify-content-center mt-4">
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
                {!! Form::close() !!}
            </div>
            
        </div>
       
    </div>
@endsection