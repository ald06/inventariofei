@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Alta de bien</h3>
        <a href="{{url('bien')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right"><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($bien, ['action' => 'BienController@store']) !!}
      <div class="card-body">
        <div class="form-group row justify-content-center my-5">
          <label for="noserie" class="col-sm-2 col-form-label"> noserie</label>
          <div class="col-sm-10">
            <input type="text" id="noserie" name="noserie" value="{{ old('noserie') }}" class="form-control text-center" placeholder="Ejemplo: VECJ880326" maxlength="10">
          </div>
        </div>
        <div class="form-group row justify-content-center my-5">
          <label for="noinventario" class="col-sm-2 col-form-label">noinventaio </label>
          <div class="col-sm-10">
            <input type="text" id="noinventario" name="noinventario" value="{{ old('noinventario') }}" class="form-control text-center" placeholder="Ejemplo: Juan Pérez García">
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
  </div>
@endsection
