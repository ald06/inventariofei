<?php

namespace App\Http\Controllers;

use App\TiposHardware;
use Illuminate\Http\Request;

class TiposHardwareController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getData()
    {
     $tiposHardware = TiposHardware::all();
     // $hardwares = Hardware::all();
     return datatables()->of($tiposHardware)->addColumn('actions', function($tiposHardware) {
       return '
         <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
             <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-bars fa-lg"></i>
             </button>
             <div class="dropdown-menu">
               <a href="'.route('tiposhardware.edit', $tiposHardware->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
             <div class="dropdown-divider my-1"></div>';
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
    public function edit(TiposHardware $tiposHardware)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, TiposHardware $tiposHardware)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\TiposHardware  $tiposHardware
     * @return \Illuminate\Http\Response
     */
    public function destroy(TiposHardware $tiposHardware)
    {
        //
    }
}
