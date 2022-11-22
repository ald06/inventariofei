@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
    {!! Form::model($responsable, ['action' => 'ResponsableController@store']) !!}
        <div class="col">
            <label for="nombre">Nombre del Responsable</label>
            <input type="text" id="nombre"  name="nombre" value="{{ old('nombre') }}" class="form-control" require>
            <label for="rol">Rol</label>
            <input type="text" id="rol"  name="rol" value="{{ old('rol') }}" class="form-control" require>
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Agregar</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection