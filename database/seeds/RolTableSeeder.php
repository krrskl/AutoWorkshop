<?php

use Illuminate\Database\Seeder;
use App\Rol;
class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        Rol::truncate();
        Rol::create([
            'name' => 'Administrador'
        ]);

        Rol::create([
            'name' => 'Recepcionista'
        ]);

        Rol::create([
            'name' => 'Cliente'
        ]);

        Rol::create([
            'name' => 'Mecánico'
        ]);
        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
