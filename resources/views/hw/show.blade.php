@extends('layouts.appaux')
@section('content')
  <div class="container-fluid">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Servicios</h3>
        <a href="{{url('ventanilla/create')}}" role="button" name="button" class="btn btn-success col-md-2 float-right">
          <i class="fas fa-plus"></i>
        </a>
      </div>
      <div class="card-body">
        {{ $servicio->cliente }}
      </div>
    </div>
  </div>
@endsection
