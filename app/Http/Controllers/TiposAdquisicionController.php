<?php

namespace App\Http\Controllers;

use App\tiposAdquisicion;
use Illuminate\Http\Request;

class TiposAdquisicionController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
     $tiposAdquisicion = TiposAdquisicion::all();
     return datatables()->of($tiposAdquisicion)->addColumn('actions', function($tiposAdquisicion) {
       return '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('tiposadquisicion.edit', $tiposAdquisicion->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
               <a href="'.route('tiposadquisicion.destroy', $tiposAdquisicion->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Eliminar</a>
               <div class="dropdown-divider my-1"></div>';
     })
   ->rawColumns(['actions'])
   ->make(true);

    }
    public function index()
    {
        return view ('adquisicion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposAdquisicion = new TiposAdquisicion;
        return view ('adquisicion.create', compact ('tiposAdquisicion'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = $this->validate($request,[
            'nombre' => 'required|string|max:25|unique:tipos_adquisicions'
        ]);
        try {
            $tiposAdquisicion = new TiposAdquisicion;
            $tiposAdquisicion->nombre = $request->nombre;
            $tiposAdquisicion->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('tiposadquisicion')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\tiposAdquisicion  $tiposAdquisicion
     * @return \Illuminate\Http\Response
     */
    public function show(tiposAdquisicion $tiposAdquisicion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\tiposAdquisicion  $tiposAdquisicion
     * @return \Illuminate\Http\Response
     */
    public function edit(tiposAdquisicion $tiposAdquisicion,$id)
    {
        $tiposAdquisicion = TiposAdquisicion::findOrFail($id);
        return view('adquisicion.edit', compact('tiposAdquisicion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\tiposAdquisicion  $tiposAdquisicion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, tiposAdquisicion $tiposAdquisicion, $id)
    {
        $tiposAdquisicion = TiposAdquisicion::findOrFail($id);
        $tiposAdquisicion->fill($request->all())->save();
        return redirect('tiposadquisicion')->with('message', 'editado :)');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiposAdquisicion  $tiposAdquisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(tiposAdquisicion $tiposAdquisicion)
    {
        //
    }
}
