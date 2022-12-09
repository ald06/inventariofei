<?php

namespace App\Http\Controllers;

use App\SoftwareInstalado;
use Illuminate\Http\Request;

class SoftwareInstaladoController extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\SoftwareInstalado  $softwareInstalado
     * @return \Illuminate\Http\Response
     */
    public function show(SoftwareInstalado $softwareInstalado)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SoftwareInstalado  $softwareInstalado
     * @return \Illuminate\Http\Response
     */
    public function edit(SoftwareInstalado $softwareInstalado)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SoftwareInstalado  $softwareInstalado
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SoftwareInstalado $softwareInstalado)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SoftwareInstalado  $softwareInstalado
     * @return \Illuminate\Http\Response
     */
    public function destroy(SoftwareInstalado $softwareInstalado)
    {
        //
    }
}
