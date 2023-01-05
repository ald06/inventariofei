<?php

namespace App\Http\Controllers;

use App\Ubicacion;
use Illuminate\Http\Request;

class UbicacionController extends Controller
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
     $ubicacion = Ubicacion::all();
     return datatables()->of($ubicacion)->addColumn('actions', function($ubicacion) {
        $rol = auth()->user()->rol;
        if($rol == 'admin'){
          $menuadmin =
            '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('ubicacion.edit', $ubicacion->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
               <form action="'.route('ubicacion.destroy', $ubicacion->id).'" method="POST">
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
        return view ('ubicacion.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ubicacion = new Ubicacion;
        return view ('ubicacion.create', compact ('ubicacion'));
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
            'aula' => 'required|string|alpha_num|unique:ubicacions',
            'aula' => 'required|string|alpha_num'
        ]);
        try {
            $ubicacion = new Ubicacion;
            $ubicacion->edificio = $request->edificio;
            $ubicacion->aula = $request->aula;
            $ubicacion->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('ubicacion')->with('message', 'Registro Exitoso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function show(Ubicacion $ubicacion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
      return view('ubicacion.edit', compact('ubicacion'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
        $validator = $this->validate($request,[
            'aula' => 'required|string|max:10|unique:ubicacions'
        ]);
        try {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->fill($request->all())->save();
        return redirect('ubicacion')->with('message', 'Ubicacion Editada');
    }catch(\Exception $e){
        $errors = $e;
        return redirect()->back()->with('errors', $errors);
    }
    return redirect('ubicacion')->with('message', 'Registro Exitoso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Ubicacion  $ubicacion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $ubicacion = Ubicacion::findOrFail($id);
        $ubicacion->delete();
        return redirect('ubicacion/')->with('message', 'Ubicación Eliminada Correctamente');
    }
}
