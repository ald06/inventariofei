@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Corrección de datos del Responsable</h3>
                <a href="{{url('responsable')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
            </div>
            <div class="card-body">
                {!! Form::model($responsable, ['action' => ['ResponsableController@update', $responsable->id], 'method' => 'PUT']) !!}
                <div class="col">
                    <label for="matricula">Matricula</label>
                    <input type="text" id="matricula"  name="matricula" value="{{$responsable->matricula }}" class="form-control" require>
                    <label for="nombre">Nombre</label>
                    <input type="text" id="nombre"  name="nombre" value="{{$responsable->nombre }}" class="form-control" require>
                    <label for="rol">Rol</label>
                    <input type="text" id="rol"  name="rol" value="{{$responsable->rol }}" class="form-control" require>
                </div>
                <div class="row justify-content-center mt-4">
                    <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
                </div>
                {!! Form::close() !!}
            </div>
            
        </div>
       
    </div>
@endsection