@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        {!! Form::model($tiposAdquisicion, ['action' => ['TiposAdquisicionController@update', $tiposAdquisicion->id], 'method' => 'PUT']) !!}
        <div class="col">
            <label for="nombre">Nombre del Hardware</label>
            <input type="text" id="nombre"  name="nombre" value="{{$tiposAdquisicion->nombre }}" class="form-control" require>
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection