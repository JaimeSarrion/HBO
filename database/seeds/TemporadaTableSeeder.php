<?php

use Illuminate\Database\Seeder;

class TemporadaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            DB::table('temporada')->delete();

            DB::table('temporada')->insert([
                'temporada' => 1,
                'serie_id' =>1,
                'capitulo_id' => 1,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 2,
                'serie_id' =>1,
                'capitulo_id' => 7,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 3,
                'serie_id' =>1,
                'capitulo_id' => 8,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 1,
                'serie_id' =>1,
                'capitulo_id' => 2,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 1,
                'serie_id' =>1,
                'capitulo_id' => 3,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 1,
                'serie_id' =>1,
                'capitulo_id' => 4,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 1,
                'serie_id' =>2,
                'capitulo_id' => 5,                
            ]);
            DB::table('temporada')->insert([
                'temporada' => 2,
                'serie_id' =>2,
                'capitulo_id' => 6,                
            ]);
        }
    }
}
