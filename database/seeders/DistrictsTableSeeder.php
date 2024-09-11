<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DistrictsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $districts = [
            ['name' => 'Ariyalur'],
            ['name' => 'Chengalpattu'],
            ['name' => 'Chennai'],
            ['name' => 'Coimbatore'],
            ['name' => 'Cuddalore'],
            ['name' => 'Dharmapuri'],
            ['name' => 'Dindigul'],
            ['name' => 'Erode'],
            ['name' => 'Kallakurichi'],
            ['name' => 'Kanchipuram'],
            ['name' => 'Kanniyakumari'],
            ['name' => 'Karur'],
            ['name' => 'Krishnagiri'],
            ['name' => 'Madurai'],
            ['name' => 'Mayiladuthurai'],
            ['name' => 'Nagapattinam'],
            ['name' => 'Namakkal'],
            ['name' => 'Nilgiris'],
            ['name' => 'Perambalur'],
            ['name' => 'Pudukkottai'],
            ['name' => 'Ramanathapuram'],
            ['name' => 'Ranipet'],
            ['name' => 'Salem'],
            ['name' => 'Sivaganga'],
            ['name' => 'Tenkasi'],
            ['name' => 'Thanjavur'],
            ['name' => 'Theni'],
            ['name' => 'Thoothukudi'],
            ['name' => 'Tiruchirappalli'],
            ['name' => 'Tirunelveli'],
            ['name' => 'Tirupathur'],
            ['name' => 'Tiruppur'],
            ['name' => 'Tiruvallur'],
            ['name' => 'Tiruvannamalai'],
            ['name' => 'Tiruvarur'],
            ['name' => 'Vellore'],
            ['name' => 'Viluppuram'],
            ['name' => 'Virudhunagar'],
        ];

        // Insert districts into the database with status 'Y'
        DB::table('districts')->insert($districts);
    }
}
