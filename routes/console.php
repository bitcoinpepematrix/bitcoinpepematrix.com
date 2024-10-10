<?php

use App\Jobs\RetrieveRunePrice;
use App\Rune;
use Illuminate\Support\Facades\Schedule;

Schedule::command('bitcoin:cache-price')->everyTenMinutes();
Schedule::command('rune:cache-floor-price')->everyFiveMinutes();
Schedule::command('rune:cache-market-cap')->everyFifteenMinutes();
Schedule::command('rune:cache-holder-count')->hourly();
Schedule::command('rune:cache-transaction-count')->everyFiveMinutes();
Schedule::command('rune:cache-volume')->everyTenMinutes();

Schedule::job(new RetrieveRunePrice(
    new Rune(config('rune'))
))->everyTenMinutes();
