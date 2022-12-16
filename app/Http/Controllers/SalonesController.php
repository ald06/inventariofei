<?php

namespace App\Http\Controllers;

use App\Salones;
use Illuminate\Http\Request;
use App\tiposhardware;
use App\Responsable;
use App\Ubicacion;
use App\Hardware;
use App\Bien;

class SalonesController extends Controller
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
    $salones = Salones::all();
    return datatables()->of($salones)->addColumn('actions', function($salones) {
      return '
        <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
              <a href="'.route('salones.edit', $salones->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
              <form action="'.route('salones.destroy', $salones->id).'" method="POST">
                 <input name="_token" type="hidden" value="'.csrf_token().'">
                 <input name="_method" type="hidden" value="DELETE">
                <button type="submit" class="dropdown-item "><i class="fas fa-times-circle fa-fw fa-lg text-danger"></i> Baja </button>
            </form>
              <div class="dropdown-divider my-1"></div>';
            
    })
  ->rawColumns(['actions'])
  ->make(true);
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view ('salones.index');
    }
    public function create()
    {
        $responsable = responsable::all();
        $ubicacion = ubicacion::all();
        $salones = new Salones;
        return view ('salones.create', compact ('salones','responsable','ubicacion'));
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
        'lugar' => 'required|string|max:10|unique:salones'
       ]);
        try {
            $salones = new Salones;
            $salones->lugar = $request->lugar;
            $salones->fecha = $request->fecha;
            $salones->estatus_id = $request->estatus;
            $salones->encargado = $request->encargado;
            $salones->observaciones = $request->observaciones;
            
            $salones->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('salones')->with('message', 'Registro Exitoso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function show(Salones $salones)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salones = Salones::findOrFail($id);
      return view('salones.edit', compact('salones'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = $this->validate($request,[
        'matricula' => 'required|string|max:10|unique:salones'
       ]);
       try{
        $salones = Salones::findOrFail($id);
        $salones->fill($request->all())->save();
       }catch(\Exception $e){
        $errors = $e;
            return redirect()->back()->with('errors', $errors);
       }
      
      return redirect('salones')->with('message', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\salones  $salones
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $salones = Salones::findOrFail($id);
      $salones->delete();
      return redirect('salones/')->with('message', 'salones Eliminado Correctamente');

    }
}
