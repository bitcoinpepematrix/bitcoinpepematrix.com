<?php

use App\Jobs\CollectRunePrice;
use App\Rune;
use Illuminate\Support\Facades\Schedule;

Schedule::command('bitcoin:cache-price')->everyTenMinutes();
Schedule::command('rune:cache-floor-price')->everyFiveMinutes();
Schedule::command('rune:cache-market-cap')->everyFifteenMinutes();
Schedule::command('rune:cache-holder-count')->hourly();
Schedule::command('rune:cache-transaction-count')->daily();
Schedule::command('rune:cache-volume')->daily();

Schedule::job(new CollectRunePrice(
    new Rune(config('rune'))
))->everyTenMinutes();
