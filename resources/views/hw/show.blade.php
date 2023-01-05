@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Detalle del Hardware</h3>
          <a href="{{url('hardware')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
        </a>
      </div>

      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-3">
             <label for="">No inventario</label>
             <input type="text" id="" name="" value="{{ $bien->noserie }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
          <div class="form-group col-md-3">
            <label for="">No serie</label>
            <input type="text" id="" name="" value="{{ $bien->noinventario }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
          <div class="form-group col-md-3">
            <label for="marca">Marca</label>
            <input type="text" id="marca" name="marca" value="{{ $hardware->marca }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
         <div class="form-group col-md-3">
           <label for="modelo">Modelo</label>
           <input type="text" id="modelo" name="modelo" value="{{ $hardware->modelo }}" class="form-control text-center text-uppercase" placeholder="" disabled>
         </div>
        </div>{{-- row --}}
        <div class="form-row">
           <div class="form-group col-md-3">
             <label for="marca"> Responsable </label>
             <input type="text" id="marca" name="marca" value="{{ $responsable->nombre }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
          <div class="form-group col-md-3">
            <label for="modelo">Ubicacion</label>
            <input type="text" id="modelo" name="modelo" value="{{ $ubicacion->edificio }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
          <div class="form-group col-md-3">
            <label for="marca">Tipo de hardware</label>
            <input type="text" id="marca" name="marca" value="{{ $tiposhardware->nomHardware }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
         <div class="form-group col-md-3">
           <label for="modelo">tipo de adquisicion</label>
           <input type="text" id="modelo" name="modelo" value="{{ $tiposadquisicion->nombre }}" class="form-control text-center text-uppercase" placeholder="" disabled>
         </div>
        </div>{{-- row --}}
        <div class="form-group row justify-content-center my-4">
          <label for="caracteristicas" class="col-sm-2 col-form-label">Caracteristicas </label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "caracteristicas" id="caracteristicas" rows="3" disabled> {{ $hardware->caracteristicas }} </textarea >
          </div>
        </div>
        <div class="form-group row justify-content-center my-4">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3" disabled> {{ $hardware->observaciones }} </textarea >
          </div>
        </div>
        <div>

      </div>
    </div>
  </div>
@endsection
