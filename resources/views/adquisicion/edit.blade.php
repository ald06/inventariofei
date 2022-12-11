@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Corrección de datos de la Adquisición</h3>
                <a href="{{url('tiposadquisicion')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
            </div>
            <div class="card-body">
            {!! Form::model($tiposAdquisicion, ['action' => ['TiposAdquisicionController@update', $tiposAdquisicion->id], 'method' => 'PUT']) !!}
                <div class="col">
                    <label for="nombre">Nombre/Tipo</label>
                    <input type="text" id="nombre"  name="nombre" value="{{$tiposAdquisicion->nombre }}" class="form-control" require>
                </div>
                <div class="row justify-content-center mt-4">
                    <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
                </div>
            {!! Form::close() !!}
            </div>
        </div>
        
    </div>
@endsection