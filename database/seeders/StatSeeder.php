<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stats = [
            [
                'title' => 'Products',
                'value' => '1200+',
                'order' => 1,
                'is_active' => true,
            ],
            [
                'title' => 'Clients',
                'value' => '80+',
                'order' => 2,
                'is_active' => true,
            ],
            [
                'title' => 'Customer Satisfaction',
                'value' => '98%',
                'order' => 3,
                'is_active' => true,
            ],
            [
                'title' => 'Years Experience',
                'value' => '8+',
                'order' => 4,
                'is_active' => true,
            ],
        ];

        foreach ($stats as $stat) {
            \App\Models\Stat::create($stat);
        }
    }
}
