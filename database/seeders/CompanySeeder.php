<?php

namespace Database\Seeders;

use App\Models\Company;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Company::create([
            'name' => 'PT. FIC16',
            'email' => 'fic16@fic16.com',
            'address' => 'Riau',
            'latitude'=> '-7.7470',
            'longitude'=> '110.355398',
            'radius_km'=>'0.5',
            'time_in'=> '08:00',
            'time_out'=> '17:00'
        ]);
    }
}
