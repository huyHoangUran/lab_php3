<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = [
            ['phòng Hành chính', 'phòng Kinh Doanh', 'phòng CSKH', 'phòng Phát Triển', 'phòng Tuyển Dụng'],
            ['Ha Noi', 'Ha Noi', 'Ha Noi', 'Ha Noi', 'Ha Noi'],
            ['0978231345', '0978231345', '0978231345', '0978231235', '0978231235'],
            ['hn@example.com', 'hn@example.com', 'hn@example.example', 'hn@example.example', 'hn@example.example'],
            ['1231232211321213421', '12312322113212134212', '1231232211321213420', '1231232211321213421', '1231232211321213421']

        ];
        $cols = count($names['depa']);
        for ($j = 0; $j < $cols; $j++) {

            DB::table('departments')->insert([
                'name' => $names[0][$j],
                'location' => $names[1][$j],
                'phone_number' => $names[2][$j],
                'email' => $names[3][$j],
                'fax' => $names[4][$j]
            ]);
        }

        // DB::table('relatives')->insert([
        //     'name'=>'phòng Hành Chính',
        //     'location'=>'Hà Nội',
        //     'phone_number'=>'0989123345',
        //     'email'=>'hn008320@gmail.com',
        //     'fax'=>'1231232211321213421'
        // ]);
        // DB::table('relatives')->insert([
        //     'name'=>'phòng Hành Chính',
        //     'location'=>'Hà Nội',
        //     'phone_number'=>'0989123345',
        //     'email'=>'hn008320@gmail.com',
        //     'fax'=>'1231232211321213421'
        // ]);
        // DB::table('relatives')->insert([
        //     'name'=>'phòng Hành Chính',
        //     'location'=>'Hà Nội',
        //     'phone_number'=>'0989123345',
        //     'email'=>'hn008320@gmail.com',
        //     'fax'=>'1231232211321213421'
        // ]);
        // DB::table('relatives')->insert([
        //     'name'=>'phòng Hành Chính',
        //     'location'=>'Hà Nội',
        //     'phone_number'=>'0989123345',
        //     'email'=>'hn008320@gmail.com',
        //     'fax'=>'1231232211321213421'
        // ]);
    }
}
