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
        $rol = auth()->user()->rol;
        if($rol == 'admin'){
          $menuadmin ='
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('tiposadquisicion.edit', $tiposAdquisicion->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
               <form action="'.route('tiposadquisicion.destroy', $tiposAdquisicion->id).'" method="POST">
                 <input name="_token" type="hidden" value="'.csrf_token().'">
                 <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="dropdown-item "><i class="fas fa-times-circle fa-fw fa-lg text-danger"></i> Baja </button>
            </form>
               <div class="dropdown-divider my-1"></div>';
        }else{
            $menuadmin = '
            <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
            <p>Solo el administrador puede realizar acciones</p>
              <div class="dropdown-divider my-1"></div>';
        };
        return $menuadmin;
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
        $validator = $this->validate($request,[
            'nombre' => 'required|string|max:25|unique:tipos_adquisicions'
        ]);
        try {
        $tiposAdquisicion = TiposAdquisicion::findOrFail($id);
        $tiposAdquisicion->fill($request->all())->save();
        return redirect('tiposadquisicion')->with('message', 'Adquissición Editada');
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('tiposadquisicion')->with('message', 'Adqusición Editada');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\tiposAdquisicion  $tiposAdquisicion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $tiposAdquisicion = TiposAdquisicion::findOrFail($id);
        $tiposAdquisicion->delete();
        return redirect('tiposadquisicion')->with('message', 'Adquisición Eliminada');
    }
}
