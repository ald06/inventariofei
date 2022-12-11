@extends('layouts.app')

@section('links')
@endsection

@section('content')
<div class="container mt-3">
    <div class="card">
    <div class="card-header">
        <h3 class="float-left">Añadir Nueva Adquisicion</h3>
        <a href="{{url('tiposadquisicion')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
        <div class="card-body">
            {!! Form::model($tiposAdquisicion, ['action' => 'TiposAdquisicionController@store']) !!}
            <div class="col-md-12">
                <label for="nombre">Tipo de adquisición</label>
                <input type="text" id="nombre"  name="nombre" value="{{ old('nombre') }}" class="form-control" required>
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
