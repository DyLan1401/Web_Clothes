<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class DanhMucSanPhamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('danh_muc')->insert([
            ['id_DM' => 1, 'ten_DM' => 'Áo thun',      'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 2, 'ten_DM' => 'Áo sơ mi',     'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 3, 'ten_DM' => 'Áo khoác',     'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 4, 'ten_DM' => 'Áo len',       'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 5, 'ten_DM' => 'Quần jean',    'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 6, 'ten_DM' => 'Quần tây',     'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 7, 'ten_DM' => 'Quần short',   'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 8, 'ten_DM' => 'Chân váy',     'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 9, 'ten_DM' => 'Đầm dạ hội',   'created_at' => $now, 'updated_at' => $now],
            ['id_DM' => 10, 'ten_DM' => 'Đồ thể thao', 'created_at' => $now, 'updated_at' => $now],
        ]);
        
    }
}
