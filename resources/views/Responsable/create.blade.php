@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="container">
    <div class="card text-center">
    <div class="card-header"> 
    <h3 class="float-left">Registrar responsable</h3>
        <a href="{{url('responsable')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
        </div>
        <div class="card-body">    
        {!! Form::model($responsable, ['action' => 'ResponsableController@store']) !!}
        <div class="col">
            <label for="matricula">Matricula</label>
            <input type="text" id="matricula"  name="matricula" value="{{ old('matricula') }}" class="form-control" required pattern="[A-Za-z0-9]+">
            <label for="nombre">Nombre del Responsable</label>
            <input type="text" id="nombre"  name="nombre" value="{{ old('nombre') }}" class="form-control" required pattern="[A-Za-z0-9]+">
            <label for="rol">Rol</label>
            <input type="text" id="rol"  name="rol" value="{{ old('rol') }}" class="form-control" required pattern="[A-Za-z0-9]+">
        </div>
        <div class="row justify-content-center mt-4">
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
        {!! Form::close() !!}
    </div>
    </div>
    </div>
@endsection