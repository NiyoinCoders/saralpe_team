<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\City;

class CitiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $cities = [
            ['Adilabad', 32, 'Telangana', null],
            ['Agra', 34, 'Uttar Pradesh', null],
            ['Ahmed Nagar', 21, 'Maharashtra', null],
            ['Ahmedabad City', 12, 'Gujarat', null],
            ['Aizawl', 24, 'Mizoram', null],
        ];

        foreach ($cities as $city) {
            City::create([
                'name' => $city[1],
                'state_id' => $city[2],
                'state_name' => $city[3],
                'status' => $city[4],
            ]);
        }
    }
}
