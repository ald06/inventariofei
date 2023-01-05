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
            <div class="card-body">      
        <div class="form-group row justify-content-center my-5">
          <label for="diagnostico" class="col-sm-2 col-form-label">Diagnostico </label>
            <div class="col-sm-9">
            <textarea class="form-control" name = "diagnostico" id="diagnostico" rows="3"> {{ old('diagnostico') }} </textarea>
          </div>
        </div>
     <div class="form-group row justify-content-center my-5">
          <label for="justificacion" class="col-sm-2 col-form-label">Justificacion</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "justificacion" id="justificacion" rows="3"> {{ old('justificacion') }} </textarea>
          </div>
        </div>
     <div class="form-group row justify-content-center my-5">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3"> {{ old('observaciones') }} </textarea>
          </div>
         </div> 
        <div class="form-group row justify-content-center my-5">    
        <label for="fecha" class="col-sm-2 col-form-label">Editar fecha</label>
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