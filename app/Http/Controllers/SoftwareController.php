<?php

namespace App\Http\Controllers;

use App\Software;
use App\Bien;
use App\Responsable;
use App\Ubicacion;

use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class SoftwareController extends Controller
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
     $softwares = Software::with('bien')->get();
     return datatables()->of($softwares)->addColumn('actions', function($software) {
        $rol = auth()->user()->rol;
        if($rol == 'admin'){
          $menuadmin ='
       <div class="btn-group dropup" data-toggle="tooltip" data-placement="top" title="Acciones">
           <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             <i class="fas fa-bars fa-lg"></i>
           </button>
           <div class="dropdown-menu">
              <a href="'.route('software.show', $software->id).'" role="button" class="dropdown-item"><i class="fas fa-info-circle"></i> Detalle </a>
           <div class="dropdown-divider my-1"></div>
              <a href="'.route('software.edit', $software->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar </a>
           <div class="dropdown-divider my-1"></div>
            <form action="'.route('software.destroy', $software->id).'" method="POST">
                <input name="_token" type="hidden" value="'.csrf_token().'">
                <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="dropdown-item "><i class="fas fa-times-circle fa-fw fa-lg text-danger"></i> Baja </button>
            </form>
      </div>';
    }else{
      $menuadmin ='
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
        return view('sw.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $software = new Software;
      return view('sw.create', compact('software'));
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
        'noserie' => 'required|string|max:9|alpha_num|unique:biens',
        'noinventario' => 'required|string|max:9|alpha_num|unique:biens',
        'equiposPermitidos'=> 'numeric'
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
        $bien->tipoadquisicion_id =2;
        $bien->save();
        $ultimobien = Bien::latest('id')->first();
        $software = new Software;
        $software->nombre            = $request->nombre;
        $software->version           = $request->version;
        $software->descripcion       = $request->descripcion;
        $software->tipoSoftware      = $request->tipoSoftware;
        $software->licencia          = $request->licencia;
        $software->disponibilidad    = 'T';
        $software->equiposPermitidos = $request->equiposPermitidos;
        $software->equiposOcupados   = 0;
        $software->bien_id           = $ultimobien->id;
        $software->save();
      } catch (\Exception $e) {
          $errors = $e;
          return redirect()->back()->with('errors', $errors);
     }
    return redirect('software')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $software = Software::findOrFail($id);

        $bien = Bien::findOrFail($software->bien_id);
        return view('sw.show', compact('software','bien'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

      $software = Software::findOrFail($id);
      $bien = Bien::findOrFail($software->bien_id);
      return view('sw.edit', compact('software','bien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = $this->validate($request,[
      'noserie' => 'required|string|max:9|',
      'noinventario' => 'required|string|max:9|'
      ]);
      try {
      $software = Software::findOrFail($id);
      $bien =  Bien::findOrFail($software->bien_id);

      $bien->noserie = $request->noserie;
      $bien->noinventario = $request->noinventario;
      $bien->save();

      $software->nombre            = $request->nombre;
      $software->version           = $request->version;
      $software->descripcion       = $request->descripcion;
      $software->tipoSoftware      = $request->tipoSoftware;
      $software->licencia          = $request->licencia;
      $software->equiposPermitidos = $request->equiposPermitidos;
      $software->save();

      } catch (\Exception $e) {
        $errors = $e;
      return redirect()->back()->with('errors', $errors);
      }


      return redirect('software')->with('message', 'Actualizacion Exitosa');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Software  $software
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $software = Software::findOrFail($id);
      $bien =  Bien::findOrFail($software->bien_id);;
      $bien->estatus_id = 4;
      $bien->save();
      $software->delete();
      $bien->delete();
      return redirect('software/')->with('message', 'Software Eliminado Correctamente');
    }
}
