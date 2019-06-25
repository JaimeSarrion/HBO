<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Serie;

class SeriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Serie::all();

        return view('formSeries', compact('data'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function all()
    {
        $data = Serie::all();

        return view('series.index', compact('data'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('series.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if ($request->input('nombre')&& $request->input('sinopsis') && $request->input('genero') && $request->input('reparto') 
        && $request->input('creador') && $request->input('calificacion') && $request->input('anyo') && $request->input('imagen')) {
            $serie = new Serie();
            $serie->nombre = $request->input('nombre');
            $serie->sinopsis = $request->input('sinopsis');
            $serie->genero = $request->input('genero');
            $serie->reparto = $request->input('reparto');
            $serie->creador = $request->input('creador');
            $serie->calificacion = $request->input('calificacion');
            $serie->anyo = $request->input('anyo');
            $serie->imagen = $request->input('imagen');
            Serie::createSerie($serie);
        }


        return redirect()->action('SeriesController@all');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $serie = Serie::buscar($id);
        $temporadas = DB::table('temporada')->select('temporada')->groupBy('temporada')->where('serie_id','=',$id)->get();
        return view('formSerieDetalles', compact(['serie','temporadas']));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $serie = Serie::readSerie($id);
            return view('series.edit', compact('serie'));
        } catch(ModelNotFoundException $e) {
            // Mostrar 404
            return view('series.index');
        }
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
        $serie = Serie::readSerie($id);

        if ($request->input('nombre')&& $request->input('sinopsis') && $request->input('genero') && $request->input('reparto') 
        && $request->input('creador') && $request->input('calificacion') && $request->input('anyo') && $request->input('imagen')) {
            $serie = new Serie();
            $serie->nombre = $request->input('nombre');
            $serie->sinopsis = $request->input('sinopsis');
            $serie->genero = $request->input('genero');
            $serie->reparto = $request->input('reparto');
            $serie->creador = $request->input('creador');
            $serie->calificacion = $request->input('calificacion');
            $serie->anyo = $request->input('anyo');
            $serie->imagen = $request->input('imagen');

        }
        
        Serie::createSerie($serie);
        return redirect()->action('SeriesController@all');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Serie::deleteSerie($id);
        return redirect()->action('SeriesController@all');
    }
}
