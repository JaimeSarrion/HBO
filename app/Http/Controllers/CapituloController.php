<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Capitulo;

class CapituloController extends Controller
{
    /**
     * muestra la pagina inicial del recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trae los usuarios de la tabla users
        $data = Capitulo::all();
        //enviamos los registros a la vista
        return view('capitulos.index', compact('data'));
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
            $capitulo = Capitulo::readCapitulo($id);
            return view('capitulos.edit', compact('capitulo'));
        } catch(ModelNotFoundException $e) {
            // Mostrar 404
            return view('capitulos.index');
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
        $capitulo = Capitulo::readCapitulo($id);

        if ($request->input('orden') && $request->input('descripcion') && $request->input('duracion')) {    
            $capitulo->orden = $request->input('orden');
            $capitulo->descripcion = $request->input('descripcion');
            $capitulo->duracion = $request->input('duracion');
        }

        Capitulo::updateCapitulo($capitulo);
        return redirect()->action('CapituloController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Capitulo::deleteCapitulo($id);
        return redirect()->action('CapituloController@index');
    }

    /**
     * mostrar el formulario de registro
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('capitulos.create');
    }

    /**
     * Recuperamos los datos escritos en el formulario y lo guardamos en nuestra base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        if ($request->input('orden') && $request->input('descripcion') && $request->input('duracion')) {
            $capitulo = new Capitulo();
            $capitulo->orden = $request->input('orden');
            $capitulo->descripcion = $request->input('descripcion');
            $capitulo->duracion = $request->input('duracion');
            Capitulo::createCapitulo($capitulo);
        }


        return redirect()->action('CapituloController@index');
    }


}
