<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capitulo extends Model
{
    protected $table = 'capitulo';

    public static function readCapitulo($capitulo){
        return Capitulo::findOrFail($capitulo);
    }

    public static function updateCapitulo($data){
        $data->save();
    }

    public static function deleteCapitulo($id){
        Capitulo::findOrFail($id)->delete();
    }
    public static function createCapitulo($data){
        $data->save();
    }
}
