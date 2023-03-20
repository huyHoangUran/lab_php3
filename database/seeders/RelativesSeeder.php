<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RelativesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $relative = [
            ['Đạt', 'Thành', 'Tuấn', 'Dũng', 'Hà'],
            ['wife', 'brother', 'mother', 'husband', 'father'],

        ];
        for ($i = 50; $i < 100; $i++) {

            DB::table('relatives')->insert([
                'name' => $relative[0][rand(0, 4)] . $i,
                'gender' => rand(0, 1),
                'relations' => $relative[1][rand(0, 4)],
                'employee_id' => rand(22, 27),


            ]);
        }
    }
}
