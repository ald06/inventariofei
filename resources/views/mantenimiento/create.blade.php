@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="container">
    <div class="card text-center">
    <div class="card-header"> 
    <h3 class="float-left">Registrar mantenimiento</h3>
        <a href="{{url('mantenimiento')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
        </div>  
        {!! Form::model($mantenimiento, ['action' => 'MantenimientoController@store']) !!}
        <div class="card-body">  
        <div class="form-row">
             <div class="form-group col-md-4">
            <label for="nserie">N.Serie</label>
            <select class="form-control" name="nserie" id="nserie" required>
              <option value="nserie" @if(old('nserie') == "") selected @endif>Elija una opcion</option>
                @foreach ($bien as $bien)
                  <option value="{{$bien->id}}"> {{$bien->noserie}}</option>
                @endforeach
            </select>  
            </div> 
            <div class="form-group col-md-4">
            <label for="dispositivo">Dispositivo</label>
            <select class="form-control" name="dispositivo" id="dispositivo" required>
              <option value="dispositivo" @if(old('dispositivo') == "") selected @endif>Elija una opcion</option>
                @foreach ($tiposhardware as $tipohardware)
                  <option value="{{$tipohardware->id}}"> {{$tipohardware->nomHardware}}</option>
                @endforeach
            </select>
            </div>
             </div> 
        <div class="form-group row justify-content-center my-5">
          <label for="diagnostico" class="col-sm-2 col-form-label">Diagnostico </label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "diagnostico" id="diagnostico" rows="3"> {{ old('diagnostico') }} </textarea required>
          </div>
        </div>
            <div class="form-group row justify-content-center my-5">
            <label for="estatus">Status</label>
            <div class="col-sm-9">    
            <select class="form-control" name="estatus" id="estatus" required>
              <option value="" @if(old('estatus') == "") selected @endif>Elija un opcion</option>
              <option value="1" @if(old('estatus') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('estatus') == "Tarjeta") selected @endif>Mantenimiento </option>
            </select>
         </div>
         </div>
     <div class="form-group row justify-content-center my-5">
          <label for="justificacion" class="col-sm-2 col-form-label">Justificacion</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "justificacion" id="justificacion" rows="3"> {{ old('justificacion') }} </textarea required>
          </div>
        </div>
     <div class="form-group row justify-content-center my-5">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3"> {{ old('observaciones') }} </textarea required>
          </div>
         </div> 
        <div class="form-group row justify-content-center my-5">    
        <label for="fecha" class="col-sm-2 col-form-label">Fecha</label>
        <div class="col-sm-9">    
        <input type="date" id="fecha"  name="fecha" value="{{ old('fecha') }}" class="form-control" required pattern="[A-Za-z0-9 ]+">
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