<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\MiLista;

class MiListaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        $cap = array();
        $data = DB::table('mi_listas')->where('user_id','=',$user)->get();
        foreach($data as $r) {
            array_push($cap,DB::table('capitulo')->where('id','=',$r->capitulo_id)->get());
           // $cap[] = DB::table('capitulo')->where('id','=',$r->capitulo_id)->get();
        }

        //die(var_dump($cap[0]));
        return view('formMiLista',compact('cap'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //mostrar formulario para crear una lista
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $lista = MiLista::readLista($id);
        /*
        if ($request->input('nombre')) {    
            $temporada->nombre = $request->input('nombre');
        }
        */
        MiLista::createLista($lista);

        return redirect()->action('MiListaController@index');
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
        //Hay que poner la ruta de editar la lista
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
        $lista = MiLista::readLista($id);
        /*
        if ($request->input('nombre')) {    
            $lista->nombre = $request->input('nombre');
        }
        */
        MiLista::createLista($lista);

        return redirect()->action('MiListaController@index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MiLista::deleteMiLista($id);
        return redirect()->action('MiListaController@index');
    }
}
