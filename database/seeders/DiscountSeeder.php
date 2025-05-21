<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class DiscountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $discounts = [];

        for ($i = 1; $i <= 100; $i++) {
            $discounts[] = [
                'discount_percent' => rand(5, 50), // phần trăm ngẫu nhiên từ 5 đến 50
                'discount_type' => rand(0, 1) ? 'percentage' : 'fixed',
                'min_order_value' => rand(100, 1000), // giá trị đơn hàng tối thiểu
                'usage_limit' => rand(10, 100),
                'usage_count' => 0,
                'discount_expiry_date' => Carbon::now()->addDays(rand(7, 30)),
                'created_at' => now(),
            ];
        }

        DB::table('discounts')->insert($discounts);
    }
}

