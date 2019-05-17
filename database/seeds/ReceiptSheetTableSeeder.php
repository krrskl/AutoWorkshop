<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\ReceiptSheet;

class ReceiptSheetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i=0; $i < 5; $i++) { 
            ReceiptSheet::create([
                'description' => $faker->text(200),
                'vehicleId' => $faker->numberBetween(1, 10)
            ]);
        }
    }
}
