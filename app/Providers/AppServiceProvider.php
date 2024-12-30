<?php

namespace App\Providers;

use App\Rune;
use App\Socials;
use Illuminate\Http\Resources\Json\JsonResource;
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
        View::share('rune', new Rune(
            config('rune')
        ));

        View::share('socials', new Socials);

        JsonResource::withoutWrapping();
    }
}
