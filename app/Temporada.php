<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Temporada extends Model
{
    protected $table = 'temporada';

    public static function deleteTemporada($id){
        Temporada::findOrFail($id)->delete();
    }

    public static function readTemporada($id){
        return Temporada::findOrFail($id);
    }

    public static function createTemporada($data){
        $data->save();
    }
}
