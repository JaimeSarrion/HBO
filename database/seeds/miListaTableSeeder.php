<?php

use Illuminate\Database\Seeder;

class miListaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        DB::table('mi_listas')->delete();

        DB::table('mi_listas')->insert([
            [
                'user_id' => 1,
                'capitulo_id' => 1
            ],
            [
                'user_id' => 1,
                'capitulo_id' => 2
            ],
            [
                'user_id' => 2,
                'capitulo_id' => 3
            ]
            ]);
    }
}
