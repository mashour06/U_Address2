<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert(
            [
                'address_line1' => '23 درب قرمز',
                'address_line2' => 'درب قرمز',
                'city' => 'Cairo',
                'district' => 'El-Azbakeyah',
                'zip' => '11681',
                'country' => 'Egypt',
                'latlng' => '{"lat":"30.050374","lng":"31.262626"}',
                'user_id' => 1,
            ]
        );
    }
}
