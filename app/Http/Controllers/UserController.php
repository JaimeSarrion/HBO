<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    /**
     * muestra la pagina inicial del recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trae los usuarios de la tabla users
        $data = User::all();
        //enviamos los registros a la vista
        return view('users.index', ['data' => $data]);
    }

    /**
     * mostrar el formulario de registro
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Recuperamos los datos escritos en el formulario y lo guardamos en nuestra base de datos
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
     * Mostramos el formulario de edicion
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */ 
    public function edit($id)
    {
        try {
            $user = User::readUser($id);
            return view('users.edit', compact('user'));
        } catch(ModelNotFoundException $e) {
            // Mostrar 404
            return redirect()->route('usuarios.index');
        }
    }

    /**
     * Editaremos el registro
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::readUser($id);

        if ($request->input('nombre') && $request->input('email') && $request->input('password')) {
            $user->name = $request->input('nombre');
            $user->email = $request->input('email');
            $user->password = $request->input('pasword');
        }

        User::updateUser($user);
        
        return redirect()->route('users.index');
    }

    /**
     * Destruimos el usuario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
