@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Alta de Software</h3>
        <a href="{{url('software')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($software, ['action' => 'SoftwareController@store']) !!}
      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ old('noserie') }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ old('noinventario') }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          {{-- <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo" required>
              <option value="" @if(old('tipo') == "") selected @endif>Elija una opcion</option>
              <option value="Laptop" @if(old('tipo') == "Laptop") selected @endif>Laptop</option>
              <option value="Escritorio" @if(old('tipo') == "Escritorio") selected @endif>Escritorio </option>
                <option value="Servidor" @if(old('tipo') == "Servidor") selected @endif>Servidor </option>
            </select>
         </div> --}}
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="marca">nombre</label>
             <input type="text" id="marca" name="marca" value="{{ old('marca') }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="modelo">version</label>
            <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="estatus">Estatus</label>
            <select class="form-control" name="estatus" id="estatus" required>
              <option value="" @if(old('estatus') == "") selected @endif>Elija un opcion</option>
              <option value="1" @if(old('estatus') == "Tarjeta") selected @endif>Disponible</option>
              <option value="2" @if(old('estatus') == "Tarjeta") selected @endif>ocupado </option>
            </select>
         </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="responsable">Responsable</label>
            <select class="form-control" name="niveleducativo_id" id="niveleducativo_id">
            <option value="">elija una opcion</option>
            @foreach ($responsables as $responsable)
              <option value="{{$responsable->id}}"> {{$responsable->nombre}}</option>
            @endforeach
          </select>
         </div>
          <div class="form-group col-md-4">
            <label for="ubicacion">Ubicacion</label>
            <select class="form-control" name="ubicacion" id="ubicacion">
            <option value="">elija una opcion</option>
            @foreach ($ubicaciones as $ubicacion)
              <option value="{{$ubicacion->id}}"> {{$ubicacion->aula}}</option>
            @endforeach
          </select>
         </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ old('noserie') }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ old('noinventario') }}" class="form-control text-center text-uppercase" placeholder="" required>
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
