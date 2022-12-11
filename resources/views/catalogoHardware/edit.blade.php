@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h3 class="float-left">Corrección de datos del Equipo de Hardware</h3>
                <a href="{{url('tiposhardware')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
            </div>
            <div class="card-body">
                {!! Form::model($tiposHardware, ['action' => ['TiposHardwareController@update', $tiposHardware->id], 'method' => 'PUT']) !!}
                <div class="col">
                    <label for="nombre">Nombre del Hardware</label>
                    <input type="text" id="nomHardware"  name="nomHardware" value="{{$tiposHardware->nomHardware }}" class="form-control" require>
                    <div class="row justify-content-center mt-4">
                        <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
       
    </div>
@endsection