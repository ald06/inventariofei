@extends('layouts.app')

@section('links')
@endsection

@section('content')
  <div class="container mt-3">
    <div class="card text-center">
      <div class="card-header">
        <h3 class="float-left">Alta de Hadware</h3>
        <a href="{{url('hardware')}}" role="button" name="button" class="btn btn-danger col-md-2 float-right "><i class="fas fa-chevron-left fa-fw fa-lg"></i> Regresar</a>
      </div>
      {!! Form::model($hardware, ['action' => 'HardwareController@store']) !!}
      <div class="card-body">
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="noserie">No de serie</label>
             <input type="text" id="noserie" name="noserie" value="{{ old('noserie') }}" class="form-control text-center text-uppercase" placeholder="" maxlength="9" required>
           </div>
          <div class="form-group col-md-4">
            <label for="noinventario">No de inventario</label>
            <input type="text" id="noinventario" name="noinventario" value="{{ old('noinventario') }}" class="form-control text-center text-uppercase" placeholder="" maxlength="9" required>
          </div>
          <div class="form-group col-md-4">
            <label for="tipo">Tipo</label>
            <select class="form-control" name="tipo" id="tipo" required>
              <option value="" @if(old('tipo') == "") selected @endif>Elija una opción</option>
                @foreach ($tiposhardware as $tipohardware)
                  <option value="{{$tipohardware->id}}"> {{$tipohardware->nomHardware}}</option>
                @endforeach
            </select>
         </div>
        </div>
        <div class="form-row">
           <div class="form-group col-md-4">
             <label for="marca">Marca</label>
             <input type="text" id="marca" name="marca" value="{{ old('marca') }}" class="form-control text-center text-uppercase" placeholder="" required>
           </div>
          <div class="form-group col-md-4">
            <label for="modelo">Modelo</label>
            <input type="text" id="modelo" name="modelo" value="{{ old('modelo') }}" class="form-control text-center text-uppercase" placeholder="" required>
          </div>
          <div class="form-group col-md-4">
            <label for="tiposAdquisicion">Forma de adquisicion</label>
            <select class="form-control" name="tiposAdquisicion" id="tiposAdquisicion" required>
              <option value="" @if(old('tiposAdquisicion') == "") selected @endif>Elija un opción</option>
              @foreach ($tiposadquisicion as $tipoadquisicion)
                <option value="{{$tipoadquisicion->id}}"> {{$tipoadquisicion->nombre}}</option>
              @endforeach
            </select>
         </div>
        </div>
     </div>
        <div class="form-group row justify-content-center my-5">
          <label for="caracteristicas" class="col-sm-2 col-form-label">Caracteristicas </label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "caracteristicas" id="caracteristicas" rows="3" required> {{ old('caracteristicas') }} </textarea>
          </div>
        </div>
        <div class="form-group row justify-content-center my-5">
          <label for="observaciones" class="col-sm-2 col-form-label">Observaciones</label>
          <div class="col-sm-9">
            <textarea class="form-control" name = "observaciones" id="observaciones" rows="3" required> {{ old('observaciones') }} </textarea>
          </div>
        </div>
        <div class="row justify-content-center mt-4">
          <button type="submit" class="btn btn-danger btn-block col-md-3"><i class="fas fa-save fa-fw fa-lg"></i> Guardar</button>
        </div>
      </div>
      {!! Form::close() !!}
    </div>
@endsection
