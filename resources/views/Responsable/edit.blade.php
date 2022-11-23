@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        {!! Form::model($responsable, ['action' => ['ResponsableController@update', $responsable->id], 'method' => 'PUT']) !!}
        <div class="col">
            <label for="matricula">Matricula</label>
            <input type="text" id="matricula"  name="matricula" value="{{$responsable->matricula }}" class="form-control" require>
            <label for="nombre">Nombre</label>
            <input type="text" id="nombre"  name="nombre" value="{{$responsable->nombre }}" class="form-control" require>
            <label for="rol">Rol</label>
            <input type="text" id="rol"  name="rol" value="{{$responsable->rol }}" class="form-control" require>
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection