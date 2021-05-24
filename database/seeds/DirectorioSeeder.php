<?php

use Illuminate\Database\Seeder;

class DirectorioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('directorios')->truncate();
        DB::table('directorios')->insert ([
            [
                'nombre' => 'Carlos Santa',
                'direccion' => 'Costa Nera',
                'telefono'  => 91959604,
                'foto' => null
            ]
        ]);
        DB::table('directorios')->insert ([
            [
                'nombre' => 'Mario Santos',
                'direccion' => 'Costa Nera 099',
                'telefono'  => 12345678,
                'foto' => null
            ]
        ]);

        DB::table('directorios')->insert ([
            [
                'nombre' => 'Cecilia Santos',
                'direccion' => 'Tatata PuertoMontt',
                'telefono'  => 500500123,
                'foto' => null
            ]
        ]);
    }
}
