<?php

namespace App\Http\Controllers;

use App\Mantenimiento;
use Illuminate\Http\Request;
use App\tiposhardware;
use App\Responsable;
use App\Ubicacion;
use App\Hardware;
use App\Bien;
class MantenimientoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function getdata(){
    $mantenimiento = Mantenimiento::all();
    return datatables()->of($mantenimiento)->addColumn('actions', function($mantenimiento) {
      $rol = auth()->user()->rol;
      if($rol == 'admin'){
        $menuadmin ='
        <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
                 <a href="'.route('mantenimiento.show', $mantenimiento->id).'" role="button" class="dropdown-item"><i class="fas fa-info-circle"></i> Detalle </a>
             <div class="dropdown-divider my-1"></div>
              <a href="'.route('mantenimiento.edit', $mantenimiento->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
              <form action="'.route('mantenimiento.destroy', $mantenimiento->id).'" method="POST">
                 <input name="_token" type="hidden" value="'.csrf_token().'">
                 <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="dropdown-item "><i class="fas fa-times-circle fa-fw fa-lg text-danger"></i> Baja </button>
            </form>
              <div class="dropdown-divider my-1"></div>';
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
        return view ('mantenimiento.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       # 
       # $responsable = responsable::all();
       # $ubicacion = ubicacion::all();
       # 
        $tiposhardware = tiposhardware::all();
        $bien = bien::all();
        $mantenimiento = new Mantenimiento;
        return view ('mantenimiento.create', compact ('mantenimiento','tiposhardware','bien'));#,'responsable','ubicacion'));
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
        'nserie' => 'required|string|max:10|unique:mantenimientos'
       ]);
        try {
            $mantenimiento = new Mantenimiento;
            $mantenimiento->nserie = $request->nserie;
            $mantenimiento->diagnostico = $request->diagnostico;
            $mantenimiento->justificacion = $request->justificacion;
            $mantenimiento->observaciones = $request->observaciones;
            $mantenimiento->fecha = $request->fecha;
            
            $mantenimiento->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('mantenimiento')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
             $mantenimiento = Mantenimiento::findOrFail($id);
            # $ubicacion = Ubicacion::findOrFail($bien->ubicacion_id);
           #  
           #  $responsable = Responsable::findOrFail($bien->responsable_id);
                #$tiposhardware = TiposHardware::findOrFail($bien->tipohardware_id);
                #$bien = bien::findOrFail($bien->bien);
                return view('mantenimiento.show', compact('mantenimiento'));#,'tiposhardware','bien'));#,'ubicacion','responsable'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      
     # $ubicacion = ubicacion::all();
     # 
     # $responsable = responsable::all();
     #     
      #$tiposhardware = tiposhardware::all();
      $mantenimiento = Mantenimiento::findOrFail($id);    
      return view('mantenimiento.edit', compact('mantenimiento'));#));#,'ubicacion',,'tiposhardware','bien''responsable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       try{
        $mantenimiento = Mantenimiento::findOrFail($id);
        $mantenimiento->fill($request->all())->save();
        #$tiposhardware->nomHardware = $request->tiposHardware();  
       # $ubicacion->aula = $request->Ubicacion();
       # 
       # $responsable->nombre = $request->Responsable();
       #   
       }catch(\Exception $e){
        $errors = $e;
            return redirect()->back()->with('errors', $errors);
    }
         return redirect('mantenimiento')->with('message', 'Datos actualizados');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Mantenimiento  $mantenimiento
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $mantenimiento = Mantenimiento::findOrFail($id);
      $mantenimiento->delete();
      return redirect('mantenimiento/')->with('message', 'Eliminado Correctamente');

    }
}
