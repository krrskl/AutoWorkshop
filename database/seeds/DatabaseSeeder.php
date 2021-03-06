<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            RolTableSeeder::class,
            PersonTableSeeder::class,
            UserTableSeeder::class,
            VehicleTableSeeder::class,
            ReceiptSheetTableSeeder::class
        ]);
    }
}
