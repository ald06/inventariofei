<?php

namespace App\Http\Controllers;

use App\Hardware;
use App\Bien;
use App\Responsable;
use App\Ubicacion;
use App\tiposadquisicion;
use App\tiposhardware;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class HardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getData()
    {
     $hardwares = Hardware::with('bien')->get();
    //  $hardwares = Hardware::all();
     return datatables()->of($hardwares)->addColumn('actions', function($hardware) {
       return '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
                <a href="'.route('hardware.show', $hardware->id).'" role="button" class="dropdown-item"><i class="fas fa-info-circle"></i> Detalle </a>
             <div class="dropdown-divider my-1"></div>
                <a href="'.route('hardware.edit', $hardware->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar </a>
             <div class="dropdown-divider my-1"></div>
             <form action="'.route('hardware.destroy', $hardware->id).'" method="POST">
                 <input name="_token" type="hidden" value="'.csrf_token().'">
                 <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="dropdown-item "><i class="fas fa-times-circle fa-fw fa-lg text-danger"></i> Baja </button>
            </form>
              </div>
            </div>'

             ;
     })


   ->rawColumns(['actions'])
   ->make(true);
    }
    public function index()
    {
        return view('hw.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

      $tiposadquisicion = tiposAdquisicion::all();
      $tiposhardware = tiposhardware::all();
      $hardware = new Hardware;
      return view('hw.create', compact('hardware','tiposadquisicion','tiposhardware'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      // dd($request);
      $validator = $this->validate($request,[
        'noserie' => 'required|string|max:9|unique:biens',
        'noinventario' => 'required|string|max:9|unique:biens'
    ]);
      try {
        $ubicacion   = Ubicacion::where('aula','=','centro de computo')->firstOrFail();;
        $responsable = Responsable::where('rol', '=', 'jefe de centro de computo')->firstOrFail();
        $bien =  new Bien;
        $bien->noserie = $request->noserie;
        $bien->noinventario = $request->noinventario;
        $bien->responsable_id = $responsable->id;
        $bien->ubicacion_id = $ubicacion->id;
        $bien->estatus_id = 1;
        $bien->tipoadquisicion_id = $request->tiposAdquisicion;
        $bien->save();
        $ultimobien = Bien::latest('id')->first();
        $hardware = new Hardware;
        $hardware->marca = $request->marca;
        $hardware->modelo = $request->modelo;
        $hardware->tipo = $request->tipo;
        $hardware->caracteristicas = $request->caracteristicas;
        $hardware->observaciones = $request->observaciones;
        $hardware->bien_id = $ultimobien->id;
        $hardware->save();
      } catch (\Exception $e) {
          $errors = $e;
      return redirect()->back()->with('errors', $errors);
  }


    return redirect('hardware')->with('message', 'Registro Exitoso');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

      $hardware = Hardware::findOrFail($id);


      $hardware = Hardware::findOrFail($id);
      $bien = Bien::findOrFail($hardware->bien_id);
      $responsable = Responsable::findOrFail($bien->responsable_id);
      $ubicacion = Ubicacion::findOrFail($bien->ubicacion_id);
      $tiposadquisicion = tiposAdquisicion::findOrFail($bien->ubicacion_id);
      $tiposhardware = TiposHardware::findOrFail($bien->ubicacion_id);
      return view('hw.show', compact('hardware','bien','responsable','ubicacion','tiposhardware','tiposadquisicion'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $tiposadquisicion = tiposAdquisicion::all();
      $tiposhardware = tiposhardware::all();
      $hardware = Hardware::findOrFail($id);
      $bien = Bien::findOrFail($hardware->bien_id);
      return view('hw.edit', compact('hardware','bien','tiposadquisicion','tiposhardware'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {

      $validator = $this->validate($request,[
        'noserie' => 'required|string|max:9|',
        'noinventario' => 'required|string|max:9|'
    ]);
      try {
        $hardware = Hardware::findOrFail($id);
        $bien =  Bien::findOrFail($hardware->bien_id);

        $bien->noserie = $request->noserie;
        $bien->noinventario = $request->noinventario;
        $bien->tipoadquisicion_id = $request->tiposAdquisicion;
        $bien->save();

        $hardware->marca = $request->marca;
        $hardware->modelo = $request->modelo;
        $hardware->tipo = $request->tipo;
        $hardware->caracteristicas = $request->caracteristicas;
        $hardware->observaciones = $request->observaciones;
        $hardware->save();
      } catch (\Exception $e) {
          $errors = $e;
      return redirect()->back()->with('errors', $errors);
  }


    return redirect('hardware')->with('message', 'Actualizacion Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $hardware = Hardware::findOrFail($id);
      $bien =  Bien::findOrFail($hardware->bien_id);;
      $bien->estatus_id = 4;
      $bien->save();
      $hardware->delete();
      $bien->delete();
      return redirect('hardware/')->with('message', 'Hardware Eliminado Correctamente');
    }
}
