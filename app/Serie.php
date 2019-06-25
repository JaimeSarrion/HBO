<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Serie extends Model
{
    public static function buscar($id) {
        return Serie::find($id);
    }

    public static function deleteSerie($id){
        Serie::findOrFail($id)->delete();
    }

    public static function readSerie($id){
         return Serie::findOrFail($id);
    }

    public static function createSerie($data){
        $data->save();
    }
}
