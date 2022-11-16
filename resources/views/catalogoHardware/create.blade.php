@extends('layouts.app')

@section('links')
@endsection

@section('content')
    <div class="container">
        {!! Form::model($tiposHardware, ['action' => 'TiposHardwareController@store']) !!}
        <div class="col">
            <label for="nomHardware">Nombre del Hardware</label>
            <input type="text" id="nomHardware"  name="nomHardware" value="{{ old('nomHardware') }}" class="form-control" require>
            <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Agregar</button>
        </div>
        {!! Form::close() !!}
    </div>
@endsection