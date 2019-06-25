<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Temporada;
use App\Serie;

class TemporadasController extends Controller
{
    /**
     * muestra la pagina inicial del recurso
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //trae los usuarios de la tabla users
        $data = Temporada::all();
        //enviamos los registros a la vista
        return view('temporadas.index', ['data' => $data]);
    }

    /**
     * mostrar el formulario de registro
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('temporadas.create');
    }

    /**
     * Recuperamos los datos escritos en el formulario y lo guardamos en nuestra base de datos
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('temporada') && $request->input('capitulo_id') && $request->input('serie_id')) {
            $temporada = new Temporada();
            $temporada->temporada = $request->input('temporada');
            $temporada->capitulo_id = $request->input('capitulo_id');
            $temporada->serie_id = $request->input('serie_id');
            Temporada::createTemporada($temporada);
        }
        return redirect()->action('TemporadasController@index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id,$t)
    {
        $serie = Serie::buscar($id);
        $temporadas = DB::table('temporada')->select('temporada')->groupBy('temporada')->where('serie_id','=',$id)->get();
        $capitulos = DB::table('temporada')->where([
            ['serie_id', '=', $id],
            ['temporada', '=', $t],
        ])->get();
        $cap = array();
        foreach($capitulos as $c) {
            array_push($cap,DB::table('capitulo')->where('id','=',$c->capitulo_id)->get());
           // $cap[] = DB::table('capitulo')->where('id','=',$r->capitulo_id)->get();
        }
        //die(var_dump($cap[0]));
        return view('formTemporada', compact(['serie','temporadas','cap']));
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
            $temporada = Temporada::readTemporada($id);
            return view('temporadas.edit', compact('temporada'));
        } catch(ModelNotFoundException $e) {
            // Mostrar 404
            return view('temporadas.index');
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
        $temporada = Temporada::readTemporada($id);

        if ($request->input('nombre')) {    
            $temporada->nombre = $request->input('nombre');
        }
        
        Temporada::createTemporada($temporada);

        return redirect()->action('TemporadasController@index');
    }

    /**
     * Destruimos el usuario
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Temporada::deleteTemporada($id);
        return redirect()->action('TemporadasController@index');
    }
}
