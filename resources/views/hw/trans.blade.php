@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Transeferencia de Hardware</h3>
<a href="{{url('hardware')}}" role="button" name="button" class="btn btn-dan        ger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($hardware, ['action' => ['HardwareController@transfer', $hardware->id], 'method' => 'PUT']) !!}
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
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo" disabled>
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
             <input type="text" id="marca" name="marca" value="{{$hardware->marca }}" class="form-control text-center text-uppercase" placeholder="" disabled>
           </div>
          <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{$hardware->modelo }}" class="form-control text-center text-uppercase" placeholder="" disabled>
          </div>
          <div class="form-group col-md-4">
            <label for="tiposAdquisicion">Forma de adquisicion</label>
            <select class="form-control" name="tiposAdquisicion" id="tiposAdquisicion" disabled>
              <option value=""></option>
              @foreach ($tiposadquisicion as $tipoadquisicion)
                <option value="{{$tipoadquisicion->id}}" @if($tipoadquisicion->id == $bien->tipoadquisicion_id ) selected @endif>{{$tipoadquisicion->nombre}}</option>
              @endforeach
            </select>
         </div>
         <div >
          <h5>Datos de la transferencia:</h5>
         </div>
         <div class="form-group col-md-4">
            <label for="responsable">Responsable</label>
            <select class="form-control" name="responsable" id="responsable">
              <option value=""></option>
              @foreach ($responsable as $respo)
                <option value="{{$respo->id}}" @if($respo->id == $bien->responsable_id ) selected @endif>{{$respo->nombre}}</option>
              @endforeach
            </select>
         </div>
         <div class="form-group col-md-4">
            <label for="responsable">Ubicación</label>
            <select class="form-control" name="ubicacion" id="ubicacion">
              <option value=""></option>
              @foreach ($ubicacion as $ubi)
                <option value="{{$ubi->id}}" @if($ubi->id == $bien->ubicacion_id ) selected @endif>{{$ubi->aula}}</option>
              @endforeach
            </select>
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
  $('#responsable').select2({
    placeholder: "responsable"
  });
  $('#nombre').select2({
    placeholder: "Nombre"
  });
});
</script>
@endsection
