<?php

namespace App\Http\Controllers;

use App\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
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
    $responsable = Responsable::all();
    return datatables()->of($responsable)->addColumn('actions', function($responsable) {
      $rol = auth()->user()->rol;
      if($rol == 'admin'){
        $menuadmin ='
        <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
              <a href="'.route('responsable.edit', $responsable->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
              <form action="'.route('responsable.destroy', $responsable->id).'" method="POST">
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


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        return view ('responsable.index');
    }
    public function create()
    {
        $responsable = new Responsable;
        return view ('responsable.create', compact ('responsable'));
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
        'matricula' => 'required|string|max:10|unique:responsables'
       ]);
        try {
            $responsable = new Responsable;
            $responsable->matricula = $request->matricula;
            $responsable->nombre = $request->nombre;
            $responsable->rol = $request->rol;
            $responsable->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('responsable')->with('message', 'Registro Exitoso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function show(Responsable $responsable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $responsable = Responsable::findOrFail($id);
      return view('responsable.edit', compact('responsable'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = $this->validate($request,[
        'matricula' => 'required|string|max:10|unique:responsables'
       ]);
       try{
        $responsable = Responsable::findOrFail($id);
        $responsable->fill($request->all())->save();
       }catch(\Exception $e){
        $errors = $e;
            return redirect()->back()->with('errors', $errors);
       }
      
      return redirect('responsable')->with('message', 'Datos actualizados');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Responsable  $responsable
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $responsable = Responsable::findOrFail($id);
      $responsable->delete();
      return redirect('responsable/')->with('message', 'Responsable Eliminado Correctamente');

    }
}
