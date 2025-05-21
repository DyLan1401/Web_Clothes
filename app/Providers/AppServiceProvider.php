<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
<<<<<<< HEAD
use Illuminate\Support\Facades\Schema;
=======
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
<<<<<<< HEAD
    

    public function boot(): void
{
    Schema::defaultStringLength(191); // fix lỗi key quá dài cho utf8mb4
}
=======
    public function boot(): void
    {
        //
    }
>>>>>>> bf4476a8fc785ba2b652d2678268fc5640feb534
}
