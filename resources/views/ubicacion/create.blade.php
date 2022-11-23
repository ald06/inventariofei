@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="card text-center">
    <div class="card-header">
        <h3 class="float-left">Añadir Ubicacion</h3>
        <a href="{{url('ubicacion')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
        <div class="card-body">
            {!! Form::model($ubicacion, ['action' => 'UbicacionController@store']) !!}
            <div class="col-md-12">
                <label for="edif">Edificio</label>
                <input type="text" id="edificio"  name="edificio" value="{{ old('edificio') }}" class="form-control" require>
                <label for="aula">Aula</label>
                <input type="text" id="aula"  name="aula" value="{{ old('aula') }}" class="form-control" require>
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