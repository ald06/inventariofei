<?php

namespace App\Http\Controllers;

use App\Hardware;
use App\Bien;
use App\Responsable;
use App\Ubicacion;
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
               <a href="'.route('hardware.edit', $hardware->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
             <div class="dropdown-divider my-1"></div>';
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

      // dd($ubicaciones);
      $hardware = new Hardware;
      return view('hw.create', compact('hardware'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      try {
        $ubicacion   = Ubicacion::where('aula','=','centro de computo')->firstOrFail();;
        $responsable = Responsable::where('rol', '=', 'jefe de centro de computo')->firstOrFail();
        $bien =  new Bien;
        $bien->noserie = $request->noserie;
        $bien->noinventario = $request->noinventario;
        $bien->responsable_id = $responsable->id;
        $bien->ubicacion_id = $ubicacion->id;
        $bien->estatus_id = $request->estatus;
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
    public function show(Hardware $hardware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function edit(Hardware $hardware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Hardware $hardware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Hardware  $hardware
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hardware $hardware)
    {
        //
    }
}
