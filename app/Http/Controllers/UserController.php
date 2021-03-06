<?php

namespace App\Http\Controllers;

use App\User;
use Caffeinated\Shinobi\Models\Role;
use App\Asignatura;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{

  public function __construct(){
    $this->middleware('permission:users.create')->only(['create','store']);
    $this->middleware('permission:users.index')->only('index');
    $this->middleware('permission:users.edit')->only(['edit','update']);
    $this->middleware('permission:users.show')->only('show');
    $this->middleware('permission:users.destroy')->only('destroy');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    $users = User::paginate();

    return view('users.index',compact('users'));
  }

  /**
  * Show the form for creating a new resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function create()
  {
    $roles = Role::get();
    $asignaturas = Asignatura::get();
    return view('users.create',compact('roles','asignaturas'));
  }

  /**
  * Store a newly created resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @return \Illuminate\Http\Response
  */
  public function store(UserRequest $request)
  {
    $atributos = $request->all();
    $atributos['password'] = Hash::make($atributos['password']);
    $user = User::create($atributos);
    $user->roles()->sync($request->get('roles'));
    return redirect()->route('users.edit',$user->id)->with('info','Usuario creado con exito');
  }

  /**
  * Display the specified resource.
  *
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function show(User $user)
  {
    return view('users.show',compact('user'));
  }

  /**
  * Show the form for editing the specified resource.
  *
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function edit(User $user)
  {
    $roles = Role::get();
    $asignaturas = Asignatura::get();
    return view('users.edit',compact('user','roles','asignaturas'));
  }

  /**
  * Update the specified resource in storage.
  *
  * @param  \Illuminate\Http\Request  $request
  * @param  \App\User  $user
  * @return \Illuminate\Http\Response
  */
  public function update(UserRequest $request, User $user)
  {
    $user->update($request->all());
    $user->roles()->sync($request->get('roles'));
    if($request->get('asignaturas')){
      $user->asignaturas()->sync($request->get('asignaturas'));
    }
    return redirect()->route('users.edit',$user->id)->with('info','Usuario actualizado con exito');
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

    return back()->with('info','Eliminado con exito');
  }
}
