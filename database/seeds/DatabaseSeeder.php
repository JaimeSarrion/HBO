<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        //Aqui hay que poner la llamada a los seeders
        $this->call(UsersTableSeeder::class);
        $this->call(CapituloTableSeeder::class);
        $this->call(SeriesTableSeeder::class);
        $this->call(miListaTableSeeder::class);
        $this->call(TemporadaTableSeeder::class);

        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
