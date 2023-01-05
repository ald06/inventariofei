<?php
namespace App\Http\Controllers;

use App\TiposHardware;
use Illuminate\Http\Request;

class TiposHardwareController extends Controller
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
      
      $tiposHardware = TiposHardware::all();
     return datatables()->of($tiposHardware)->addColumn('actions', function($tiposHardware) {
      $rol = auth()->user()->rol;
      if($rol == 'admin'){
        $menuadmin ='    
        <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
              <a href="'.route('tiposhardware.edit', $tiposHardware->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
            <form action="'.route('tiposhardware.destroy', $tiposHardware->id).'" method="POST">
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
        return view ('catalogoHardware.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $tiposHardware = new TiposHardware;
        return view ('catalogoHardware.create', compact ('tiposHardware'));
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
            'nomHardware' => 'required|string|max:50|alpha_num|unique:tipos_hardware'
        ]);
        try {
            $tiposHardware = new TiposHardware;
            $tiposHardware->nomHardware = $request->nomHardware;
            $tiposHardware->save();
        }catch(\Exception $e){
            $errors = $e;
            return redirect()->back()->with('errors', $errors);
        }
        return redirect('tiposhardware')->with('message', 'Registro Exitoso');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function show(TiposHardware $tiposHardware)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tiposHardware = TiposHardware::findOrFail($id);
      return view('catalogoHardware.edit', compact('tiposHardware'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $validator = $this->validate($request,[
        'nomHardware' => 'required|string|max:10|unique:tipos_hardware'
       ]);
       try{
        $tiposHardware = TiposHardware::findOrFail($id);
        $tiposHardware->fill($request->all())->save();
       }catch(\Exception $e){
        $errors = $e;
            return redirect()->back()->with('errors', $errors);
       }
      return redirect('tiposhardware')->with('message', 'Equipo Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
      $tiposHardware = TiposHardware::findOrFail($id);
      $tiposHardware->delete();
      return redirect('tiposhardware/')->with('message', 'Hardware Eliminado Correctamente');
    }
}
