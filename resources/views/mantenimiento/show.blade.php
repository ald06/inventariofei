@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Detalle del Mantenimiento</h3>
          <a href="{{url('mantenimiento')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>

      <div class="card-body">
        <div class="form-row"> 
        <div class="form-group col-md-3">
           <label for="nserie">nserie</label>
           <input type="text" id="nserie" name="nserie" value="{{ $mantenimiento->nserie }}" class="form-control text-center text-uppercase" placeholder="" required disabled>
         </div>    
        </div>{{-- row --}}
        <div class="form-group row justify-content-center my-4">
          <label for="justificacion" class="col-sm-2 col-form-label">Justificacion </label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "justificacion" id="justificacion" rows="3" disabled> {{ $mantenimiento->justificacion }} </textarea>
          </div>
        </div>
        <div class="form-group row justify-content-center my-4">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3" disabled> {{ $mantenimiento->observaciones }} </textarea>     
          </div>
        <div class="col-sm-9">
             <label for="fecha" class="col-sm-2 col-form-label">Fecha de ingreso</label>
            <date class="form-control" name = "fecha" id="fecha" rows="3"> {{ $mantenimiento->fecha }} </date required> 
        </div>
        <div>

      </div>
    </div>
  </div>
      
<script>
function Estatus(){
    if(document.getElementById('estatus').value=="1"){
        document.getElementById('estado').innerHTML="Disponible";
    }
}
</script>      

        
@endsection