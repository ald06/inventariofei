@extends('layouts.app')
@section('content')
  <div class="container-fluid">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Detalle del Mantenimiento</h3>
          <a href="{{url('salones')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>

        <div class="form-group row justify-content-center my-4">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3" disabled> {{ $salones->observaciones }} </textarea>     
          </div>
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