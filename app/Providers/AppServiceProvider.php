<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use App\Position;
use App\Ken;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
         if (Schema::hasTable('positions')) {
            $positions = Position::all();
            view()->share('positions', $positions);
        }
        
        if (Schema::hasTable('kens')) {
            $kens = Ken::all();
            view()->share('kens', $kens);
        }
    }
}
