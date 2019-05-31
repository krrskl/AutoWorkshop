<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\ReceiptSheet;
use App\Vehicle;

class ReceiptSheetTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {

        for ($i = 0; $i < 5; $i++) {
            $rnd = $faker->numberBetween(1, 10);
            Vehicle::where('id', $rnd)->first()->update(['repairing' => true]);
            ReceiptSheet::create([
                'description' => $faker->text(200),
                'vehicleId' => $rnd
            ]);
        }
    }
}
