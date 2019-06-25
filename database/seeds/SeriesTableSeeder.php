<?php

use Illuminate\Database\Seeder;

class SeriesTableSeeder extends Seeder
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
            DB::table('series')->delete();
            //Generamos 100 personas de prueba
            DB::table('series')->insert([
                'nombre' => 'Juego de Tronos',
                'sinopsis' => 'En una tierra donde los veranos duran décadas y los inviernos pueden durar toda una vida, los problemas acechan. Desde las maquinaciones del sur a las salvajes tierras del este, pasando por el helado norte y el milenario Muro que protege el reino de las fuerzas tenebrosas, dos poderosas familias mantienen un enfrentamiento letal por gobernar los Siete Reinos de Poniente. Mientras la traición, la lujuria y las fuerzas sobrenaturales sacuden los pilares de los Reinos, la sangrienta batalla por el Trono de Hierro tendrá consecuencias imprevistas y trascendentales. El invierno se acerca. Que empiece Juego de Tronos.',
                'genero' => 'Drama',
                'reparto' => 'Nikolaj Coster-Waldau, Peter Dinklage, Kit Harington, Emilia Clarke, Lena Headey, Sean Bean',
                'creador' => 'D.B. Weiss, David Benioff',
                'calificacion' => '5',
                'anyo' => '2011',
                'imagen' => 'https://production-static.hboespana.com/p/categoryThumbnails/6bb49cca-fd45-4404-9f23-6232fa7e0d0a.jpg',
                'remember_token' => str_random(10),
                
            ]);
            DB::table('series')->insert([
                'nombre' => 'Westworld',
                'sinopsis' => 'Westworld es una ambiciosa serie de ficción repleta de imaginación que eleva el concepto de las aventuras y las emociones fuertes a un nuevo nivel de peligrosidad. En el futurista parque temático conocido como Westworld, un grupo de androides-servidores se desvían de las secuencias programadas meticulosamente por los informáticos y adoptan un comportamiento anormal. Con un reparto espectacular encabezado por Anthony Hopkins, Ed Harris, Evan Rachel Wood, James Marsden, Thandie Newton y Jeffrey Wright, Westworld está basada en la película de 1973 escrita y dirigida por Michael Crichton (Parque jurásico), y ha sido creada para la televisión por los productores ejecutivos Jonathan Nolan (Interstellar, El caballero oscuro) y Lisa Joy (Criando malvas, Último aviso).',
                'genero' => 'Drama',
                'reparto' => 'Jeffrey Wright, Thandie Newton, Anthony Hopkins, Evan Rachel Wood, James Marsden, Ed Harris',
                'creador' => 'Jonathan Nolan, Lisa Joy',
                'calificacion' => '5',
                'anyo' => '2016',
                'imagen' => 'https://production-static.hboespana.com/p/categoryThumbnails/9f41fcdc-4315-40fd-9a7a-ceb2fca82ed4.jpg',
                'remember_token' => str_random(10),
            ]);
            DB::table('series')->insert([
                'nombre' => 'Big Little Lies',
                'sinopsis' => 'Reese Witherspoon, Nicole Kidman y Shailene Woodley protagonizan esta serie de HBO que narra la historia, cómicamente oscura, de tres madres del norte de California cuyas vidas aparentemente perfectas terminan en asesinato.',
                'genero' => 'Drama',
                'reparto' => 'Nicole Kidman, Reese Witherspoon, Zoë Kravitz, Adam Scott, Shailene Woodley, Laura Dern, Alexander Skarsgård',
                'creador' => 'David E. Kelley, Jean-Marc Vallée',
                'calificacion' => '5',
                'anyo' => '2017',
                'imagen' => 'https://production-static.hboespana.com/p/categoryThumbnails/93f2b7b8-e940-4536-9af7-1a50c71a954a.jpg',
                'remember_token' => str_random(10),
                
            ]);
            DB::table('series')->insert([
                'nombre' => 'Crónicas Vampiricas',
                'sinopsis' => 'The Vampire Diaries cuenta la historia de dos hermanos vampiros obsesionados con la misma chica en un pequeño pueblo, donde seres sobrenaturales viven en secreto entre sus residentes. Al comienzo de esta serie, los hermanos Stefan y Damon Salvatore regresan a su ciudad natal, Mystic Falls, por motivos muy distintos.',
                'genero' => 'Drama',
                'reparto' => 'Paul Wesley, Steven R. McQueen, Ian Somerhalder, Nina Dobrev, Kat Graham',
                'creador' => 'D.B. Weiss, David Benioff',
                'calificacion' => '5',
                'anyo' => '2009',
                'imagen' => 'https://production-static.hboespana.com/p/categoryThumbnails/453c39a3-ec90-4635-98dc-dc4aa05ea132.jpg',
                'remember_token' => str_random(10),
                
            ]);
            DB::table('series')->insert([
                'nombre' => 'Los soprano',
                'sinopsis' => 'Los Soprano, una mirada realista de humor negro y, a menudo conmovedora, a los miembros de una familia de las afueras de Nueva Jersey, cuyo patriarca es un jefe de la mafia. Al ver cómo pierde el control de su familia y su negocio, Tony Soprano sufre una serie de ataques de ansiedad que lo acaban llevando a la consulta de una psiquiatra. Cuando se abre con su nueva terapeuta, Tony le cuenta detalles de su vida como "asesor de gestión de residuos" e intenta aceptar las tensiones profesionales y privadas que lo han llevado al borde de un ataque de nervios.',
                'genero' => 'Drama',
                'reparto' => 'Steve Van Zandt, Lorraine Bracco, James Gandolfini, Tony Sirico, Edie Falco',
                'creador' => 'David Chase',
                'calificacion' => '5',
                'anyo' => '1999',
                'imagen' => 'https://production-static.hboespana.com/p/categoryThumbnails/ec63f143-1bde-41f9-8cb9-7a077f4c48b7.jpg',
                'remember_token' => str_random(10),
                
            ]);
            
        }
    }
}
