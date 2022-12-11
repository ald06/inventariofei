@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Correccion de datos del Hadware</h3>
<a href="{{url('hardware')}}" role="button" name="button" class="btn btn-dan        ger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($hardware, ['action' => ['HardwareController@update', $hardware->id], 'method' => 'PUT']) !!}
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
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo" required>
              <option value=""></option>
                @foreach ($tiposhardware as $tipohardware)
                    <option value="{{$tipohardware->id}}" @if($tipohardware->id == $hardware->tipo ) selected @endif>{{$tipohardware->nomHardware}}</option>
                @endforeach
            </select>
         </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="marca">Marca</label>
             <input type="text" id="marca" name="marca" value="{{$hardware->marca }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{$hardware->modelo }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="tiposAdquisicion">Forma de adquisicion</label>
            <select class="form-control" name="tiposAdquisicion" id="tiposAdquisicion" required>
              <option value=""></option>
              @foreach ($tiposadquisicion as $tipoadquisicion)
                <option value="{{$tipoadquisicion->id}}" @if($tipoadquisicion->id == $bien->tipoadquisicion_id ) selected @endif>{{$tipoadquisicion->nombre}}</option>
              @endforeach
            </select>
         </div>
        </div>
     </div>
        <div class="form-group row justify-content-center my-4">
          <label for="caracteristicas" class="col-sm-2 col-form-label">Caracteristicas </label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "caracteristicas" id="caracteristicas" rows="3"> {{ $hardware->caracteristicas }} </textarea required>
          </div>
        </div>
        <div class="form-group row justify-content-center my-4">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3"> {{ $hardware->caracteristicas }} </textarea required>
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
@section('scripts')
<script>
$(document).ready(function() {
  $('#tiposAdquisicion').select2({
    placeholder: "tipo Adquisicion"
  });
  $('#tipo').select2({
    placeholder: "Tipo Hardware"
  });
});
</script>
@endsection
