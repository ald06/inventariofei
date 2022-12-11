@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="card text-center">
    <div class="card-header">
        <h3 class="float-left">Añadir Dispositvo</h3>
        <a href="{{url('tiposhardware')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
        <div class="card-body">
            {!! Form::model($tiposHardware, ['action' => 'TiposHardwareController@store']) !!}
            <div class="col-md-12">
                <label for="nomHardware">Nombre del Hardware</label>
                <input type="text" id="nomHardware"  name="nomHardware" value="{{ old('nomHardware') }}" class="form-control" required>
                <div class="row justify-content-center mt-4">
                <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Agregar</button>
                </div>
                @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $errors }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>
@endsection