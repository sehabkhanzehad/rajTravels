<?php

namespace Database\Seeders;

use App\Models\Pilgrim;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PilgrimSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pilgrim::truncate();
        for ($i = 0; $i < 50; $i++) {
            Pilgrim::create([
                'name' =>"Zehad",
                "father_name" =>"Asrafil",
                'mother_name' =>"Shokatara",
                "date_of_birth" =>now()->addDays(rand("1", "7")),
                "serial_no" =>4444,
                "village" => "nayagola",
                "post_office" => "Kazipara",
                "post_code" => 6300,
                "police_stand" => "Mirpur",
                "district" => "Dhaka",
            ]);
        }
    }
}


