<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SanPhamSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('san_phams')->insert([
            [
                'id_san_pham' => 'SP001',
                'Ten_SP' => 'Áo thun nam',
                'MoTa_SP' => 'Áo thun cotton 100%',
                'Gia' => 150000,
                'SoLuong' => 20,
                'MauSac' => 'Trắng',
                'KichThuoc' => 'L',
                'Loai_SP' => 'Thời trang nam',
                'Hinh_SP' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_san_pham' => 'SP002',
                'Ten_SP' => 'Giày sneaker nữ',
                'MoTa_SP' => 'Giày thời trang, năng động',
                'Gia' => 350000,
                'SoLuong' => 15,
                'MauSac' => 'Hồng pastel',
                'KichThuoc' => '38',
                'Loai_SP' => 'Thời trang nữ',
                'Hinh_SP' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'id_san_pham' => 'SP003',
                'Ten_SP' => 'Balo laptop 15.6"',
                'MoTa_SP' => 'Chống nước, chống sốc',
                'Gia' => 420000,
                'SoLuong' => 10,
                'MauSac' => 'Xám',
                'KichThuoc' => '45x30x15cm',
                'Loai_SP' => 'Phụ kiện',
                'Hinh_SP' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }

}
