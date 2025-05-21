<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

<<<<<<< HEAD
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        $this->call([
        DiscountSeeder::class,
    ]);
=======
        User::factory()->count(50)->create();
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test1@example.com',
        ]);

        $this->call([
            DanhMucSanPhamSeeder::class,
        ]);
        $this->call(SanPhamSeeder::class);

>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
    }
}
