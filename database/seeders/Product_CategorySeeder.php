<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class Product_CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('danh_muc')->insert([
            ['ten_DM' => 'Điện thoại'],
            ['ten_DM' => 'Laptop'],
            ['ten_DM' => 'Máy tính bảng'],
            ['ten_DM' => 'Phụ kiện'],
        ]);
        
    }
}
