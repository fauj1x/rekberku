<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\AdminFee;

class AdminFeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        AdminFee::insert([
            [
                'min_amount' => 0,
                'max_amount' => 9999,
                'percentage' => 30.00,
             
            ],
            [
                'min_amount' => 10000,
                'max_amount' => 49999,
                'percentage' => 25.00,
             
            ],
            [
                'min_amount' => 50000,
                'max_amount' => 99999,
                'percentage' => 20.00,
             
            ],
            [
                'min_amount' => 100000,
                'max_amount' => 249999,
                'percentage' => 17.00,
              
            ],
            [
                'min_amount' => 250000,
                'max_amount' => 499999,
                'percentage' => 15.00,
              
            ],
            [
                'min_amount' => 500000,
                'max_amount' => 749999,
                'percentage' => 12.00,
                
            ],
            [
                'min_amount' => 1000000,
                'max_amount' => null,
                'percentage' => 8.00,
             
            ],
        ]);
    }
}