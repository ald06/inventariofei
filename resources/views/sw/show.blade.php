@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Alta de Software</h3>
        <a href="{{url('software')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ $bien->noserie }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ $bien->noinventario }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="tipoSoftware">Tipo</label>
            <input type="text" id="tipoSoftware" name="tipoSoftware" value="{{ $software->tipoSoftware}}" class="form-control text-center text-uppercase" placeholder="" disabled>
         </div>
        </div>

        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="nombre">nombre</label>
             <input type="text" id="nombre" name="nombre" value="{{ $software->nombre }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
          <div class="form-group col-md-4">
            <label for="version">version</label>
            <input type="text" id="version" name="version" value="{{ $software->version }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="equiposPermitidos">Equipos Permitidos</label>
            <input type="text" id="equiposPermitidos" name="equiposPermitidos" value="{{ $software->equiposPermitidos }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="licencia">Licencia</label>
             <input type="text" id="licencia" name="licencia" value="{{ $software->licencia }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
           <div class="form-group col-md-8">
             <label for="descripcion">Descripcion</label>
             <input type="text" id="descripcion" name="descripcion" value="{{ $software->descripcion }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>

        </div>
        
      </div>
    </div>
  </div>
@endsection
