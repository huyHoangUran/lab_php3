<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names =  ['Hoàng', 'Long', 'Trung', 'Thành', 'Liên', 'Đức', 'Trường', 'Công',];
        for ($i = 20; $i < 30; $i++) {

            DB::table('employees')->insert([
                'name' => $names[array_rand($names)] . $i,
                'email' => '@example' . $i . 'name' . '.com',
                'phone_number' => "09123442" . rand(00, 99),
                'date_of_birth' => now(),
                'department_id' => rand(1, 5)
            ]);
        }
    }
}
