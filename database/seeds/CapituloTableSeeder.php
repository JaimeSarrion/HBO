<?php

use Illuminate\Database\Seeder;

class CapituloTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (App::environment()!=='production') {
            //Vaciamos la tabla usuarios
            DB::table('capitulo')->delete();
            //Generamos 100 personas de prueba

            factory(App\Capitulo::class, 20)->create();

        }
    }

}
