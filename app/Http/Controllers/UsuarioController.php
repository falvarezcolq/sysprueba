<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

use App\Http\Requests;
use App\Http\Requests\UserCreateRequest;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Controllers\Controller;
use Session;
use Redirect;

use App\User;

class UsuarioController extends Controller
{

    public function __construct(){
        $this->beforeFilter('@find' ,['only' => [ 'edit' , 'update' , 'destroy' ]]);
    }

    public function find( Route $route){
        $this->user = User::find($route->getParameter('usuario'));
        // return $this->user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $users = User::All();
        $users = User::paginate(5);
        // $users = User::onlyTrashed()->paginate(2);  // muestra los elemento eliminados
        
        return view('usuario.index',compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('usuario.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserCreateRequest $request)
    {
        // User::create([
        //         'name'  => $request['name'],
        //         'email' => $request['email'],
        //         'password' =>$request['password'],
        // ]);

        // return 'usuario registrado';

        User::create($request->all());
        return redirect('/usuario')->with('message','Usuario creado correctamente');
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
        // $user = User::find($id);

        return view('usuario.edit',['user' => $this->user]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {
         $this->user->fill($request->all());
         $this->user->save();
         Session::flash('message' , 'Usuario editado correctamente');
         return redirect::to('/usuario');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    { 
        // User::destroy($id);
        $this->user->delete(); 
        Session::flash('message' , 'Usuario Eliminado correctamente');
        return redirect::to('/usuario');
    }
}
