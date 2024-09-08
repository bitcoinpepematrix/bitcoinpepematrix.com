<?php

namespace App\Console\Commands;

use App\Jobs\CacheRuneFloorPrice;
use App\Rune;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Cache;

class CacheRuneFloorPriceCommand extends Command
{
    protected $signature = 'rune:cache-floor-price';

    protected $description = 'Cache the floor price';

    public function handle()
    {
        $rune = new Rune(config('rune'));

        CacheRuneFloorPrice::dispatchSync($rune);

        $this->info('The floor price for '.$rune->ticker.' is '.Cache::get('floor_price', default: 'unknown'));
    }
}
