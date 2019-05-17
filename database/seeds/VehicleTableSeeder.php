<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;
use App\Vehicle;

class VehicleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $faker->addProvider(new \Faker\Provider\Fakecar($faker));
        for ($i=0; $i < 10; $i++) { 
            Vehicle::create([
                'license_plate' => $faker->vehicleRegistration,
                'model' => $faker->vehicleType,
                'brand' => $faker->vehicleBrand,
                'userId' => $faker->numberBetween(1, 50)
            ]);
        }
    }
}
