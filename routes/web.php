<?php

Auth::routes();

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registro', function () {
    return view('formRegistro');
});

Route::get('/log-in', function () {
    return view('formLogin');
});

//USUARIOS

Route::get('/users', 'UserController@index');

Route::get('/users/{id}', ['uses' =>'UserController@edit']);

Route::post('/users/{id}', ['uses' => 'UserController@update']);






//SERIES



Route::get('/show/series', 'SeriesController@index');
Route::get('/show/series/{id}','SeriesController@show');

Route::get('/show/series/{id}/temporada/{t}', 'TemporadasController@show');


//HOME

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function() {

    Route::get('/show/milista','MiListaController@index');

});

Route::group(['middleware' => 'admin'], function() {

    Route::get('/series', 'SeriesController@all');
    Route::get('/series/editar/{id}', ['uses' =>'SeriesController@edit']);
    Route::put('/series/editar/{id}', ['uses' => 'SeriesController@update']);
    Route::delete('/series/borrar/{id}' , 'SeriesController@destroy');
    Route::get('/series/create' , 'SeriesController@create');
    Route::post('/series/create' , 'SeriesController@store');
    
    //CAPITULOS
    Route::get('/capitulos', 'CapituloController@index');
    Route::get('/capitulos/editar/{id}', ['uses' =>'CapituloController@edit']);
    Route::put('/capitulos/editar/{id}', ['uses' => 'CapituloController@update']);
    Route::delete('/capitulos/borrar/{id}' , 'CapituloController@destroy');
    Route::get('/capitulos/create' , 'CapituloController@create');
    Route::post('/capitulos/create' , 'CapituloController@store');
    
    //TEMPORADAS
    Route::get('/temporadas', 'TemporadasController@index');
    Route::get('/temporadas/editar/{id}', ['uses' =>'TemporadasController@edit']);
    Route::put('/temporadas/editar/{id}', ['uses' => 'TemporadasController@update']);
    Route::delete('/temporadas/borrar/{id}' , 'TemporadasController@destroy');
    Route::get('/temporadas/create' , 'TemporadasController@create');
    Route::post('/temporadas/create' , 'TemporadasController@store');

    Route::get('/administrar', function () {
        return view('formAdministrar');
    });

});