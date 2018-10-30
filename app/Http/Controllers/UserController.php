<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserStoreRequest;
use App\Http\Requests\UserUpdateRequest;
class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
        return view('CRUD_Usuarios.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('CRUD_Usuarios.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $request;
        $user = new User();
        $user->clave = $request->input('clave');
        $user->name = $request->input('name');
        $user->apellidoP = $request->input('apellidoP');
        $user->apellidoM = $request->input('apellidoM');
        $user->email = $request->input('email');
        $auxiliar=$request->input('password');
        $user->password = $password = bcrypt($auxiliar);
        $user->save();
        return redirect()->route('users.index')
            ->with('info','Usuario guardado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        return view('CRUD_Usuarios.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('CRUD_Usuarios.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $user)
    {
        $user=User::find($user);
        $user->clave = $request->get('clave');
        $user->name = $request->get('name');
        $user->apellidoP = $request->get('apellidoP');
        $user->apellidoM = $request->get('apellidoM');
        //$user->email = $request->get('email');
        $auxiliar=$request->get('password');
        $user->password = $password = bcrypt($auxiliar);
        $user->update();
        return redirect()->route('users.index')
            ->with('info','Usuario actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return back()->with('info','Usuario '.$user->name .' eliminado correctamente');
    }
}
