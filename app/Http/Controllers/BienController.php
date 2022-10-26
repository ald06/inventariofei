<?php

namespace App\Http\Controllers;

use App\Bien;
use Illuminate\Http\Request;
use Redirect,Response,DB,Config;
use Datatables;

class BienController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function getData()
    {
     $bienes = Bien::all();
     return datatables()->of($bienes)->addColumn('actions', function($bien) {
       return '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('bien.edit', $bien->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
             <div class="dropdown-divider my-1"></div>';
     })
   ->rawColumns(['actions'])
   ->make(true);
    }


    public function index()
    {
        return view('bienes.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      $bien = new Bien;
    return view('bienes.create', compact('bien'));
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
    $bien = Bien::create($request->all());
  } catch (\Exception $e) {
    $errors = $e;
    return redirect()->back()->with('errors', $errors);
  }
return redirect('bien')->with('message', 'Registro Exitoso');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function show(Bien $bien)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $bien = Bien::findOrFail($id);
      return view('bienes.edit', compact('bien'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
      $bien = Bien::findOrFail($id);
      $bien->fill($request->all())->save();
      return redirect('bien')->with('message', 'Bien Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bien  $bien
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bien $bien)
    {
        //
    }
}
