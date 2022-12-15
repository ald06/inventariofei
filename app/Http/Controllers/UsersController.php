<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function getData()
     {
      $users = User::all();
      return datatables()->of($users)->addColumn('actions', function($users) {
        $rol = auth()->user()->rol;
      if($rol == 'admin'){
        $menuadmin ='
          <div class="btn-group dropleft" data-toggle="tooltip" data-placement="top" title="Acciones">
              <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-bars fa-lg"></i>
              </button>
              <div class="dropdown-menu">
                <a href="'.route('users.edit', $users->id).'" role="button" class="dropdown-item"><i class="fas fa-pencil-alt fa-fw fa-lg text-primary"></i> Editar</a>
                <form action="'.route('users.destroy', $users->id).'" method="POST">
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
         return view ('users.index');
     }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = new Users;
        return view ('auth.register', compact ('users'));
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::findOrFail($id);
      return view('users.edit', compact('users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validator = $this->validate($request,[
            'email' => 'required|string'
           ]);
           try{
            $users = User::findOrFail($id);
            $users->fill($request->all())->save();
           }catch(\Exception $e){
            $errors = $e;
                return redirect()->back()->with('errors', $errors);
           }
          return redirect('users')->with('message', 'Usuario Editado');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $users = User::findOrFail($id);
        $users->delete();
        return redirect('users/')->with('message', 'Usuario Eliminado Correctamente');
    }
}
