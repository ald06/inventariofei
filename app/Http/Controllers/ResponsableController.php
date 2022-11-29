<?php

namespace App\Http\Controllers;

use App\Responsable;
use Illuminate\Http\Request;

class ResponsableController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
{
    $responsable = Responsable::all();
    return datatables()->of($responsable)->addColumn('actions', function($responsable) {
      return '
        <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-bars fa-lg"></i>
            </button>
            <div class="dropdown-menu">
              <a href="'.route('responsable.edit', $responsable->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
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
      $responsable = Responsable::findOrFail($id);
      $responsable->fill($request->all())->save();
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
      return redirect('responsable')->with('message', 'Bien Editado');

    }
}
