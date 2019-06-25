<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class MiLista extends Model
{
    public static function buscar($id) {
        return Serie::find($id);
    }

    public static function deleteMiLista($id){
        MiLista::findOrFail($id)->delete();
    }

    public static function readMiLista($id){
         return MiLista::findOrFail($id);
    }

    public static function createLista($data){
        $data->save();
    }
}
