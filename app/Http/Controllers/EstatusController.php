<?php

namespace App\Http\Controllers;

use App\Estatus;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class EstatusController extends Controller
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
     $estatus = Estatus::all();
     return datatables()->of($estatus)->addColumn('actions', function($estatus) {
       return '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('estatus.edit', $estatus->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
             <div class="dropdown-divider my-1"></div>';
     })
   ->rawColumns(['actions'])
   ->make(true);
    }    
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $estatus = new Estatus;
    return view('estatus.create', compact('estatus'))
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
        $estatus =  new Estatus;
        $estatus->tipoEstatus = $request->tipoEstatus;
        $estatus->save();
      } catch (\Exception $e) {
          $errors = $e;
      return redirect('')->back()->with('errors', $errors);
    }
    return redirect('estatus')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Estatus  $estatus
     * @return \Illuminate\Http\Response
     */
    public function show(Estatus $estatus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Estatus  $estatus
     * @return \Illuminate\Http\Response
     */
    public function edit(Estatus $estatus)
    {
        $estatus = Estatus::findOrFail($id);
      return view('estatus.edit', compact('estatus'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Estatus  $estatus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $estatus = Estatus::findOrFail($id);
      $estatus->fill($request->all())->save();
      return redirect('estatus')->with('message', 'Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Estatus  $estatus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Estatus $estatus)
    {
        //
    }
}
