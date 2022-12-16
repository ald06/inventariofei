@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="container">
    <div class="card text-center">
    <div class="card-header"> 
    <h3 class="float-left">Registrar</h3>
        <a href="{{url('responsable')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
        </div> 
        {!! Form::model($salones, ['action' => 'SalonesController@store']) !!}
        <div class="card-body">  
        <div class="form-row">
             <div class="form-group col-md-4">
            <label for="lugar">Lugar</label>
            <select class="form-control" name="lugar" id="lugar" required>
              <option value="lugar" @if(old('lugar') == "") selected @endif>Elija una opcion</option>
                @foreach ($ubicacion as $ubicacion)
                  <option value="{{$ubicacion->aula}}"> {{$ubicacion->aula}}</option>
                @endforeach
            </select>  
            </div> 
            <div class="form-group col-md-4">
            <label for="estatus">Status</label>
            <select class="form-control" name="estatus" id="estatus" required>
              <option value="" @if(old('estatus') == "") selected @endif>Elija un opcion</option>
              <option value="1" @if(old('estatus') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('estatus') == "Tarjeta") selected @endif>Mantenimiento </option>
              <option value="3" @if(old('estatus') == "Tarjeta") selected @endif>Asignado </option>
              <option value="5" @if(old('estatus') == "Tarjeta") selected @endif>Progreso </option>
            </select>
         </div>
             <div class="form-group col-md-4">
            <label for="encargardo">Encargado</label>
            <select class="form-control" name="encargado" id="encargado" required>
              <option value="encargado" @if(old('encargado') == "") selected @endif>Elija una opcion</option>
                @foreach ($responsable as $responsable)
                  <option value="{{$responsable->nombre}}"> {{$responsable->nombre}}</option>
                @endforeach
            </select>  
            </div> 
            </div>
          <div class="form-group row justify-content-center my-5">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3"> {{ old('observaciones') }} </textarea >
          </div>
        </div>
        <div class="form-group row justify-content-center my-5">    
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-9">    
        <input type="date" id="fecha"  name="fecha" value="{{ old('fecha') }}" class="form-control" required pattern="[A-Za-z0-9 ]+">
            </div>
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