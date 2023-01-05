@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Correccion de datos del software</h3>
        <a href="{{url('software')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right"><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($software, ['action' => ['SoftwareController@update', $software->id], 'method' => 'PUT']) !!}
      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ $bien->noserie }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ $bien->noinventario }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="tipoSoftware">Tipo</label>
            <select class="form-control" name="tipoSoftware" id="tipoSoftware" required>
              <option value="" @if(old('tipoSoftware') == "") selected @endif>Elija una opcion</option>
              <option value="estadistico" @if($software->tipoSoftware  == "estadistico") selected @endif>Estadistico</option>
              <option value="programacion" @if($software->tipoSoftware  == "programacion") selected @endif>Programacion </option>
                <option value="general" @if($software->tipoSoftware  == "general") selected @endif>General </option>
            </select>
         </div>
        </div>

        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="nombre">nombre</label>
             <input type="text" id="nombre" name="nombre" value="{{ $software->nombre }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="version">version</label>
            <input type="text" id="version" name="version" value="{{ $software->version }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="equiposPermitidos">Equipos Permitidos</label>
            <input type="text" id="equiposPermitidos" name="equiposPermitidos" value="{{ $software->equiposPermitidos }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="licencia">Licencia</label>
             <input type="text" id="licencia" name="licencia" value="{{ $software->licencia }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
           <div class="form-group col-md-8">
             <label for="descripcion">Descripcion</label>
             <input type="text" id="descripcion" name="descripcion" value="{{ $software->descripcion }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>

        </div>
        <div class="row justify-content-center mt-4">
          <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
