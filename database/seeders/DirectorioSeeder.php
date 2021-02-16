<?php

namespace Database\Seeders;

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
        DB::table('directorio')->insert([
            [
                'nombre'=> 'juan',
                'direccion'=> 'dir prueba',
                'telefono'=> '123456789',
                'foto'=> null
            ],
            [
                'nombre'=> 'diana',
                'direccion'=> 'dir prueba2',
                'telefono'=> '987654321',
                'foto'=> null
            ]
        ]);
    }
}
