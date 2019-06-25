<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
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
            DB::table('users')->delete();
            //Generamos 100 personas de prueba
            DB::table('users')->insert([
                'name' => 'admin',
                'email' => 'admin@admin.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'admin'=> true,
            ]);

            DB::table('users')->insert([
                'name' => 'jaime',
                'email' => 'jaime@jaime.com',
                'password' => bcrypt('secret'),
                'remember_token' => str_random(10),
                'admin'=> false,
            ]);
            factory(App\User::class, 20)->create();
        }
    }
}
