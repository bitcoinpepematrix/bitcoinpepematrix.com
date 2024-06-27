<?php

namespace App\Providers;

use App\Rune;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        $rune = new Rune(config('rune'));

        View::share('rune', $rune);
    }
}
